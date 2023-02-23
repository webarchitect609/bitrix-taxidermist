<?php
namespace WebArch\BitrixTaxidermist\Mock\Bitrix\Main;

/**
 * Class Loader loads required files, classes and modules. It is the only class which is included directly.
 * @package Bitrix\Main
 */
class Loader
{
    /**
     * Can be used to prevent loading all modules except main and fileman
     */
    const SAFE_MODE = false;

    const BITRIX_HOLDER = "bitrix";
    const LOCAL_HOLDER = "local";

    protected static $safeModeModules = ["main" => true, "fileman" => true];
    protected static $loadedModules = ["main" => true];
    protected static $semiloadedModules = [];
    protected static $modulesHolders = ["main" => self::BITRIX_HOLDER];
    protected static $sharewareModules = [];

    /**
     * Custom autoload paths.
     * @var array [namespace => [ [path1, depth1], [path2, depth2] ]
     */
    protected static $namespaces = [];

    /**
     * Returned by includeSharewareModule() if module is not found
     */
    const MODULE_NOT_FOUND = 0;
    /**
     * Returned by includeSharewareModule() if module is installed
     */
    const MODULE_INSTALLED = 1;
    /**
     * Returned by includeSharewareModule() if module works in demo mode
     */
    const MODULE_DEMO = 2;
    /**
     * Returned by includeSharewareModule() if the trial period is expired
     */
    const MODULE_DEMO_EXPIRED = 3;

    protected static $autoLoadClasses = [];

    /**
     * @var bool Controls throwing exception by requireModule method
     */
    protected static $requireThrowException = true;

    /** @deprecated   */
    const ALPHA_LOWER = "qwertyuioplkjhgfdsazxcvbnm";
    /** @deprecated   */
    const ALPHA_UPPER = "QWERTYUIOPLKJHGFDSAZXCVBNM";

    /**
     * Includes a module by its name.
     *
     * @param string $moduleName Name of the included module
     * @throws LoaderException
     * @return bool Returns true if module was included successfully, otherwise returns false
     */
    public static function includeModule($moduleName)
    {
        return true;
    }

    /**
     * Includes module by its name, throws an exception in case of failure
     *
     * @param $moduleName
     *
     * @throws LoaderException
     * @return bool
     */
    public static function requireModule($moduleName)
    {
        return true;
    }

    private static function includeModuleInternal($path)
    {
        return;
    }

    /**
     * Includes shareware module by its name.
     * Module must initialize constant <module name>_DEMO = Y in include.php to define demo mode.
     * include.php must return false to define trial period expiration.
     * Constants is used because it is easy to obfuscate them.
     *
     * @param string $moduleName Name of the included module
     * @return int One of the following constant: Loader::MODULE_NOT_FOUND, Loader::MODULE_INSTALLED, Loader::MODULE_DEMO, Loader::MODULE_DEMO_EXPIRED
     */
    public static function includeSharewareModule($moduleName)
    {
        return self::MODULE_INSTALLED;
    }

    public static function clearModuleCache($moduleName)
    {
        return;
    }

    /**
     * Returns document root
     *
     * @return string Document root
     */
    public static function getDocumentRoot()
    {
        static $documentRoot = null;
        if ($documentRoot === null) {
            $documentRoot = rtrim($_SERVER["DOCUMENT_ROOT"], "/\\");
        }
        return $documentRoot;
    }

    /**
     * Registers classes for auto loading.
     * All the frequently used classes should be registered for auto loading (performance).
     * It is not necessary to register rarely used classes. They can be found and loaded dynamically.
     *
     * @param string $moduleName Name of the module. Can be null if classes are not part of any module
     * @param array $classes Array of classes with class names as keys and paths as values.
     * @throws LoaderException
     */
    public static function registerAutoLoadClasses($moduleName, array $classes)
    {
        if (empty($classes)) {
            return;
        }
        if (($moduleName !== null) && empty($moduleName)) {
            throw new LoaderException(sprintf("Module name '%s' is not correct", $moduleName));
        }

        foreach ($classes as $class => $file) {
            $class = ltrim($class, "\\");
            $class = strtolower($class);

            self::$autoLoadClasses[$class] = [
                "module" => $moduleName,
                "file" => $file,
            ];
        }
    }

    /**
     * Registers namespaces with custom paths.
     * e.g. ('Bitrix\Main\Dev', '/home/bitrix/web/site/bitrix/modules/main/dev/lib')
     *
     * @param string $namespace A namespace prefix.
     * @param string $path An absolute path.
     */
    public static function registerNamespace($namespace, $path)
    {
        $namespace = trim($namespace, "\\")."\\";
        $namespace = strtolower($namespace);

        $path = rtrim($path, "/\\");
        $depth = substr_count(rtrim($namespace, "\\"), "\\");

        self::$namespaces[$namespace][] = [
            "path" => $path,
            "depth" => $depth,
        ];
    }

    /**
     * Unregisters a namespace.
     * @param string $namespace
     */
    public static function unregisterNamespace($namespace)
    {
        $namespace = trim($namespace, "\\")."\\";
        $namespace = strtolower($namespace);

        unset(self::$namespaces[$namespace]);
    }

    /**
     * Registers an additional autoload handler.
     * @param callable $handler
     */
    public static function registerHandler(callable $handler)
    {
        \spl_autoload_register($handler);
    }

    /**
     * PSR-4 compatible autoloader.
     * https://www.php-fig.org/psr/psr-4/
     *
     * @param $className
     */
    public static function autoLoad($className)
    {
        // fix web env
        $className = ltrim($className, "\\");

        $classLower = strtolower($className);

        static $documentRoot = null;
        if ($documentRoot === null) {
            $documentRoot = self::getDocumentRoot();
        }

        //optimization via direct paths
        if (isset(self::$autoLoadClasses[$classLower])) {
            $pathInfo = self::$autoLoadClasses[$classLower];
            if ($pathInfo["module"] != "") {
                $module = $pathInfo["module"];
                $holder = (isset(self::$modulesHolders[$module])? self::$modulesHolders[$module] : self::BITRIX_HOLDER);

                $filePath = (defined('REPOSITORY_ROOT'))
                    ? REPOSITORY_ROOT
                    : "{$documentRoot}/{$holder}/modules";

                $filePath .= '/'.$module."/".$pathInfo["file"];

                require_once $filePath;
            } else {
                require_once $documentRoot.$pathInfo["file"];
            }
            return;
        }

        if (preg_match("#[^\\\\/a-zA-Z0-9_]#", $className)) {
            return;
        }

        $tryFiles = [[
            "real" => $className,
            "lower" => $classLower,
        ]];

        if (substr($classLower, -5) == "table") {
            // old *Table stored in reserved files
            $tryFiles[] = [
                "real" => substr($className, 0, -5),
                "lower" => substr($classLower, 0, -5),
            ];
        }

        foreach ($tryFiles as $classInfo) {
            $classParts = explode("\\", $classInfo["lower"]);

            //remove class name
            array_pop($classParts);

            while (!empty($classParts)) {
                //go from the end
                $namespace = implode("\\", $classParts)."\\";

                if (isset(self::$namespaces[$namespace])) {
                    //found
                    foreach (self::$namespaces[$namespace] as $namespaceLocation) {
                        $depth = $namespaceLocation["depth"];
                        $path = $namespaceLocation["path"];

                        $fileParts = explode("\\", $classInfo["real"]);

                        for ($i=0; $i <= $depth; $i++) {
                            array_shift($fileParts);
                        }

                        $classPath = implode("/", $fileParts);

                        $classPathLower = strtolower($classPath);

                        // final path lower case
                        $filePath = $path.'/'.$classPathLower.".php";

                        if (file_exists($filePath)) {
                            require_once $filePath;
                            break 3;
                        }

                        // final path original case
                        $filePath = $path.'/'.$classPath.".php";

                        if (file_exists($filePath)) {
                            require_once $filePath;
                            break 3;
                        }
                    }
                }

                //try the shorter namespace
                array_pop($classParts);
            }
        }
    }

    /**
     * @param $className
     *
     * @throws LoaderException
     */
    public static function requireClass($className)
    {
        $file = ltrim($className, "\\");    // fix web env
        $file = strtolower($file);

        if (preg_match("#[^\\\\/a-zA-Z0-9_]#", $file)) {
            return;
        }

        $tryFiles = [$file];

        if (substr($file, -5) == "table") {
            // old *Table stored in reserved files
            $tryFiles[] = substr($file, 0, -5);
        }

        foreach ($tryFiles as $file) {
            $file = str_replace('\\', '/', $file);
            $arFile = explode("/", $file);

            if ($arFile[0] === "bitrix") {
                array_shift($arFile);

                if (empty($arFile)) {
                    break;
                }

                $module = array_shift($arFile);
                if ($module == null || empty($arFile)) {
                    break;
                }
            } else {
                $module1 = array_shift($arFile);
                $module2 = array_shift($arFile);

                if ($module1 == null || $module2 == null || empty($arFile)) {
                    break;
                }

                $module = $module1.".".$module2;
            }

            if (!self::includeModule($module)) {
                throw new LoaderException(sprintf(
                    "There is no `%s` class, module `%s` is unavailable",
                    $className,
                    $module
                ));
            }
        }

        self::autoLoad($className);
    }

    /**
     * Checks if file exists in /local or /bitrix directories
     *
     * @param string $path File path relative to /local/ or /bitrix/
     * @param null|string $root Server document root, default self::getDocumentRoot()
     * @return bool|string Returns combined path or false if the file does not exist in both dirs
     */
    public static function getLocal($path, $root = null)
    {
        if ($root === null) {
            $root = self::getDocumentRoot();
        }

        if (file_exists($root."/local/".$path)) {
            return $root."/local/".$path;
        }
        if (file_exists($root."/bitrix/".$path)) {
            return $root."/bitrix/".$path;
        }
        
        
        return false;
    }

    /**
     * Checks if file exists in personal directory.
     * If $_SERVER["BX_PERSONAL_ROOT"] is not set than personal directory is equal to /bitrix/
     *
     * @param string $path File path relative to personal directory
     * @return bool|string Returns combined path or false if the file does not exist
     */
    public static function getPersonal($path)
    {
        $root = self::getDocumentRoot();
        $personal = (isset($_SERVER["BX_PERSONAL_ROOT"])? $_SERVER["BX_PERSONAL_ROOT"] : "");

        if ($personal <> '' && file_exists($root.$personal."/".$path)) {
            return $root.$personal."/".$path;
        }

        return self::getLocal($path, $root);
    }

    /**
     * Changes requireModule behavior
     *
     * @param bool $requireThrowException
     */
    public static function setRequireThrowException($requireThrowException)
    {
        self::$requireThrowException = (bool) $requireThrowException;
    }
}

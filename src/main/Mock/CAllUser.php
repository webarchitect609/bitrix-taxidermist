<?php
declare(strict_types=1);

namespace WebArch\BitrixTaxidermist\Mock;

use WebArch\BitrixTaxidermist\Mock\Bitrix\Main\Authentication;

/**
 * @deprecated
 */
class CAllUser extends CDBResult
{
    public $LAST_ERROR = "";
    protected $admin;
    /** @var Authentication\Context */
    protected $context;

    protected static $kernelSession;
    protected static $CURRENT_USER = false;
    protected $justAuthorized = false;
    protected static $userGroupCache = [];

    const STATUS_ONLINE = 'online';
    const STATUS_OFFLINE = 'offline';

    //in seconds
    const PHONE_CODE_OTP_INTERVAL = 30;
    const PHONE_CODE_RESEND_INTERVAL = 60;

    public const PASSWORD_SPECIAL_CHARS = ',.<>/?;:\'"[]{}\|`~!@#$%^&*()_+=-';

    /**
     * CUser constructor.
     */
    public function __construct()
    {
    }

    public function GetParam($name)
    {
        return null;
    }

    public function SetParam($name, $value)
    {
    }

    public function GetSecurityPolicy()
    {
        return "";
    }

    public function GetID()
    {
        return 0;
    }

    public function GetLogin()
    {
        return "";
    }

    public function GetEmail()
    {
        return "";
    }

    public function GetFullName()
    {
        return "";
    }

    public function GetFirstName()
    {
        return "";
    }

    public function GetLastName()
    {
        return "";
    }

    public function GetSecondName()
    {
        return "";
    }

    public function GetFormattedName($bUseBreaks = true, $bHTMLSpec = true)
    {
        return "";
    }

    /**
     * @deprecated Does nothing.
     */
    public static function err_mess()
    {
    }

    public function Add($arFields)
    {
        return 0;
    }

    public static function GetDropDownList($strSqlSearch="and ACTIVE='Y'", $strSqlOrder="ORDER BY ID, NAME, LAST_NAME")
    {
        return [];
    }

    public static function GetList($by = '', $order = '', $arFilter = [], $arParams = [])
    {
        return null;
    }

    public static function IsOnLine($id, $interval = null)
    {
        return true;
    }

    public function GetUserGroupArray()
    {
        return [2];
    }

    public function SetUserGroupArray($arr)
    {
    }

    public function GetUserGroupString()
    {
        return $this->GetGroups();
    }

    public function GetGroups()
    {
        return "";
    }

    public function RequiredHTTPAuthBasic($Realm = "Bitrix")
    {
        return false;
    }

    public function LoginByCookies()
    {
    }

    public function LoginByHash($login, $hash)
    {
        return "";
    }

    public function LoginByHttpAuth()
    {
        return null;
    }

    public function LoginByDigest($arDigest)
    {
        return ["MESSAGE"=>"<br>", "TYPE"=>"ERROR"];
    }

    public static function UpdateDigest($ID, $pass)
    {
    }

    public function LoginHitByHash($hash, $closeSession = true, $delete = false, $remember = false)
    {
        return true;
    }

    public static function AddHitAuthHash($url, $user_id = false, $site_id = false, $ttl = null)
    {
        return "";
    }

    public static function GetHitAuthHash($urlMask, $userID = false, $siteId = null)
    {
        return false;
    }

    public static function CleanUpHitAuthAgent()
    {
        return 'CUser::CleanUpHitAuthAgent();';
    }

    protected function UpdateSessionData(Authentication\Context $context, $onlyActive = true)
    {
        return [];
    }

    /**
     * Performs the user authorization:
     *    fills session parameters;
     *    remembers auth;
     *    spreads auth through sites.
     * @param Authentication\Context|int $context Contains user id.
     * @param bool $bSave Save authorization in cookies.
     * @param bool $bUpdate Update last login information in DB.
     * @param null|string $applicationId An application password ID.
     * @return bool
     */
    public function Authorize($context, $bSave = false, $bUpdate = true, $applicationId = null, $onlyActive = true)
    {
        return true;
    }

    protected function setStoredAuthCookies($login, $hash, $save)
    {
    }

    /**
     * @deprecated Does nothing.
     */
    public function GetSessionHash()
    {
    }

    /**
     * @deprecated Does nothing.
     */
    public function GetPasswordHash($PASSWORD_HASH)
    {
    }

    /**
     * @deprecated Does nothing.
     */
    public function SavePasswordHash()
    {
    }

    /**
     * Authenticates the user and then authorizes him
     * @param string $login
     * @param string $password
     * @param string $remember
     * @param string $password_original
     * @return array|bool
     */
    public function Login($login, $password, $remember="N", $password_original="Y")
    {
        return true;
    }

    /**
     * Internal authentication by login and password.
     * @param array $arParams
     * @param array|bool $result_message
     * @param null|Authentication\Context $context
     * @return int User ID on success or 0 on failure. Additionally, $result_message will hold an error.
     */
    public static function LoginInternal(&$arParams, &$result_message = true, $context = null)
    {
        return 0;
    }

    protected static function blockUser($userId, $blockTime, $loginAttempts)
    {
    }

    protected static function CheckUsersCount($user_id)
    {
        return true;
    }

    public function LoginByOtp($otp, $remember_otp = "N", $captcha_word = "", $captcha_sid = "")
    {
        return true;
    }

    public function AuthorizeWithOtp($user_id, $bSave = false)
    {
        return false;
    }

    public function ChangePassword($LOGIN, $CHECKWORD, $PASSWORD, $CONFIRM_PASSWORD, $SITE_ID=false, $captcha_word = "", $captcha_sid = 0, $authActions = true, $phoneNumber = "", $currentPassword = "")
    {
        return ["MESSAGE"=>"<br>", "TYPE"=>"OK"];
    }

    public static function GeneratePasswordByPolicy(array $groups)
    {
        return "";
    }

    public static function CheckPasswordAgainstPolicy($password, $arPolicy, $userId = null)
    {
        return [];
    }

    /**
     * Sends a profile information to email
     */
    public static function SendUserInfo($ID, $SITE_ID, $MSG, $bImmediate=false, $eventName="USER_INFO", $checkword = null)
    {
    }

    public static function SendPassword($LOGIN, $EMAIL, $SITE_ID = false, $captcha_word = "", $captcha_sid = 0, $phoneNumber = "", $shortCode = false)
    {
        return true;
    }

    public function Register($USER_LOGIN, $USER_NAME, $USER_LAST_NAME, $USER_PASSWORD, $USER_CONFIRM_PASSWORD, $USER_EMAIL, $SITE_ID = false, $captcha_word = "", $captcha_sid = 0, $bSkipConfirm = false, $USER_PHONE_NUMBER = "")
    {
        return true;
    }

    public function SimpleRegister($USER_EMAIL, $SITE_ID = false)
    {
        return true;
    }

    public function IsAuthorized()
    {
        return true;
    }

    public function HasNoAccess()
    {
        return false;
    }

    public function IsJustAuthorized()
    {
        return false;
    }

    public function IsJustBecameOnline()
    {
        return false;
    }

    public function IsAdmin()
    {
        return false;
    }

    public function SetControllerAdmin($isAdmin = true)
    {
    }

    /**
     * @param array|true $deleteParms Parameters to delete; if true, delete all
     * @return string
     */
    public static function getLogoutParams($deleteParms = [])
    {
        return "";
    }

    public function Logout()
    {
    }

    public static function GetUserGroup($ID)
    {
        return [];
    }

    public static function GetUserGroupEx($ID)
    {
        return [];
    }

    public static function GetUserGroupList($ID)
    {
        return [];
    }

    public function CheckFields(&$arFields, $ID = false)
    {
        return true;
    }

    /**
     * @param array $arFields
     * @param bool|int $ID
     * @return string
     */
    public static function CheckInternalFields($arFields, $ID = false)
    {
        return true;
    }

    public static function GetByID($ID)
    {
        return [];
    }

    public static function GetByLogin($LOGIN)
    {
        return [];
    }

    public function Update($ID, $arFields, $authActions = true)
    {
        return true;
    }

    public static function SetUserGroup($USER_ID, $arGroups, $newUser = false)
    {
        return null;
    }

    /**
     * Appends groups to the list of existing user's groups.
     *
     * @param int $user_id
     * @param array|int $groups A single number, or an array of numbers, or an array of arrays("GROUP_ID"=>$val, "DATE_ACTIVE_FROM"=>$val, "DATE_ACTIVE_TO"=>$val)
     */
    public static function AppendUserGroup($user_id, $groups)
    {
    }

    public static function GetCount()
    {
        return 1;
    }

    public static function Delete($ID)
    {
        return true;
    }

    public static function GetExternalAuthList()
    {
        $result = new CDBResult;
        return $result;
    }

    public static function GetGroupPolicy($iUserId)
    {
        return [];
    }

    public static function CheckStoredHash($context, $hash, $tempHash = false)
    {
        return false;
    }

    public function GetAllOperations($arGroups = false)
    {
        return [];
    }

    public function CanDoOperation($op_name, $user_id = 0)
    {
        return true;
    }

    public static function GetFileOperations($arPath, $arGroups=false)
    {
        return [];
    }


    public function CanDoFileOperation($op_name, $arPath)
    {
        return true;
    }

    public static function UserTypeRightsCheck($entity_id)
    {
        return "W";
    }

    public function CanAccess($arCodes)
    {
        return false;
    }

    public function GetAccessCodes()
    {
        return ['W'];
    }

    public static function CleanUpAgent()
    {
        return "CUser::CleanUpAgent();";
    }

    public static function DeactivateAgent()
    {
        return "CUser::DeactivateAgent();";
    }

    public static function UnblockAgent($userId)
    {
        return "";
    }

    public static function GetActiveUsersCount()
    {
        return 1;
    }

    public static function SetLastActivityDate($userId = null, $cache = false)
    {
        return true;
    }

    public static function SetLastActivityDateByArray($arUsers, $ip = null)
    {
        return true;
    }

    public static function GetSecondsForLimitOnline()
    {
        return 1;
    }

    public static function GetExternalUserTypes()
    {
        return [];
    }

    public static function GetOnlineStatus($userId, $lastseen, $now = false)
    {
        return [];
    }

    public static function SearchUserByName($arName, $email = "", $bLoginMode = false)
    {
        return new CDBResult();
    }

    public static function FormatName($NAME_TEMPLATE, $arUser, $bUseLogin = false, $bHTMLSpec = true)
    {
        return "";
    }

    public static function clearUserGroupCache($ID = false)
    {
    }

    public function CheckAuthActions()
    {
    }

    public static function AuthActionsCleanUpAgent()
    {
        return 'CUser::AuthActionsCleanUpAgent();';
    }

    /**
     * @param int $userId
     * @return array|bool [code, phone_number]
     */
    public static function GeneratePhoneCode($userId)
    {
        return false;
    }

    /**
     * @param string $phoneNumber
     * @param string $code
     * @return bool|int User ID on success, false on error
     */
    public static function VerifyPhoneCode($phoneNumber, $code)
    {
        return false;
    }
}

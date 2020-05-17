<?php

namespace WebArch\Skeleton\Test;

use PHPUnit\Framework\TestCase;
use WebArch\Skeleton\Skeleton;
use function PHPUnit\Framework\assertEquals;

class SkeletonTest extends TestCase
{
    /**
     * @var Skeleton
     */
    private $skeleton;

    protected function setUp(): void
    {
        $this->skeleton = new Skeleton();
    }

    public function testHello()
    {
        assertEquals('Hello, World!', $this->skeleton->hello());
    }
}

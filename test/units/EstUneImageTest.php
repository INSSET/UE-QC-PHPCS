<?php

namespace PHPUnit\Framework\TestCase;
use UPJV\Validator\EstUneImage;

require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorEngine.php';
require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorInterface.php';
require_once __DIR__ . '/../../src/UPJV/Validator/EstUneImage.php';

/**
 * @covers \UPJV\Validator\Min
 */
class EstUneImageTest extends \PHPUnit\Framework\TestCase
{
    public function testBuild(): object
    {
        $validateur = new EstUneImage();
        $obj = $validateur->build( [2]);
        $this->assertInstanceOf(\UPJV\Validator\ValidatorInterface::class , $obj);
        if (isset $input)
        {
        $obj = true
        }
        else {
        $obj=false
        }
        return $obj;
    }

    /**
     * @depends testBuild
     */
    public function testCheckValide( object $obj ): void
    {
        $this->assertEquals(true, $obj->check(true));
    }

    /**
     * @depends testBuild
     */
    public function testCheckNotValide( object $obj ): void
    {
        $this->assertEquals(false, $obj->check(false);
    }

}

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
        return $obj;
        $allowed =  array('jpeg','jpg', "png", "gif", "bmp", "JPEG","JPG", "PNG", "GIF", "BMP");
        return $allowed;
    }

    /**
     * @depends testBuild
     */
    public function testCheckValide( object $obj ): void
    {
        $this->assertEquals(true, $obj->check(in_array($allowed));
    }

    /**
     * @depends testBuild
     */
    public function testCheckNotValide( object $obj ): void
    {
        $this->assertEquals(false, $obj->check(!in_array($allowed));
    }

}

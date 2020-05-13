<?php

use LuminFire\LaravelFmErrorHelper\FMError;
use LuminFire\LaravelFmErrorHelper\Helper;

class TestCase extends Orchestra\Testbench\TestCase
{
    public function testSuccess()
    {
        $this->assertEquals(200, FMError::getErrorCode(0));
    }

    public function testAllCodes()
    {
        foreach (FMError::$fmErrorCodes as $key => $error) {
            $this->assertArrayHasKey('filemaker', $error);
            $this->assertArrayHasKey('http', $error);
            $this->assertArrayHasKey('message', $error);

            $this->assertEquals($key, $error['filemaker']);
            $this->assertEquals($error['http'], FMError::getErrorCode($error['filemaker']));
        }
    }

    public function testRenameClass()
    {
        $this->assertEquals(Helper::getErrorCode(102), FMError::getErrorCode(102));
    }
}

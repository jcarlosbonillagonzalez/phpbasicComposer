<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('i@gmail.com');
        $this->assertTrue($email);

        $email = Validate::email('i@@gmail.com');
        $this->assertFalse($email);
    }
    public function test_url()
    {
        $url = Validate::url('https://intranet.massyenergy.co');
        $this->assertTrue($url);

        $url = Validate::url('intranet.massyenergy.co');
        $this->assertFalse($url);
    }

    public function password()
    {
        $pass = Validate::password('Abc1234VS');
        $this->assertTrue($pass);

        $pass = Validate::password('Abc2');
        $this->assertFalse($pass);

    }
}
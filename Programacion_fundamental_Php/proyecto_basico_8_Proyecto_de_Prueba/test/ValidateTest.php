<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase {
    public function test_email() {
        $email = Validate::email('i@hotmail.com');
        $this->assertTrue($email);
    }

    public function test_url() {
        $url = Validate::url('https://twitter.com/home');
        $this->assertTrue($url);
    }

    public function test_password()
    {
        $password  = Validate::password('Abc1234VS');
        $this->assertTrue($password);

        $password  = Validate::password('Abc1w'); /* En el checkeo, si funcionara, deberia de dar error por la longitud de la contraseña */
        $this->assertFalse($password);
    }
}
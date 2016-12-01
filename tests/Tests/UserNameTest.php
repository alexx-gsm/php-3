<?php


class UserNameTest
    extends \PHPUnit_Framework_TestCase
{
    public function testUserName()
    {
        $user = new \App\Models\User();
        //------------------------------------
        $user->firstName = 'Ivan';
        $user->middleName = 'Ivanovich';
        $user->lastName = 'Ivanov';
        $user->email = 'user@email.com';
        $this->assertEquals(
            $user->firstName . ' ' . $user->middleName . ' ' . $user->lastName,
            $user->getFullName()
        );
        //-------------------------------------
        $user->firstName = 'Ivan';
        $user->middleName = '';
        $user->lastName = 'Ivanov';
        $this->assertEquals(
            $user->firstName . ' ' . $user->lastName,
            $user->getFullName()
        );
        //-------------------------------------
        $user->firstName = '';
        $user->middleName = 'Ivanovich';
        $user->lastName = 'Ivanov';
        $this->assertEquals(
            $user->email,
            $user->getFullName()
        );
        //-------------------------------------
        $user->firstName = '';
        $user->middleName = '';
        $user->lastName = 'Ivanov';
        $this->assertEquals(
            $user->email,
            $user->getFullName()
        );
        //-------------------------------------
        $user->firstName = 'Ivan';
        $user->middleName = 'Ivanovich';
        $user->lastName = '';
        $this->assertEquals(
            $user->email,
            $user->getFullName()
        );
        //-------------------------------------
        $user->firstName = '';
        $user->middleName = 'Ivanovich';
        $user->lastName = '';
        $this->assertEquals(
            $user->email,
            $user->getFullName()
        );
        //-------------------------------------
        $user->firstName = '';
        $user->middleName = '';
        $user->lastName = '';
        $this->assertEquals(
            $user->email,
            $user->getFullName()
        );
    }
}
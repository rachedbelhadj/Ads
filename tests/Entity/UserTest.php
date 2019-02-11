<?php
/**
 * Created by PhpStorm.
 * User: wa81-15
 * Date: 06/02/19
 * Time: 14:27
 */

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $user;

    public function setUp()
    {
        $this->user = new User();
    }

    public function testUserIsInstanceOfUserClass()
    {
        $this->assertInstanceOf(User::class, $this->user);
    }

    public function testIdIsNull()
    {
        $this->assertNull($this->user->getId());
    }

    public function testGetEmail()
    {
        $this->user->setEmail('email');
        $this->assertSame('email', $this->user->getEmail());
    }

    public function testGetpassword()
    {
        $this->user->setPassword('password');
        $this->assertSame('password', $this->user->getPassword());
    }

    public function testGetUsername()
    {
        $this->user->setEmail('username');
        $this->assertSame('username', $this->user->getUsername());
    }

    public function testGetRoles()
    {
        $roles = ['ROLE_USER'];
        $this->user->setRoles($roles);
        $this->assertSame($roles, $this->user->getRoles());
    }

    public function testGetSalt()
    {
        $this->assertSame(null, $this->user->getSalt());
    }

    public function testEraseCredentials()
    {
        $this->assertNull($this->user->eraseCredentials());
    }

    public function testGetPlainPassword()
    {
        $this->user->setPlainPassword('password');
        $this->assertSame('password', $this->user->getPlainPassword());
    }

    public function testGetCurriculum()
    {
        $this->user->setCurriculum('cv');
        $this->assertSame('cv', $this->user->getCurriculum());
    }

    public function testGetCompany()
    {
        $this->user->setCompany('company');
        $this->assertSame('company', $this->user->getCompany());
    }

    public function testGetMode()
    {
        $this->user->setMode('recruiter');
        $this->assertSame('recruiter', $this->user->getMode());
    }
}

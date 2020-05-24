<?php

namespace ZFTest\User;

use PHPUnit\Framework\TestCase;
use ZFT\User;

class UserRepositoryTest extends TestCase
{
    public function testCanCreateUserRepositoryObject(){
        $identityMapStub = new class() implements User\IdentityMapInterface {

        };
        $dataMapperStub = new class() implements User\DataMapperInterface {

        };

        $repository = new User\Repository($identityMapStub, $dataMapperStub);
        
        $this->assertInstanceOf(User\Repository::class, $repository);
    }
}
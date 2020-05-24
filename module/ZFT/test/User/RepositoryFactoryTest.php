<?php 
namespace ZFTest\User;

use ZFT\User\Repository;
use PHPUnit\Framework\TestCase;
use ZFT\User\MemoryIdentityMap;
use ZFT\User\RepositoryFactory;
use ZFT\User\PostgresDataMapper;
use ZFT\User\DataMapperInterface;
use ZFT\User\IdentityMapInterface;
use Zend\ServiceManager\ServiceManager;

class RepositoryFactoryTest extends TestCase
{
    function testCanCreateUserRepository() {
        $serviceManager = new ServiceManager();
        $serviceManager->setFactory(MemoryIdentityMap::class, function() {
            return new class() implements IdentityMapInterface{

            };
        });

        $serviceManager->setFactory(PostgresDataMapper::class, function() {
            return new class() implements DataMapperInterface{
                
            };
        });


        $factory = new RepositoryFactory();
        $repository = $factory($serviceManager, RepositoryFactory::class);

        $this->assertInstanceOf(Repository::class, $repository);
    }
}
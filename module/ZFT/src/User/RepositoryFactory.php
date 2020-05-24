<?php
namespace ZFT\User;

use ZFT\User\Repository as UserRepository;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;

class RepositoryFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $serviceManager, $requestedName, array $options=null) {
        $identityMap = $serviceManager->get(MemoryIdentityMap::class);
        $dataMapper = $serviceManager->get(PostgresDataMapper::class);

        return new UserRepository($identityMap, $dataMapper);
    }
}
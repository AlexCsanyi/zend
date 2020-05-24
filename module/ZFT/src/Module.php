<?php

namespace ZFT;

use ZFT\User\MemoryIdentityMap;
use ZFT\User\RepositoryFactory;
use ZFT\User\PostgresDataMapper;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use ZFT\User\Repository as UserRepository;


class Module implements ServiceProviderInterface{
    public function getServiceConfig()
    {
        return [
            'factories' => [
                PostgresDataMapper::class => InvokableFactory::class,
                MemoryIdentityMap::class => InvokableFactory::class,
                UserRepository::class => RepositoryFactory::class
            ]
        ];
    }
};

?>
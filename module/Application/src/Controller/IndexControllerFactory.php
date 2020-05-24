<?php   

namespace Application\Controller;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use ZFT\User;

class IndexControllerFactory implements FactoryInterface 
{
    public function __invoke(ContainerInterface $serviceManager, $requestedName, array $options=null) {
        $repository = $serviceManager->get(User\Repository::class);

        return new IndexController($repository);
    }
}
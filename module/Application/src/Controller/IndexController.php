<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use ZFT\User;
use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    /** @var User\Repository */
    private $userRepository;

    public function __construct(User\Repository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function indexAction()
    {
        $user = $this->userRepository->getUserById(5);

        return new ViewModel();
    }
}

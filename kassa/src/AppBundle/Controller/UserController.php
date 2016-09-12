<?php

namespace AppBundle\Controller;

use FOS\UserBundle\Model\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends User
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}

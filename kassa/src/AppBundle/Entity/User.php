<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 12/09/16
 * Time: 21:20
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class User
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;

    public function __construct()
    {
        parent::__construct();

        //logic
    }


}
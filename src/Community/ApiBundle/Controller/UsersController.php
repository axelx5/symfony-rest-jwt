<?php
/**
 * Created by PhpStorm.
 * User: axel
 * Date: 8/6/16
 * Time: 5:45 PM
 */

namespace Community\ApiBundle\Controller;


use Community\ApiBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class UsersController extends Controller
{
    /**
     * @return array
     * @View()
     */
    public function getUsersAction()
    {
        $users = $this->getDoctrine()->getRepository('CommunityApiBundle:User')
            ->findAll();

        return ['users' => $users];
    }

    /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="CommunityApiBundle:User")
     */
    public function getUserAction(User $user)
    {
        return ['user' => $user];
    }

}
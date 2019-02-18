<?php

namespace MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function adminAction()
    {
        return $this->render('@My/Admin/admin.html.twig');
    }
    public function contactAction()
    {
        return $this->render('@My/Default/contact.html.twig');
    }

}

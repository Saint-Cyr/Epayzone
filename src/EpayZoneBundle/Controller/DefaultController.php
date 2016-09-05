<?php

namespace EpayZoneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $mailer = $this->get('mailer');
        
        $message = \Swift_Message::newInstance()
                ->setSubject('subject for test')
                ->setFrom('mapoukacyr@gmail.com')
                ->setTo('mapoukacyr@yahoo.fr')
                ->setBody('content for test purpose');
        
        //$mailer->send($message);
        if($this->isGranted('ROLE_VENDOR')){
            var_dump('----ROLE_CHECKING OK-----');
        }
        
        return new Response('----index page----');
    }
}
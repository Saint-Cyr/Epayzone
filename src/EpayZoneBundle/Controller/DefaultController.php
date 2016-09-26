<?php

namespace EpayZoneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {   
        return $this->render('EpayZoneBundle:Default:index.html.twig');
    }
    
    
    public function vendorDashboardAction()
    {
        return $this->render('/admin/vendor_dashboard.html.twig');
    }
    
    public function epayZoneDashboardAction()
    {
        return $this->render('/admin/epayzone_dashboard.html.twig');
    }
}
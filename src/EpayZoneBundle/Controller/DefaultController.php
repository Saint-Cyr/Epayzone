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
    
    public function serviceCategoryAction($id)
    {
       //Get the entity manager
        $em = $this->getDoctrine()->getManager();
        $serviceCategory = $em->getRepository('EpayZoneBundle:ServiceCategory')->find($id);
        return $this->render('EpayZoneBundle:Default:service_category_list.html.twig', array('serviceCategory' => $serviceCategory));
    }
    
    public function vendorDashboardAction()
    {
        return $this->render('/admin/vendor_dashboard.html.twig');
    }
    
    public function epayZoneDashboardAction()
    {
        return $this->render('/admin/epayzone_dashboard.html.twig');
    }
    
    public function serviceCategoriesAction()
    {
        //Get the entity manager
        $em = $this->getDoctrine()->getManager();
        $serviceCategories = $em->getRepository('EpayZoneBundle:ServiceCategory')->findAll();
        return $this->render('EpayZoneBundle:Default:service_categories.html.twig', array('serviceCategories' => $serviceCategories));
    }
    
    public function servicesAction()
    {
        //Get the services from DB.
        $em = $this->getDoctrine()->getManager();
        
        $services = $em->getRepository('EpayZoneBundle:ServiceCategory')->findAll();
        
        return $this->render('EpayZoneBundle:Default:services.html.twig', array('services' => $services));
    }
}
<?php

namespace ConsultationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ConsultationBundle\Entity\Cons;

class FormController extends Controller
{
   
 
    public function addAction(Request $request)
    {
    $cons=new Cons();
    $form=$this->createForm('ConsultationBundle\Form\ConsType',$cons);
    $cons->setDate(new  \DateTime());
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->persist($cons);
        $em->flush($cons);
        unset($cons);
        unset($form);
        $cons = new Cons();
        $cons->setDate(new  \DateTime());
        $form=$this->createForm('ConsultationBundle\Form\ConsType',$cons);
        $form->handleRequest($request);
    }

    return $this->render('ConsultationBundle:const:create.html.twig',array(
        'cons'=>$cons,
        'formCons'=>$form->CreateView(),
    )) ;   
    }
}
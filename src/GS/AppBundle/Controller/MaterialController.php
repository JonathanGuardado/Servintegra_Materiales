<?php

namespace GS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GS\AppBundle\Entity\Material;
use GS\AppBundle\Form\Material\MaterialType;
use Symfony\Component\HttpFoundation\Request;

class MaterialController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $materiales = $em->getRepository('AppBundle:Material')->findAll();

        return $this->render('AppBundle:Material:index.html.twig', 
            array('materiales' => $materiales)
        );
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $material = $em->getRepository('AppBundle:Material')->find($id);

        if (!$material) {
            throw $this->createNotFoundException('No se ha encontrado el material solicitado');
        }

        return $this->render('AppBundle:Material:show.html.twig',
            array('material' => $material)
        );
    }

    public function newAction(Request $request)
    {
        $material = new Material();

        $formulario = $this->createForm(new MaterialType(), $material);
        $formulario->handleRequest($request);

        if ($formulario->isValid()) {
            $material->setCreatedAt(new \DateTime());
            $material->setUpdateAt(new \DateTime());
            $material->setUsuario("ADMIN");

            $em = $this->getDoctrine()->getManager();

            $em->persist($material);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info',
                'Material creado.'
            );
 
            return $this->redirect($this->generateUrl('material_list'));
        }

        return $this->render('AppBundle:Material:create.html.twig', array(
            'accion' => 'crear',
            'formulario' => $formulario->createView()
        ));
    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $material = $em->getRepository('AppBundle:Material')->find($id);
        
        if (!$material) {
        throw $this->createNotFoundException('No se ha encontrado el material solicitado');
        }

        $formulario = $this->createForm(new MaterialType(), $material);
        $formulario->handleRequest($request);

        if ($formulario->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($material);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info',
                'Los datos del material se han actualizado.'
            );
        
            return $this->redirect(
                $this->generateUrl('material_list')
            );
        }

        return $this->render('AppBundle:Material:edit.html.twig', array(
            'formulario' => $formulario->createView(),
            'material' => $material
        ));
    }

    public function deleteAction($id)
    {
        if (empty($id))
            return $this->redirect( $this->generateUrl('material_list') );

        $em = $this->getDoctrine()->getManager();

        $material = $em->getRepository('AppBundle:Material')->find($id);

        if (!$material) {
            throw $this->createNotFoundException('No se ha encontrado el material solicitado');
        }

        //$em->remove($material);
        //$em->flush();

        $this->get('session')->getFlashBag()->add('info',
            'Se ha eliminado el material.'
        );

        return $this->redirect($this->generateUrl('material_list'));
    }
}

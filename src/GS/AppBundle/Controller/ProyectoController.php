<?php

namespace GS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use GS\AppBundle\Entity\Proyecto;
use GS\AppBundle\Form\Proyecto\ProyectoType;

class ProyectoController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $proyectos = $em->getRepository('AppBundle:Proyecto')->findAll();

        return $this->render('AppBundle:Proyecto:index.html.twig', 
            array('proyectos' => $proyectos)
        );
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $proyecto = $em->getRepository('AppBundle:Proyecto')->find($id);

        if (!$proyecto) {
            throw $this->createNotFoundException('No se ha encontrado el proyecto solicitado.');
        }

        return $this->render('AppBundle:Proyecto:show.html.twig',
            array('proyecto' => $proyecto)
        );
    }

    public function newAction(Request $request)
    {
        $proyecto = new Proyecto();

        $formulario = $this->createForm(new ProyectoType(), $proyecto);
        $formulario->handleRequest($request);

        if ($formulario->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $proyecto->setFechaCreacion(new \DateTime());
            $totalProyectos = count($em->getRepository("AppBundle:Proyecto")->findAll());
            $id = $this->getNextMaterialId($totalProyectos);            
            $proyecto->setIdProyecto($id);
            $proyecto->setUsuarioCreacion("ADMIN");

            $em = $this->getDoctrine()->getManager();

            $em->persist($proyecto);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info',
                'Se ha creado el proyecto.'
            );
 
            return $this->redirect($this->generateUrl('proyecto_list'));
        }

        return $this->render('AppBundle:Proyecto:create.html.twig', array(
            'accion' => 'crear',
            'formulario' => $formulario->createView()
        ));
    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $proyecto = $em->getRepository('AppBundle:Proyecto')->find($id);
        
        if (!$proyecto) {
        throw $this->createNotFoundException('No se ha encontrado el proyecto solicitado');
        }

        $formulario = $this->createForm(new ProyectoType(), $proyecto);
        $formulario->handleRequest($request);

        if ($formulario->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proyecto);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info',
                'Los datos del proyecto se han actualizado.'
            );
        
            return $this->redirect(
                $this->generateUrl('proyecto_list')
            );
        }

        return $this->render('AppBundle:Proyecto:edit.html.twig', array(
            'formulario' => $formulario->createView(),
            'proyecto' => $proyecto
        ));
    }

    public function deleteAction($id)
    {
        if (empty($id))
            return $this->redirect( $this->generateUrl('proyecto_list') );

        $em = $this->getDoctrine()->getManager();

        $proyecto = $em->getRepository('AppBundle:Proyecto')->find($id);

        if (!$proyecto) {
            throw $this->createNotFoundException('No se ha encontrado el proyecto solicitado');
        }

        //$em->remove($proyecto);
        //$em->flush();

        $this->get('session')->getFlashBag()->add('info',
            'Se ha eliminado el proyecto.'
        );

        return $this->redirect($this->generateUrl('proyecto_list'));
    }
    public function getNextMaterialId($nMateriales) {
        $j = 4 -  strlen((string) $nMateriales);        
        $cadenaAuxiliar="";
        for ($i = 0; $i <= $j; $i++) {
            $cadenaAuxiliar.="0";
        }
        return $cadenaAuxiliar.$nMateriales;
    }
}

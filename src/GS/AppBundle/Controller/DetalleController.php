<?php

namespace GS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use GS\AppBundle\Entity\Detalles;
use GS\AppBundle\Entity\Ordenes;
use GS\AppBundle\Form\Detalle\DetalleType;

class DetalleController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $detalles = $em->getRepository('AppBundle:Detalles')->findAll();

        return $this->render('AppBundle:Detalle:index.html.twig', 
            array('detalles' => $detalles)
        );
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $detalle = $em->getRepository('AppBundle:Detalles')->find($id);

        if (!$detalle) {
            throw $this->createNotFoundException('No se ha encontrado el detalle solicitado');
        }

        return $this->render('AppBundle:Detalle:show.html.twig',
            array('detalle' => $detalle)
        );
    }

    public function newAction(Request $request)
    {
        $detalle = new Detalles();
        $detalle->setLimiteMes(99);

        $orden1 = new Ordenes();
        $orden1->setCantidad(1);
        $orden1->setDetalle($detalle);

        $orden2 = new Ordenes();
        $orden2->setCantidad(1);
        $orden2->setDetalle($detalle);

        $detalle->getOrdenes()->add($orden1);
        $detalle->getOrdenes()->add($orden2);

        $formulario = $this->createForm(new DetalleType(), $detalle);
        $formulario->handleRequest($request);

        if ($formulario->isValid()) {
            $detalle->setCreatedAt(new \DateTime());
            $detalle->setUpdateAt(new \DateTime());
            $detalle->setUsuario("ADMIN");

            $em = $this->getDoctrine()->getManager();

            $em->persist($detalle);
            $em->flush();

            foreach ($detalle->getOrdenes() as $orden) {

                $orden->setCreatedAt(new \DateTime());
                $orden->setUpdateAt(new \DateTime());
                $orden->setUsuario("ADMIN");

                $em = $this->getDoctrine()->getManager();
                $em->persist($orden);
                $em->flush();
            }

            $this->get('session')->getFlashBag()->add('info',
                'Se ha creado el detalle.'
            );
 
            return $this->redirect($this->generateUrl('detalle_list'));
        }

        return $this->render('AppBundle:Detalle:create.html.twig', array(
            'accion' => 'crear',
            'formulario' => $formulario->createView()
        ));
    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $detalle = $em->getRepository('AppBundle:Detalles')->find($id);
        
        if (!$detalle) {
        throw $this->createNotFoundException('No se ha encontrado el detalle solicitado');
        }

        $formulario = $this->createForm(new DetalleType(), $detalle);
        $formulario->handleRequest($request);

        if ($formulario->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($detalle);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info',
                'Los datos del detalle se han actualizado.'
            );
        
            return $this->redirect(
                $this->generateUrl('detalle_list')
            );
        }

        return $this->render('AppBundle:Detalle:edit.html.twig', array(
            'formulario' => $formulario->createView(),
            'detalle' => $detalle
        ));
    }

    public function deleteAction($id)
    {
        if (empty($id))
            return $this->redirect( $this->generateUrl('detalle_list') );

        $em = $this->getDoctrine()->getManager();

        $detalle = $em->getRepository('AppBundle:Detalles')->find($id);

        if (!$detalle) {
            throw $this->createNotFoundException('No se ha encontrado el detalle solicitado');
        }

        //$em->remove($detalle);
        //$em->flush();

        $this->get('session')->getFlashBag()->add('info',
            'Se ha eliminado el detalle.'
        );

        return $this->redirect($this->generateUrl('detalle_list'));
    }
}

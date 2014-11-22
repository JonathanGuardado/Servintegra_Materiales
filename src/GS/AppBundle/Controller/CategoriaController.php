<?php

namespace GS\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use GS\AppBundle\Entity\Categorias;
use GS\AppBundle\Form\Categoria\CategoriaType;


class CategoriaController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categorias = $em->getRepository('AppBundle:Categorias')->findAll();

        return $this->render('AppBundle:Categoria:index.html.twig',
            array('categorias' => $categorias)
        );
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $categoria = $em->getRepository('AppBundle:Categorias')->find($id);

        if (!$categoria) {
            throw $this->createNotFoundException('No se ha encontrado la categoria solicitada');
        }

        return $this->render('AppBundle:Categoria:show.html.twig',
            array('categoria' => $categoria)
        );
    }

    public function newAction(Request $request)
    {
        $categoria = new Categorias();

        $formulario = $this->createForm(new CategoriaType(), $categoria);
        $formulario->handleRequest($request);

        if ($formulario->isValid()) {
            $categoria->setCreatedAt(new \DateTime());
            $categoria->setUpdateAt(new \DateTime());
            $categoria->setUsuario("ADMIN");

            $em = $this->getDoctrine()->getManager();

            $em->persist($categoria);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info',
                'Se ha creado la categoria.'
            );

            return $this->redirect($this->generateUrl('categoria_list'));
        }

        return $this->render('AppBundle:Categoria:create.html.twig', array(
            'accion' => 'crear',
            'formulario' => $formulario->createView()
        ));
    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $categoria = $em->getRepository('AppBundle:Categorias')->find($id);

        if (!$categoria) {
        throw $this->createNotFoundException('No se ha encontrado la categoria solicitada');
        }

        $formulario = $this->createForm(new CategoriaType(), $categoria);
        $formulario->handleRequest($request);

        if ($formulario->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoria);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info',
                'Los datos de la categoria se han actualizado.'
            );

            return $this->redirect(
                $this->generateUrl('categoria_list')
            );
        }

        return $this->render('AppBundle:Categoria:edit.html.twig', array(
            'formulario' => $formulario->createView(),
            'categoria' => $categoria
        ));
    }

    public function deleteAction($id)
    {
        if (empty($id))
            return $this->redirect( $this->generateUrl('categoria_list') );

        $em = $this->getDoctrine()->getManager();

        $categoria = $em->getRepository('AppBundle:Categorias')->find($id);

        if (!$categoria) {
            throw $this->createNotFoundException('No se ha encontrado la categoria solicitada');
        }

        //$em->remove($categoria);
        //$em->flush();

        $this->get('session')->getFlashBag()->add('info',
            'Se ha eliminado la categoria.'
        );

        return $this->redirect($this->generateUrl('categoria_list'));
    }
}

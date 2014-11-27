<?php

namespace GS\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GS\AppBundle\Entity\UnidadNegocio;
use GS\AppBundle\Form\UnidadNegocio\UnidadNegocioType;

/**
 * UnidadNegocio controller.
 *
 */
class UnidadNegocioController extends Controller
{

    /**
     * Lists all UnidadNegocio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:UnidadNegocio')->findAll();

        return $this->render('AppBundle:UnidadNegocio:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new UnidadNegocio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new UnidadNegocio();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('unidadnegocio_show', array('id' => $entity->getIdUnidadNegocio())));
        }

        return $this->render('AppBundle:UnidadNegocio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a UnidadNegocio entity.
     *
     * @param UnidadNegocio $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(UnidadNegocio $entity)
    {
        $form = $this->createForm(new UnidadNegocioType(), $entity, array(
            'action' => $this->generateUrl('unidadnegocio_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new UnidadNegocio entity.
     *
     */
    public function newAction()
    {
        $entity = new UnidadNegocio();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:UnidadNegocio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UnidadNegocio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UnidadNegocio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadNegocio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:UnidadNegocio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing UnidadNegocio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UnidadNegocio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadNegocio entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:UnidadNegocio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a UnidadNegocio entity.
    *
    * @param UnidadNegocio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(UnidadNegocio $entity)
    {
        $form = $this->createForm(new UnidadNegocioType(), $entity, array(
            'action' => $this->generateUrl('unidadnegocio_update', array('id' => $entity->getIdUnidadNegocio())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing UnidadNegocio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UnidadNegocio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadNegocio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
           return $this->redirect($this->generateUrl('unidadnegocio_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:UnidadNegocio:index.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a UnidadNegocio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:UnidadNegocio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UnidadNegocio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('unidadnegocio'));
    }

    /**
     * Creates a form to delete a UnidadNegocio entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unidadnegocio_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

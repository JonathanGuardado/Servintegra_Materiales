<?php

namespace GS\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GS\AppBundle\Entity\UnidadMedida;
use GS\AppBundle\Form\UnidadMedidaType;

/**
 * UnidadMedida controller.
 *
 */
class UnidadMedidaController extends Controller
{

    /**
     * Lists all UnidadMedida entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:UnidadMedida')->findAll();

        return $this->render('AppBundle:UnidadMedida:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new UnidadMedida entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new UnidadMedida();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('unidadmedida_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:UnidadMedida:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a UnidadMedida entity.
     *
     * @param UnidadMedida $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(UnidadMedida $entity)
    {
        $form = $this->createForm(new UnidadMedidaType(), $entity, array(
            'action' => $this->generateUrl('unidadmedida_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new UnidadMedida entity.
     *
     */
    public function newAction()
    {
        $entity = new UnidadMedida();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:UnidadMedida:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UnidadMedida entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UnidadMedida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadMedida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:UnidadMedida:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing UnidadMedida entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UnidadMedida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadMedida entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:UnidadMedida:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a UnidadMedida entity.
    *
    * @param UnidadMedida $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(UnidadMedida $entity)
    {
        $form = $this->createForm(new UnidadMedidaType(), $entity, array(
            'action' => $this->generateUrl('unidadmedida_update', array('id' => $entity->getIdUnidad())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar','attr' => array('class' => 'btn btn-primary T5')));

        return $form;
    }
    /**
     * Edits an existing UnidadMedida entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:UnidadMedida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadMedida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('unidadmedida_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:UnidadMedida:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a UnidadMedida entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:UnidadMedida')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UnidadMedida entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('unidadmedida'));
    }

    /**
     * Creates a form to delete a UnidadMedida entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unidadmedida_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

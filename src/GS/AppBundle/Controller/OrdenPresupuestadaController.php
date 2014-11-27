<?php

namespace GS\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GS\AppBundle\Entity\OrdenPresupuestada;
use GS\AppBundle\Form\OrdenPresupuestada\OrdenPresupuestadaType;

/**
 * OrdenPresupuestada controller.
 *
 */
class OrdenPresupuestadaController extends Controller
{

    /**
     * Lists all OrdenPresupuestada entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:OrdenPresupuestada')->findAll();

        return $this->render('AppBundle:OrdenPresupuestada:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new OrdenPresupuestada entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new OrdenPresupuestada();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ordenpresupuestada_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:OrdenPresupuestada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a OrdenPresupuestada entity.
     *
     * @param OrdenPresupuestada $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(OrdenPresupuestada $entity)
    {
        $form = $this->createForm(new OrdenPresupuestadaType(), $entity, array(
            'action' => $this->generateUrl('ordenpresupuestada_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new OrdenPresupuestada entity.
     *
     */
    public function newAction()
    {
        $entity = new OrdenPresupuestada();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:OrdenPresupuestada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a OrdenPresupuestada entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:OrdenPresupuestada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrdenPresupuestada entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:OrdenPresupuestada:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing OrdenPresupuestada entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:OrdenPresupuestada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrdenPresupuestada entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:OrdenPresupuestada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a OrdenPresupuestada entity.
    *
    * @param OrdenPresupuestada $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(OrdenPresupuestada $entity)
    {
        $form = $this->createForm(new OrdenPresupuestadaType(), $entity, array(
            'action' => $this->generateUrl('ordenpresupuestada_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing OrdenPresupuestada entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:OrdenPresupuestada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrdenPresupuestada entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ordenpresupuestada_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:OrdenPresupuestada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a OrdenPresupuestada entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:OrdenPresupuestada')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find OrdenPresupuestada entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ordenpresupuestada'));
    }

    /**
     * Creates a form to delete a OrdenPresupuestada entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ordenpresupuestada_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

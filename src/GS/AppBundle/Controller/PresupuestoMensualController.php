<?php

namespace GS\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GS\AppBundle\Entity\Proyecto;
use GS\AppBundle\Entity\PresupuestoMensual;
use GS\AppBundle\Form\PresupuestoMensual\PresupuestoMensualType;

/**
 * PresupuestoMensual controller.
 *
 */
class PresupuestoMensualController extends Controller
{

    /**
     * Lists all PresupuestoMensual entities.
     *
     */
    public function indexAction($idProyecto)
    {   $meses = array('1' => 'Enero','2' => 'Febrero','3' => 'Marzo','4' => 'Abril','5' => 'Mayo','6' => 'Junio','7' => 'Julio','8' => 'Agosto','9' => 'Septiembre','10' => 'Octubre','11' => 'Noviembre','12' => 'Diciembre');
        $em = $this->getDoctrine()->getManager();           
        $presupuestos = $em->getRepository('AppBundle:PresupuestoMensual')->findByProyecto($idProyecto);       
        $proyecto= $this->getProyecto($idProyecto);        
        $saldoUsado=$this->getSaldoUsado($presupuestos);
        $saldoDisponible=$proyecto->getPresupuesto()-$saldoUsado;
        $detalleProyecto=array('saldoUsado'=>$saldoUsado,'saldoDisponible'=>$saldoDisponible);
        return $this->render('AppBundle:PresupuestoMensual:index.html.twig', array(
            'idProyecto'=>$idProyecto,
            'meses'=>$meses,
            'proyecto'=>$proyecto,
            'detalleProyecto'=>$detalleProyecto,
            'entities' => $presupuestos
        ));
    }
    /**
     * Creates a new PresupuestoMensual entity.
     *
     */
    public function createAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();     
        $entity = new PresupuestoMensual();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $proyecto= $form->getData()->getProyecto();
        $presupuestos = $em->getRepository('AppBundle:PresupuestoMensual')->findByProyecto($proyecto);       
        $saldoUsado=$this->getSaldoUsado($presupuestos);
        $saldoDisponible=$proyecto->getPresupuesto()-$saldoUsado;
        $presupuestoMensual=$form->getData()->getPresupuesto();
          
        if($presupuestoMensual<=$saldoDisponible){
        if ($form->isValid()) {                   
            $entity->setFechaCreacion(new \DateTime());          
            $entity->setUsuarioCreacion("ADMIN");
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('presupuestomensual', array('idProyecto' => $entity->getProyecto()->getIdProyecto())));
        }    
        }else{
        $this->get('session')->getFlashBag()->add('Error', 'No puede Exceder su Monto disponible');   
        }
         $detalleProyecto=array('saldoUsado'=>$saldoUsado,'saldoDisponible'=>$saldoDisponible);
        return $this->render('AppBundle:PresupuestoMensual:new.html.twig', array(
            'entity' => $entity,
            'proyecto'=>$proyecto,
            'detalleProyecto'=>$detalleProyecto,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PresupuestoMensual entity.
     *
     * @param PresupuestoMensual $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PresupuestoMensual $entity)
    {
        $form = $this->createForm(new PresupuestoMensualType(), $entity, array(
            'action' => $this->generateUrl('presupuestomensual_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Añadir'));

        return $form;
    }

    /**
     * Displays a form to create a new PresupuestoMensual entity.
     *
     */
    public function newAction($idProyecto)
    {
        $entity = new PresupuestoMensual();
        $form   = $this->createCreateForm($entity);
        $proyecto= $this->getProyecto($idProyecto);
        $em = $this->getDoctrine()->getManager();           
        $presupuestos = $em->getRepository('AppBundle:PresupuestoMensual')->findByProyecto($idProyecto);                    
        $saldoUsado=$this->getSaldoUsado($presupuestos);
        $saldoDisponible=$proyecto->getPresupuesto()-$saldoUsado;
        $detalleProyecto=array('saldoUsado'=>$saldoUsado,'saldoDisponible'=>$saldoDisponible);
        return $this->render('AppBundle:PresupuestoMensual:new.html.twig', array(
            'entity' => $entity,
            'proyecto' => $proyecto,
            'idProyecto'=>$idProyecto,            
            'detalleProyecto'=>$detalleProyecto,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PresupuestoMensual entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:PresupuestoMensual')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PresupuestoMensual entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:PresupuestoMensual:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PresupuestoMensual entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:PresupuestoMensual')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PresupuestoMensual entity.');
        }
        $Proyecto= $entity->getProyecto();
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:PresupuestoMensual:edit.html.twig', array(
            'entity'      => $entity,
            'idProyecto'=> $Proyecto->getIdProyecto(),
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PresupuestoMensual entity.
    *
    * @param PresupuestoMensual $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PresupuestoMensual $entity)
    {
        $form = $this->createForm(new PresupuestoMensualType(), $entity, array(
            'action' => $this->generateUrl('presupuestomensual_update', array('id' => $entity->getIdPresupuestoMensual())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PresupuestoMensual entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:PresupuestoMensual')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PresupuestoMensual entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('presupuestomensual_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:PresupuestoMensual:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PresupuestoMensual entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:PresupuestoMensual')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PresupuestoMensual entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('presupuestomensual'));
    }

    /**
     * Creates a form to delete a PresupuestoMensual entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('presupuestomensual_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    private function getProyecto($idProyecto){
        $em = $this->getDoctrine()->getManager();
        $Proyecto=$em->getRepository("AppBundle:Proyecto")->find($idProyecto);
        return $Proyecto;
    }
    private function getSaldoUsado($presupuestosMensuales){       
       $saldoUsado=0.0;
       foreach($presupuestosMensuales as $presupuesto){
            $saldoUsado+=$presupuesto->getPresupuesto();
       }
       return $saldoUsado;
    }
}

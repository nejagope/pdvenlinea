<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\DetalleFactura;
use Multinet\PdvEnlinea\PdvEnlineaBundle\Form\DetalleFacturaType;

/**
 * DetalleFactura controller.
 *
 * @Route("/detallefactura")
 */
class DetalleFacturaController extends Controller
{

    /**
     * Lists all DetalleFactura entities.
     *
     * @Route("/{idFactura}", name="detallefactura")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($idFactura)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PdvBundle:DetalleFactura')->findBy(array(
            'idfactura' => $idFactura
        ));

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new DetalleFactura entity.
     *
     * @Route("/{idFactura}", name="detallefactura_create")
     * @Method("POST")
     * @Template("PdvBundle:DetalleFactura:new.html.twig")
     */
    public function createAction(Request $request,$idFactura)
    {
        $entity = new DetalleFactura();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('factura_show', array('id' => $idFactura)));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a DetalleFactura entity.
     *
     * @param DetalleFactura $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DetalleFactura $entity)
    {
        $form = $this->createForm(new DetalleFacturaType(), $entity, array(
            'action' => $this->generateUrl('detallefactura_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DetalleFactura entity.
     *
     * @Route("/new/{idFactura}", name="detallefactura_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction($idFactura)
    {
        $entity = new DetalleFactura();
        $entity->setCreatedAt(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $factura = $em->getRepository('PdvBundle:Factura')->find($idFactura);
        $entity->setIdFactura($factura);
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'idFactura' => $idFactura
        );
    }

    /**
     * Finds and displays a DetalleFactura entity.
     *
     * @Route("/{id}", name="detallefactura_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PdvBundle:DetalleFactura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DetalleFactura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing DetalleFactura entity.
     *
     * @Route("/{id}/edit", name="detallefactura_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PdvBundle:DetalleFactura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DetalleFactura entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a DetalleFactura entity.
    *
    * @param DetalleFactura $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DetalleFactura $entity)
    {
        $form = $this->createForm(new DetalleFacturaType(), $entity, array(
            'action' => $this->generateUrl('detallefactura_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing DetalleFactura entity.
     *
     * @Route("/{id}", name="detallefactura_update")
     * @Method("PUT")
     * @Template("PdvBundle:DetalleFactura:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PdvBundle:DetalleFactura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DetalleFactura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('detallefactura_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a DetalleFactura entity.
     *
     * @Route("/{id}", name="detallefactura_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
     
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PdvBundle:DetalleFactura')->find($id);
            $factura = $entity->getIdfactura();
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DetalleFactura entity.');
            }

            $em->remove($entity);
            $em->flush();
       

        return $this->redirect($this->generateUrl('factura_show',array(
            'id' => $factura
        )));
    }

    /**
     * Creates a form to delete a DetalleFactura entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('detallefactura_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

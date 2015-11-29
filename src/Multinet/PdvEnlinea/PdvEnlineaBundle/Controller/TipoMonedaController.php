<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\TipoMoneda;
use Multinet\PdvEnlinea\PdvEnlineaBundle\Form\TipoMonedaType;

/**
 * TipoMoneda controller.
 *
 * @Route("/tipomoneda")
 */
class TipoMonedaController extends Controller
{

    /**
     * Lists all TipoMoneda entities.
     *
     * @Route("/", name="tipomoneda")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PdvBundle:TipoMoneda')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new TipoMoneda entity.
     *
     * @Route("/", name="tipomoneda_create")
     * @Method("POST")
     * @Template("PdvBundle:TipoMoneda:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new TipoMoneda();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipomoneda_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a TipoMoneda entity.
     *
     * @param TipoMoneda $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoMoneda $entity)
    {
        $form = $this->createForm(new TipoMonedaType(), $entity, array(
            'action' => $this->generateUrl('tipomoneda_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoMoneda entity.
     *
     * @Route("/new", name="tipomoneda_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TipoMoneda();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a TipoMoneda entity.
     *
     * @Route("/{id}", name="tipomoneda_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PdvBundle:TipoMoneda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoMoneda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TipoMoneda entity.
     *
     * @Route("/{id}/edit", name="tipomoneda_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PdvBundle:TipoMoneda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoMoneda entity.');
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
    * Creates a form to edit a TipoMoneda entity.
    *
    * @param TipoMoneda $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoMoneda $entity)
    {
        $form = $this->createForm(new TipoMonedaType(), $entity, array(
            'action' => $this->generateUrl('tipomoneda_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoMoneda entity.
     *
     * @Route("/{id}", name="tipomoneda_update")
     * @Method("PUT")
     * @Template("PdvBundle:TipoMoneda:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PdvBundle:TipoMoneda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoMoneda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipomoneda_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a TipoMoneda entity.
     *
     * @Route("/{id}", name="tipomoneda_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PdvBundle:TipoMoneda')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoMoneda entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipomoneda'));
    }

    /**
     * Creates a form to delete a TipoMoneda entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipomoneda_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

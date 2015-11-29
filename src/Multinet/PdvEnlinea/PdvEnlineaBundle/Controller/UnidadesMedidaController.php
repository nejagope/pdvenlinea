<?php

namespace Multinet\PdvEnlinea\PdvEnlineaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Multinet\PdvEnlinea\PdvEnlineaBundle\Entity\UnidadesMedida;
use Multinet\PdvEnlinea\PdvEnlineaBundle\Form\UnidadesMedidaType;

/**
 * UnidadesMedida controller.
 *
 * @Route("/unidadesmedida")
 */
class UnidadesMedidaController extends Controller
{

    /**
     * Lists all UnidadesMedida entities.
     *
     * @Route("/", name="unidadesmedida")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PdvBundle:UnidadesMedida')->findBy(array(
            'status' => 1
        ));

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new UnidadesMedida entity.
     *
     * @Route("/", name="unidadesmedida_create")
     * @Method("POST")
     * @Template("PdvBundle:UnidadesMedida:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new UnidadesMedida();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('unidadesmedida_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a UnidadesMedida entity.
     *
     * @param UnidadesMedida $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(UnidadesMedida $entity)
    {
        $form = $this->createForm(new UnidadesMedidaType(), $entity, array(
            'action' => $this->generateUrl('unidadesmedida_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new UnidadesMedida entity.
     *
     * @Route("/new", name="unidadesmedida_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new UnidadesMedida();
        $entity->setCreatedAt(new \DateTime());
        $entity->setUpdatedAt(new \DateTime());
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a UnidadesMedida entity.
     *
     * @Route("/{id}", name="unidadesmedida_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PdvBundle:UnidadesMedida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadesMedida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing UnidadesMedida entity.
     *
     * @Route("/{id}/edit", name="unidadesmedida_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PdvBundle:UnidadesMedida')->find($id);
        $entity->setUpdatedAt(new \DateTime());
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadesMedida entity.');
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
    * Creates a form to edit a UnidadesMedida entity.
    *
    * @param UnidadesMedida $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(UnidadesMedida $entity)
    {
        $form = $this->createForm(new UnidadesMedidaType(), $entity, array(
            'action' => $this->generateUrl('unidadesmedida_update', array('id' => $entity->getId())),
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing UnidadesMedida entity.
     *
     * @Route("/{id}", name="unidadesmedida_update")
     * @Method("POST")
     * @Template("PdvBundle:UnidadesMedida:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PdvBundle:UnidadesMedida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadesMedida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist();
            $em->flush();

            return $this->redirect($this->generateUrl('unidadesmedida_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a UnidadesMedida entity.
     *
     * @Route("/{id}", name="unidadesmedida_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PdvBundle:UnidadesMedida')->find($id);
            $entity->setStatus(0);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UnidadesMedida entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('unidadesmedida'));
    }

    /**
     * Creates a form to delete a UnidadesMedida entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unidadesmedida_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar Registro','attr' => array('class' => 'btn btn-danger btn-sm', 'onclick' => 'submitForm(this)', 'data-loading-text' => 'Eliminando Registro...')))
            ->getForm()
        ;
    }
}

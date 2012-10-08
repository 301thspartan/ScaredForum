<?php

namespace Forum\ScaredForumBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Forum\ScaredForumBundle\Entity\Thread;
use Forum\ScaredForumBundle\Form\ThreadType;

/**
 * Thread controller.
 *
 */
class ThreadController extends Controller
{
    /**
     * Lists all Thread entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScaredForumBundle:Thread')->findAll();

        return $this->render('ScaredForumBundle:Thread:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Thread entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Thread();
        $form = $this->createForm(new ThreadType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('thread_show', array('id' => $entity->getId())));
        }

        return $this->render('ScaredForumBundle:Thread:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Thread entity.
     *
     */
    public function newAction()
    {
        $entity = new Thread();
        $form   = $this->createForm(new ThreadType(), $entity);

        return $this->render('ScaredForumBundle:Thread:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Thread entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScaredForumBundle:Thread')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Thread entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScaredForumBundle:Thread:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Thread entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScaredForumBundle:Thread')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Thread entity.');
        }

        $editForm = $this->createForm(new ThreadType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScaredForumBundle:Thread:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Thread entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScaredForumBundle:Thread')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Thread entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ThreadType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('thread_edit', array('id' => $id)));
        }

        return $this->render('ScaredForumBundle:Thread:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Thread entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScaredForumBundle:Thread')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Thread entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('thread'));
    }

    /**
     * Creates a form to delete a Thread entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

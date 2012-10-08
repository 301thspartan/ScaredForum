<?php

namespace Forum\ScaredForumBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Forum\ScaredForumBundle\Entity\Forum;
use Forum\ScaredForumBundle\Form\ForumType;

/**
 * Forum controller.
 *
 */
class ForumController extends Controller
{
    /**
     * Lists all Forum entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScaredForumBundle:Forum')->findAll();

        return $this->render('ScaredForumBundle:Forum:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Forum entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Forum();
        $form = $this->createForm(new ForumType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('forum_show', array('id' => $entity->getId())));
        }

        return $this->render('ScaredForumBundle:Forum:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Forum entity.
     *
     */
    public function newAction()
    {
        $entity = new Forum();
        $form   = $this->createForm(new ForumType(), $entity);

        return $this->render('ScaredForumBundle:Forum:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Forum entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScaredForumBundle:Forum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Forum entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScaredForumBundle:Forum:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Forum entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScaredForumBundle:Forum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Forum entity.');
        }

        $editForm = $this->createForm(new ForumType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScaredForumBundle:Forum:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Forum entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScaredForumBundle:Forum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Forum entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ForumType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('forum_edit', array('id' => $id)));
        }

        return $this->render('ScaredForumBundle:Forum:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Forum entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScaredForumBundle:Forum')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Forum entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('forum'));
    }

    /**
     * Creates a form to delete a Forum entity by id.
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

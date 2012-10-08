<?php

namespace Forum\ScaredForumBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Forum\ScaredForumBundle\Entity\ForumGroups;
use Forum\ScaredForumBundle\Entity\Forum;
use Forum\ScaredForumBundle\Form\ForumGroupsType;
use Forum\ScaredForumBundle\Form\ForumType;

/**
 * ForumGroups controller.
 *
 */
class ForumGroupsController extends Controller
{
    /**
     * Lists all ForumGroups entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ScaredForumBundle:ForumGroups')->findAll();
        $form = $this->createForm(new ForumGroupsType(), new ForumGroups());

        return $this->render('ScaredForumBundle:ForumGroups:index.html.twig', array(
            'entities' => $entities, 'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ForumGroups entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScaredForumBundle:ForumGroups')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ForumGroups entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $forumForm = $this->createForm(new ForumType(), new Forum());

        return $this->render('ScaredForumBundle:ForumGroups:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'new_forum_form' => $forumForm->createView(),
        ));
    }

    /**
     * Displays a form to create a new ForumGroups entity.
     *
     */
    public function newAction()
    {
        $entity = new ForumGroups();
        $form   = $this->createForm(new ForumGroupsType(), $entity);

        return $this->render('ScaredForumBundle:ForumGroups:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new ForumGroups entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new ForumGroups();
        $form = $this->createForm(new ForumGroupsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('forumgroups_show', array('id' => $entity->getId())));
        }

        return $this->render('ScaredForumBundle:ForumGroups:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ForumGroups entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScaredForumBundle:ForumGroups')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ForumGroups entity.');
        }

        $editForm = $this->createForm(new ForumGroupsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ScaredForumBundle:ForumGroups:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ForumGroups entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ScaredForumBundle:ForumGroups')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ForumGroups entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ForumGroupsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('forumgroups_edit', array('id' => $id)));
        }

        return $this->render('ScaredForumBundle:ForumGroups:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ForumGroups entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ScaredForumBundle:ForumGroups')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ForumGroups entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('forumgroups'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

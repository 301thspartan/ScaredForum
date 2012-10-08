<?php

namespace Forum\ScaredForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('text')
            ->add('created_at')
            ->add('updated_at')
            ->add('forum')
            ->add('thread')
            ->add('author')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Forum\ScaredForumBundle\Entity\Post'
        ));
    }

    public function getName()
    {
        return 'forum_scaredforumbundle_posttype';
    }
}

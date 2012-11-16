<?php

namespace Forum\ScaredForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('text', 'textarea', array(
            'attr' => array(
                'class' => 'tinymce',
                'data-theme' => 'medium' // simple, advanced, bbcode
            )
        ));
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

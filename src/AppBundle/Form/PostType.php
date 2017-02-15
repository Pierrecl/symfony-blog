<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Form\TagType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
                ->add('slug')
                ->add('author')
                ->add('publishedAt', DateType::class, array(
                            'widget' => 'single_text',
                        ))
                ->add('tags', TagType::class, [
                            'label' => 'tags',
                            'required' => false,
                        ])
                ->add('category',EntityType::class, array(
                      'class' => 'AppBundle:Category',
                      'attr' => ['style' => 'display: block;'],
                      'choice_label' => function ($category) {
                                        return $category->getName();
                                    },
                      'choice_value' => 'id'))
                      ->add('content', TextareaType::class, array(
                              'attr' => array(
                                  'class' => 'tinymce',
                                  'data-theme' => 'bbcode'
                              )
                          ));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Post',
            'attr' => array(
            'class' => 'col s10'),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_post';
    }


}

<?php

namespace ConsultationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DocteurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
<<<<<<< HEAD
        $builder->add('nom')->add('prenom')->add('specialite');
=======
        $builder->add('nom')->add('prenom')->add('specialite')->add('horaire_travail');
>>>>>>> 6e1192163f026ab45b6db1166eddfa5554ea6e1c
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ConsultationBundle\Entity\Docteur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'consultationbundle_docteur';
    }


}

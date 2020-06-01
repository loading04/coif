<?php

namespace App\Form;

use App\Entity\Coif;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NomPro')
            ->add('PrenomPro')
            ->add('NomSalon')
            ->add('NombreChaise')
            ->add('Ville')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('Adresse')
            ->add('Description')
            ->add('PhotoCoif')
            ->add('Publish')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Coif::class,
        ]);
    }
}

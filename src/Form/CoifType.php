<?php

namespace App\Form;

use App\Entity\Coif;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CoifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NomPro',TextType::class , [
                'attr'=> [
                    'placeholder' =>'Nom de propriétaire ',
                    'class' =>'form-input'

                ]
            ])
            ->add('PrenomPro',TextType::class, [
                'attr'=> [
                    'placeholder' =>'Prenom de propriétaire ',
                    'class' =>'form-input'
                ]
            ])

            ->add('NomSalon',TextType::class, [
                'attr'=> [
                    'placeholder' =>'Nom du salon ',
                    'class' =>'form-input'
                ]
            ])
            ->add('NombreChaise',NumberType::class, [
                'attr'=> [
                    'placeholder' =>'Nombre de chaise',
                    'class' =>'form-input'
                ]
            ])
            ->add('Ville',TextType::class, [
                'attr'=> [
                    'placeholder' =>'Ville ',
                    'class' =>'form-input'
                ]
            ])
            ->add('Adresse',TextType::class, [
                'attr'=> [
                    'placeholder' =>'Adresse ',
                    'class' =>'form-input'
                ]
            ])
            ->add('Description',TextareaType::class , [
                'attr'=> [
                    'placeholder' =>'Description ',
                    'class' =>'form-input'
                ]
            ])
            ->add('spec',ChoiceType::class
                , array(
                'choices'=>array(
                    'Homme'=>'homme',
                    'Femme'=>'femme',
                    'Mixte'=>'mixte',

                ),
                    'attr'=>[
                        'class' =>'form-select'
                    ]


                ))

            ->add('PhotoFile',FileType::class)




        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Coif::class,
        ]);
    }
}

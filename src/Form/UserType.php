<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class , [
                'attr'=> [
                    'placeholder' =>'Nom de propriétaire ',
                    'class' =>'form-input'

                ]
            ])
            ->add('nom',TextType::class , [
                'attr'=> [
                    'placeholder' =>'Nom de propriétaire ',
                    'class' =>'form-input'

                ]
            ])
            ->add('prenom',TextType::class , [
                'attr'=> [
                    'placeholder' =>'Nom de propriétaire ',
                    'class' =>'form-input'

                ]
            ])
            ->add('numero',TextType::class , [
                'attr'=> [
                    'placeholder' =>'Nom de propriétaire ',
                    'class' =>'form-input'

                ]
            ])
            ->add('ville',TextType::class , [
                'attr'=> [
                    'placeholder' =>'Nom de propriétaire ',
                    'class' =>'form-input'

                ]
            ])
            ->add('sexe',ChoiceType::class
                , array(
                    'choices'=>array(
                        'Homme'=>'homme',
                        'Femme'=>'femme',


                    ),
                    'attr'=>[
                        'class' =>'form-select'
                    ]


                ))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,

                'first_options'  => array('label' => 'Password', 'attr'=>[
                    'class' =>'form-select'
                ]
                ),
                'second_options' => array('label' => 'Repeat Password',    'attr'=>[
                    'class' =>'form-select'
                ]
                ),


            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

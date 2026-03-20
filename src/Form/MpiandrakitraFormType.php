<?php

namespace App\Form;

use App\Entity\Mpiandrakitra;
use App\Entity\Sampana;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

class MpiandrakitraFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('codeMp')
            ->add('nomMp', null,[
                'label'=>'Nom complet mpiandrakitra',
                'attr' => [
                    'placeholder' => 'Entrez le nom mpiandriankitra'
                ]
            ])
            ->add('adresseMp', null, [
                'label'=>'Adresse exacte',
                'attr' => [
                    'placeholder' => 'Adresse exacte'
                ]
            ])
            ->add('contactMp', null,  [
                'label' => 'Numéro Téléphone',
                'attr' => [
                    'placeholder' => 'Numéro téléphone'
                ], 

            ])
            ->add('emailMp', null, [
                'required' => false,
                'label' => 'Adresse email',
                'attr' => [
                    'placeholder' => 'Adresse email valide'
                ],
                'contraints' => [
                    new Length(
                        max: 180,
                        maxMessage: 'Your email shoud not exceed {{limit}} characters'
                    )
                ]
            ])
            ->add('cinMp', null, [
                'required' => false,
                'label' => 'C.I.N',
                'attr' => [
                    'placeholder' => 'Carte d\'Identité Nationale',
                ],
                'constraints' => [
                    new NotBlank(
                        message: 'Please enter a number for CIN',
                    ),
                    new Regex(  
                        pattern: '/^(?:\s*\d){12}\s*$/',
                        message: 'Le CIN doit contenir exactement 12 chiffres',
                    ),
                    new Length(
                        max: 15,
                        maxMessage: 'Your CIN should not exceed {{ limit }} characters',
                    ),
                ],
            ])
            ->add('dateDelivraceCINMp' , null, [
                'required' => false,
                'label' => 'Date de délivrance',
                'attr' => [
                    'placeholder' => 'Date de délivrance',
                ],
            ])
            ->add('lieuCinMp', null, [
                'required' => false,
                'label' => 'Lieu de délivrance',
                'attr' => [
                    'placeholder' => 'Lieu de délivrance',
                ],
            ])
            ->add('ageMp', null, [
                'label' => 'Age de mpiandraikitra'
            ])
            ->add('dateNaissMp', null, [
                'required' => true,
                'label' => 'Date de naissance',
                'attr' => [
                    'placeholder' => 'Date de naissance',
                ]
                ])
            ->add('lieuNaissMp', null, [
                'required' => true,
                'label' => 'Lieu de naissance',
                'attr' => [
                    'placeholder' => 'Lieu de naissance',
                ],
            ])
            ->add('mpiandrakitraPictureFile', VichImageType::class, [
                'required' => false,
                'label' => 'Photo de profil',
                'allow_delete' => false,
                'download_uri' => false,
                'image_uri' => false,
                'attr' => [
                    'placeholder' => 'Photo de profil',
                ]
            ])
            ->add('sampana', EntityType::class, [
                'class' => Sampana::class,
                'choice_label' => 'nomSampana',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mpiandrakitra::class,
        ]);
    }
}

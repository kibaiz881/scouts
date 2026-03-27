<?php

namespace App\Form;

use App\Entity\Mpiandrakitra;
use App\Entity\Sampana;
use Doctrine\Common\Collections\Placeholder;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class MpiandrakitraFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('codeMp')
            ->add('nomMp', null, [
                'required' => true,
                'label' => 'Nom complète',
                'attr' => [
                    'placeholder' => 'Entrez le nom complète'
                ]
            ])
            ->add('adresseMp', null, [
                'required' => true,
                'label' => 'Adresse',
                'attr' => [
                    'placeholder' => 'Adresse',
                ],
            ])
            ->add('contactMp', null, [
                'required' => true,
                'label' => 'Numéro de téléphone',
                'attr' => [
                    'placeholder' => 'Numéro de téléphone',
                ],
                'constraints' => [
                    new NotBlank(
                        message: 'Please enter a phone number',
                    ),
                    new Length(
                        min: 10,
                        minMessage: 'Your phone number should be at least {{ limit }} characters',
                        max: 15,
                        maxMessage: 'Your phone number should not exceed {{ limit }} characters',
                    ),
                ],
            ])
            ->add('emailMp', null, [
                'required' => true,
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Email',
                ],
                'constraints' => [
                    new NotBlank(
                        message: 'Please enter an email address',
                    ),
                    new Length(
                        max: 180,
                        maxMessage: 'Your email should not exceed {{ limit }} characters',
                    ),
                ],
            ])
            ->add('cinMp', null, [
                'required' => false,
                'label' => 'CIN',
                'attr' => [
                    'placeholder' => 'CIN',
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
            ->add('dateDelivraceCINMp', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
            ])
            ->add('lieuCinMp', null, [
                'required' => false,
                'label' => 'Lieu de délivrance',
                'attr' => [
                    'placeholder' => 'Lieu de délivrance',
                ],
            ])
            ->add('nationalite', null, [
                'required' => true,
                'label' => 'Nationalité',
                'attr' => [
                    'placeholder' => 'Nationalité',
                ],
            ])
            ->add('professionMp', null, [
                'required' => false,
                'label' => 'Profession',
                'attr' => [
                    'placeholder' => 'Profession',
                ],
            ])
            ->add('sexe', ChoiceType::class, [
                'choices' => [
                    'Masculin' => 'M',
                    'Féminin' => 'F',
                    'Autre' => 'O',
                ],
            ])
            ->add('dateNaissMp', DateType::class, [
                'widget' => 'single_text',
                'required' => true
            ])
            ->add('lieuNaissMp', null, [
                'required' => true,
                'label' => 'Lieu de naissance',
                'attr' => [
                    'placeholder' => 'Lieu de naissance',
                ],
            ])
            ->add('paysDelivranceMp', null, [
                'required' => false,
                'label' => 'Pays de délivrance',
                'attr' => [
                    'placeholder' => 'Pays de délivrance',
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
            ->add('dateEntrescout', null, [
                'required' => false,
                'label' => 'Date d\'entrée au scout',
                'attr' => [
                    'placeholder' => 'Date d\'entrée au scout',
                ],
            ])
            ->add('veliranoDateMp', DateType::class, [
                'label' => 'Date velirano',
                'required' => false,
            ])
            ->add('lieuVeliranoMp', null, [
                'label' => 'lieu velirano Mp',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrez le lieu du velirano'
                ]
            ])
            ->add('TompokompanompoanaMp',  null, [
                'label' => 'Lieu et date tokompanompoana',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Lieu et date tokompanompoana'
                ]
            ])
            ->add('religionMp', null, [
                'label' => 'Religion',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Entrez votre réligion'
                ]
            ])
            ->add('lieudetravail', null, [
                'label' => 'Lieu du travail',
                'required' => false,
                'attr' => [
                    'Placeholder' => 'Lieu du travail'
                ]
            ])
            ->add('fonctionscoutMp', null, [
                'label' => 'Fonction dans le scout',
                'required' => false,
                'attr' => [
                    'Placeholder' => 'Fonction dans la scout'
                ]
            ])
            ->add('nombreEnfantMp', null, [
                'label' => 'Nombre d\'enfant prise en charge',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Nombre d\'enfant prise en charge'
                ]
            ])
            ->add('situationMatriMp', ChoiceType::class, [
                'label' => 'Situation Matrimonnialle',
                'choices' => [
                    'Célibataire' => 'Célibataire',
                    'Marié' => 'Marié',
                    'Réligieuse' => 'Réligieuse',
                    'Veuve' => 'Veuve',
                    'Autre' => 'Autre',
                ],
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

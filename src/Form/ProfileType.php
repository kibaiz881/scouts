<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', null, [
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
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'ROLE_ADMIN',
                    'User' => 'ROLE_USER',
                ],
                'expanded' => true,
                'multiple' => true,
                'label' => 'Rôles',
            ])
            ->add('username', null, [
                'required' => true,
                'label' => 'Nom d\'utilisateur',
                'attr' => [
                    'placeholder' => 'Nom d\'utilisateur',
                ],
                'constraints' => [
                    new NotBlank(
                        message: 'Please enter a username',
                    ),
                    new Length(
                        min: 3,
                        minMessage: 'Your username should be at least {{ limit }} characters',
                        max: 180,
                        maxMessage: 'Your username should not exceed {{ limit }} characters',
                    ),
                ],
            ])
            ->add('profilePictureFile', VichImageType::class, [
                'required' => false,
                'label' => 'Photo de profil',
            ])
            ->add('adresse', null, [
                'required' => true,
                'label' => 'Adresse',
                'attr' => [
                    'placeholder' => 'Adresse',
                ],
            ])
            ->add('phone', null, [
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
            ->add('biography', null, [
                'required' => false,
                'label' => 'Biographie',
                'attr' => [
                    'placeholder' => 'Biographie',
                ],
            ])
            ->add('dateNaissance', null, [
                'required' => true,
                'label' => 'Date de naissance',
                'attr' => [
                    'placeholder' => 'Date de naissance',
                ],
            ])
            ->add('lieuNaissance', null, [
                'required' => true,
                'label' => 'Lieu de naissance',
                'attr' => [
                    'placeholder' => 'Lieu de naissance',
                ],
            ])
            ->add('nationalite', null, [
                'required' => true,
                'label' => 'Nationalité',
                'attr' => [
                    'placeholder' => 'Nationalité',
                ],
            ])
            ->add('profession', null, [
                'required' => false,
                'label' => 'Profession',
                'attr' => [
                    'placeholder' => 'Profession',
                ],
            ])
            ->add('cin', null, [
                'required' => false,
                'label' => 'CIN',
                'attr' => [
                    'placeholder' => 'CIN',
                ],
                'constraints' => [
                    new NotBlank(
                        message: 'Please enter a CIN',
                    ),
                    new Length(
                        min: 12,
                        minMessage: 'Your CIN should be at least {{ limit }} characters',
                        max: 18,
                        maxMessage: 'Your CIN should not exceed {{ limit }} characters',
                    ),
                ],
            ])
            ->add('dateDelivrance', null, [
                'required' => false,
                'label' => 'Date de délivrance',
                'attr' => [
                    'placeholder' => 'Date de délivrance',
                ],
            ])
            ->add('lieuDelivrance', null, [
                'required' => false,
                'label' => 'Lieu de délivrance',
                'attr' => [
                    'placeholder' => 'Lieu de délivrance',
                ],
            ])
            ->add('paysDelivrance', null, [
                'required' => false,
                'label' => 'Pays de délivrance',
                'attr' => [
                    'placeholder' => 'Pays de délivrance',
                ],
            ])
            ->add('sexe', ChoiceType::class, [
                'choices' => [
                    'Masculin' => 'M',
                    'Féminin' => 'F',
                    'Autre' => 'O',
                ],
            ])
            ->add('dateEntrescout', null, [
                'required' => false,
                'label' => 'Date d\'entrée au scout',
                'attr' => [
                    'placeholder' => 'Date d\'entrée au scout',
                ],
            ])
            ->add('fonctionScout', null, [
                'required' => true,
                'label' => 'Fonction dans le scout',
                'attr' => [
                    'placeholder' => 'Fonction dans le scout',
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'placeholder' => 'Enter a strong password',
                    'class' => 'vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40',
                ],
                'constraints' => [

                    new NotBlank(
                        message: 'Please enter a password',
                    ),
                    new Length(
                        min: 8,
                        minMessage: 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        max: 4096,
                    ),
                ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

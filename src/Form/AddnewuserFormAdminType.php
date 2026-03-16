<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class AddnewuserFormAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'Enter your email address',
                ],
            ])
            ->add('password', PasswordType::class, [
                'mapped' => false, // on hash le mot de passe dans le controller
                'attr' => [
                    'autocomplete' => 'new-password',
                    'placeholder' => 'Enter a strong password',
                ],
            ])
            ->add('username', TextType::class, [
                'attr' => [
                    'placeholder' => 'Enter your username',
                ],
            ])
            ->add('profilePictureFile', VichImageType::class, [
                'required' => false,
                'allow_delete' => false,
                'download_uri' => false,
                'image_uri' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

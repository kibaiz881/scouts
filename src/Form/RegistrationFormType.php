<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Cache\Traits\ContractsTrait;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('username', null, [
                'attr' => [
                    'placeholder' => 'Choose a unique username',
                    'class' => 'vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40',
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
            ->add('email', null, [
                'attr' => [
                    'placeholder' => 'Enter your email address',
                    'class' => 'vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40',
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
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'attr' => [
                    'name' => "_remember_me",
                    'class' => 'mr-2 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 focus:ring-2'
                ],
                'constraints' => [
                    new IsTrue( 
                        message: 'You should agree to our terms.',
                    ),
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
                        min: 6,
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

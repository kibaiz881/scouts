<?php

namespace App\Form;

use App\Entity\Fivondronana;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FivondronanaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('codeFiv')
            ->add('nomFiv')
            ->add('adresseFiv')
            ->add('paroiseFiv')
            ->add('createdAt', null, [
                'widget' => 'single_text',
            ])
            ->add('contactFiv')
            ->add('emailFiv')
            ->add('historiqueFiv')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fivondronana::class,
        ]);
    }
}

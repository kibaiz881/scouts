<?php

namespace App\Form;

use App\Entity\Mpiandrakitra;
use App\Entity\Sampana;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MpiandrakitraFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('codeMp')
            ->add('nomMp')
            ->add('adresseMp')
            ->add('contactMp')
            ->add('emailMp')
            ->add('cinMp')
            ->add('dateDelivraceCINMp')
            ->add('lieuCinMp')
            ->add('ageMp')
            ->add('dateNaissMp')
            ->add('lieuNaissMp')
            ->add('mpiandrakitraPictureFile')
            ->add('updatedAt')
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

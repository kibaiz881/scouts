<?php

namespace App\Form;

use App\Entity\Sampana;
use Dom\Text;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Vich\UploaderBundle\Form\Type\VichFileType;

class SampanaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('codeSampana')
            ->add('nomSampana', null, [
                'label' => 'Nom de la Sampana',
                'attr' => [
                    'placeholder' => 'Entrez le nom de la Sampana',
                ],
            ])
            ->add('EffectifSampana', null, [
                'label' => 'Effectif de la Sampana',
                'attr' => [
                    'placeholder' => 'Entrez l\'effectif de la Sampana',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description de la Sampana',
                'attr' => [
                    'placeholder' => 'Entrez une description de la Sampana',
                ],
            ])
            ->add('createdAt', null, [
                'widget' => 'single_text',
                'attr' => [
                    'placeholder' => 'Entrez la date de création',
                ],
            ])
            ->add('profileSampana' , null, [
                'label' => 'Profil de la Sampana',
                'attr' => [
                    'placeholder' => 'Entrez le profil de la Sampana',
                ],
            ])
            ->add('sampanaPictureFile', VichFileType::class, [
                'label' => 'Photo de la Sampana',
                'required' => false,
                'allow_delete' => true,
                'download_uri' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sampana::class,
        ]);
    }
}

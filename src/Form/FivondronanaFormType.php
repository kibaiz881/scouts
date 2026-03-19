<?php

namespace App\Form;

use App\Entity\Fivondronana;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class FivondronanaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomFiv', null, [
                'label' => 'Nom de la Fivondronana',
                'attr' => [
                    'placeholder' => 'Entrez le nom de la Fivondronana',
                ],
            ])
            ->add('adresseFiv', null, [
                'label' => 'Adresse de la Fivondronana',
                'attr' => [
                    'placeholder' => 'Entrez l\'adresse de la Fivondronana',
                ],
            ])
            ->add('paroiseFiv', null, [
                'label' => 'Paroisse de la Fivondronana',
                'attr' => [
                    'placeholder' => 'Entrez la paroisse de la Fivondronana',
                ],
            ])
            ->add('createdAt', null, [
                'widget' => 'single_text',
                'label' => 'Date de création',
                'attr' => [
                    'placeholder' => 'Entrez la date de création',
                ],
            ])
            ->add('contactFiv', null, [
                'label' => 'Contact de la Fivondronana',
                'attr' => [
                    'placeholder' => 'Entrez le contact de la Fivondronana',
                ],
            ])
            ->add('emailFiv', null, [
                'label' => 'Email de la Fivondronana',
                'attr' => [
                    'placeholder' => 'Entrez l\'email de la Fivondronana',
                ],
            ])
            ->add('historiqueFiv', TextareaType::class, [
                'label' => 'Historique de la Fivondronana',
                'attr' => [
                    'placeholder' => 'Entrez l\'historique de la Fivondronana',
                ],
            ])
            ->add('fivondronanaPictureFile', VichFileType::class, [
                'required' => false,
                'allow_delete' => true,
                'download_uri' => false,
                'label' => 'Image de la Fivondronana (JPEG ou PNG)',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fivondronana::class,
        ]);
    }
}

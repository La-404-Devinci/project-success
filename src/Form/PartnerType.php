<?php

namespace App\Form;

use App\Entity\Partner;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class PartnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('image',FileType::class, [
                'mapped' => false,
                'label' => 'Upload a file',
                'constraints' => [
                    new File([
                        'maxSize' => '5120k',
                        'maxSizeMessage' => 'Please upload a file thad didn\'t exceed 5Mo!',
                    ])
                ]
            ])
            ->add('url', UrlType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Partner::class,
        ]);
    }
}

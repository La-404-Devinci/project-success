<?php

namespace App\Form;

use App\Entity\Resource;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ResourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description', CKEditorType::class, [
                'required' => false
            ])
            ->add('link', UrlType::class, [
                'required' => false
            ])
            ->add('file', FileType::class, [
                'required' => false,
                'mapped' => false,
                'label' => 'Upload a file',
                'constraints' => [
                    new File([
                        'maxSize' => '5120k',
                        'maxSizeMessage' => 'Please upload a file thad didn\'t exceed 5Mo!',
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Resource::class,
        ]);
    }
}

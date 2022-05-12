<?php

namespace App\Form;

use App\Entity\News;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('text', CKEditorType::class)
            ->add('place')
            ->add('img', FileType::class, [
                'mapped' => false,
                'label' => 'Upload a file',
                'constraints' => [
                    new File([
                        'maxSize' => '5120k',
                        'maxSizeMessage' => 'Please upload a file thad didn\'t exceed 5Mo!',
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}

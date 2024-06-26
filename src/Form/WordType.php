<?php

namespace App\Form;

use App\Entity\Word;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('englishWord', TextType::class, [
                'label' => 'Englisches Vokabel',
                'attr' => ['class' => 'form-control']
            ])
            ->add('englishDescription', TextareaType::class, [
                'required' => false,
                'label' => 'Wortart Englisch',
                'attr' => ['class' => 'form-control']
            ])
            ->add('germanDescription', TextareaType::class, [
                'required' => false,
                'label' => 'Wortart Deutsch',
                'attr' => ['class' => 'form-control']
            ])
            ->add('translations', CollectionType::class, [
                'entry_type' => TranslationType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'prototype' => true,
                'attr' => ['class' => 'translation-collection'],
                'label' => ' '
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Word::class,
        ]);
    }
}
<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Translation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TranslationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('germanTranslation', TextType::class, [
                'label' => 'Deutsche Übersetzung',
                'attr' => ['class' => 'form-control']
            ])
            ->add('article', EntityType::class, [
                'class' => Article::class,
                'choice_label' => 'name',
                'placeholder' => 'wählen Sie einen Artikel',
                'required' => false,
                'label' => 'Handelt es sich um ein Nomen? ',
                'attr' => ['class' => 'form-control']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Translation::class,
        ]);
    }
}
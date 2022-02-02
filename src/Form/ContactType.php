<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('fullname', TextType::class, [
            'attr' => ['class' => 'nameZone'],
            'attr' => ['placeholder' => 'Votre nom'],
        ])
        ->add('email', TextType::class, [
            'attr' => ['class' => 'emailZone'],
            'attr' => ['placeholder' => 'Votre email'],
            ])
        ->add('object', TextType::class, [
            'attr' => ['placeholder' => 'Objet'],
            ])
        ->add('content', TextareaType::class, [
            'attr' => ['class' => 'messageZone'],
            'row_attr' => ['class' => 'text-editor'],
            'attr' => ['placeholder' => 'Votre message'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}

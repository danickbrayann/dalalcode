<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('fullname', TextType::class, ['attr' => ['placeholder' => 'Nom complet']])
        ->add('email', TextType::class, ['attr' => ['placeholder' => 'Votre email']])
        ->add('object', TextType::class, ['attr' => ['placeholder' => 'Objet']])
        ->add('content', TextType::class, ['attr' => ['placeholder' => 'Votre message']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}

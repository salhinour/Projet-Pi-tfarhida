<?php

namespace App\Form;

use App\Entity\MoyenTransport;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
class MoyenTransportType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('type', null, [
            'attr' => ['class' => 'form-control'],
            
        ])
        ->add('capacite', null, [
            'attr' => ['class' => 'form-control'],
        ])
        ->add('lieu', null, [
            'attr' => ['class' => 'form-control'],
        ])
        ->add('etat', CheckboxType::class, [
            'label' => 'Disponible',
            'attr' => ['class' => 'form-check-input m-2'],
    
            
        ])
        ->add('image', FileType::class, [
            'label' => 'Choose an image',
            'required' => false,
            'data_class' => null,
            'attr' => ['accept' => 'image/*'],
            'mapped' => false,
        ])

    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MoyenTransport::class,
        ]);
    }
}

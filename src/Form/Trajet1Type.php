<?php

namespace App\Form;

use App\Entity\Trajet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\DataTransformer\UlidToStringTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\UuidToStringTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class Trajet1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('LieuDepart', null, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('LieuArrivee', null, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('heure', null,) 
                
            ->add('MoyenTransport',EntityType::class,[
                'class'=>'App\Entity\MoyenTransport',
                'choice_label'=>'type',
                'attr' => [
                    'style' => 'margin-left: 20px; margin-top: 10px; margin-bottom:20px;']
                    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trajet::class,
        ]);
    }
}

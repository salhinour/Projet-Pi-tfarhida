<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $reclamation = $options['data'] ?? null;
        $builder
        ->add('type', ChoiceType::class, [
            'choices' => [
                'Activité' => 'Activité',
                'Logement' => 'Logement',
                'Restaurant' => 'Restaurant',
                'Transport' => 'Transport',
                
                
            ],
        ])
            ->add('titre', null, [
                'attr' => ['class' => 'form-control'],
                ])
            ->add('description_reclamation', null, [
                'attr' => ['class' => 'form-control'],
                ])
            ->add('date', DateType::class,  [
                'attr' => ['class' => 'form-control'],
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'js-datepicker', 'readonly' => true], 
                'data' => new \DateTime(), 
                'format' => 'dd-MM-yyyy', 
            ])
            ->add('image', FileType::class, [
                'attr' => ['class' => 'form-control'],
                'data_class' => null,
                'required' => false,
                'mapped' => false, 
                'empty_data' => $reclamation ? $reclamation->getImage() : null,
                ])

            
        ;
       
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}

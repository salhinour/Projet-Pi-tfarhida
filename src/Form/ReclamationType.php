<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $reclamation = $options['data'] ?? null;
        $builder
            ->add('type_de_reclamation', null, [
                'attr' => ['class' => 'form-control'],
                ])
            ->add('description_reclamation', null, [
                'attr' => ['class' => 'form-control'],
                ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'js-datepicker', 'readonly' => true], 
                'data' => new \DateTime(), 
                'format' => 'dd-MM-yyyy', 
            ])
            ->add('image', FileType::class, [
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

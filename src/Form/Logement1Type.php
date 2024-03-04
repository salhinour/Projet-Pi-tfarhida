<?php

namespace App\Form;

use App\Entity\Logement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Logement1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $logement = $options['data'] ?? null;

        $builder
            ->add('nom')
            ->add('num')
            ->add('Localisation')
            ->add('NoteMoyenne')
            ->add('Prix')
            ->add('Etat')
            ->add('image', FileType::class, [
                'data_class' => null,
                'required' => false,
                'mapped' => false, // Ne pas mapper ce champ à l'entité
                'empty_data' => $logement ? $logement->getImage() : null,
                ])

            ->add('TypeLog', ChoiceType::class, [
                'choices' => [
                    'Appartement' => 'Appartement',
                    'Maison' => 'Maison',
                    'Villa' => 'Villa',
                    'Hotel' => 'Hotel',
                    // Add more choices as needed
                ],
                'placeholder' => 'Choose a type of accommodation',
            ]) ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Logement::class,
        ]);
    }
}

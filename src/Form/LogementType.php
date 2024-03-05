<?php

namespace App\Form;

use App\Entity\Logement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class LogementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $logement = $options['data'] ?? null;
        $builder
            ->add('nom')
            ->add('num', TextType::class, [ // Ajout du champ de localisation
                'label' => 'Numero de telephone*', // Label du champ
                'required' => true, // Le champ est requis
                'attr' => [
                    'class' => 'form-input', // Classes CSS du champ
                    'placeholder' => 'entrer votre telephone portable', // Placeholder du champ
                   
                ],
            ])
            ->add('Prix')
            ->add('NoteMoyenne')
            // ->add('Localisation')
            ->add('Localisation', TextType::class, [ // Ajout du champ de localisation
                'label' => 'Location*', // Label du champ
                'required' => true, // Le champ est requis
                'attr' => [
                    'class' => 'form-input', // Classes CSS du champ
                    'placeholder' => 'Include a place or address', // Placeholder du champ
                    'data-map-target' => 'mapping', // Attribut de données personnalisé si nécessaire
                ],
            ])
            ->add('image', FileType::class, [
                'data_class' => null,
                'required' => false,
                'mapped' => false, // Ne pas mapper ce champ à l'entité
                'empty_data' => $logement ? $logement->getImage() : null,
                ])

            ->add('TypeLog', ChoiceType::class, [
                'label' => 'Type de logement*', // Label du champ
                'choices' => [
                    'Appartement' => 'Appartement',
                    'Maison' => 'Maison',
                    'Villa' => 'Villa',
                    'Hotel' => 'Hotel',

                    // Add more choices as needed
                ],
                'placeholder' => 'Choose a type of accommodation',
            ]) ;

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Logement::class,
        ]);
    }
}

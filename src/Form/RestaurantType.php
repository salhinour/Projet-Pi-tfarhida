<?php

namespace App\Form;

use App\Entity\Restaurant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class RestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('nom', TextType::class, [
            'constraints' => [
                new NotBlank(['message' => 'Le nom du restaurant est requis']),
            ],
        ])
        ->add('adresse', TextType::class, [
            'constraints' => [
                new NotBlank(['message' => 'L\'adresse du restaurant est requise']),
            ],
        ])
        ->add('numdetel', TextType::class, [
            'constraints' => [
                new NotBlank(['message' => 'Le numéro de téléphone est requis']),
                new Length(['min' => 8, 'max' => 8, 'exactMessage' => 'Le numéro de téléphone doit contenir exactement 8 chiffres']),
                new Type(['type' => 'numeric', 'message' => 'Le numéro de téléphone doit contenir des chiffres uniquement']),
            ],
        ])
        ->add('nmbetoiles', IntegerType::class, [
            'constraints' => [
                new Range(['min' => 1, 'max' => 5, 'minMessage' => 'Le nombre d\'étoiles doit être au moins 1', 'maxMessage' => 'Le nombre d\'étoiles ne peut pas dépasser 5']),
            ],
        ])
        

        // Dans la méthode buildForm de RestaurantType
       
            // Autres champs...
            ->add('heureOuverture', TimeType::class, [
                'label' => 'Heure d\'ouverture',
                'input' => 'string', // Définir le type d'entrée comme 'string'
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('heureFermeture', TimeType::class, [
                'label' => 'Heure de fermeture',
                'input' => 'string', // Définir le type d'entrée comme 'string'
                'widget' => 'single_text',
                'required' => false,
            ])
        
        ->add('imageRestaurant', FileType::class, [
            'label' => 'Image du restaurant',
            'mapped' => false, // Indique à Symfony de ne pas mapper ce champ à une propriété de l'entité
            'required' => false, // Rend le champ facultatif
        ])

        ->add('plats', EntityType::class, [
            'class' => 'App\Entity\Plat',
            'choice_label' => 'nom',
            'multiple' => true,
            'expanded' => true,
            'by_reference' => false, // Assurez-vous que la valeur soit false pour que la relation soit bien gérée
        ]);
        
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurant::class,
        ]);
    }
}

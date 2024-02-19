<?php

namespace App\Form;

use App\Entity\Activitee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class Activitee1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $activitee = $options['data'] ?? null;

        $builder
            ->add('nom')
            ->add('prix')
            ->add('localisation')
            ->add('nbP')
            ->add('etat')
            ->add('image', FileType::class, [
                'data_class' => null,
                'required' => false,
                'mapped' => false, // Ne pas mapper ce champ à l'entité
                'empty_data' => $activitee->getImage(), // Pré-remplir avec le chemin de l'image existante
            ])            
            ->add('descriptionact')
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'type_categorie', // Remplacez 'nom' par le champ approprié de votre entité Categorie
                'placeholder' => 'Choisir une catégorie', // Texte à afficher par défaut dans la liste déroulante
            ]);
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activitee::class,
        ]);
    }
}

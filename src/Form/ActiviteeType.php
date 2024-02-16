<?php

namespace App\Form;

use App\Entity\Activitee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ActiviteeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prix')
            ->add('localisation')
            ->add('nbP')
            ->add('etat')
            ->add('image',FileType::class, array('data_class' => null,'required' => false))
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

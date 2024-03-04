<?php

namespace App\Form;

use App\Entity\Equipement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $equipement = $options['data'] ?? null;

        $builder
            ->add('Parking')
            ->add('nbrChambre')
            ->add('internet')
            ->add('climatisation')
            ->add('TypesDeChambre')
            ->add('Description')

        //     ->add('image', FileType::class, [
        //         'data_class' => null,
        //         'required' => false,
        //         'mapped' => false, // Ne pas mapper ce champ à l'entité
        //         'empty_data' => $equipement?$equipement->getImage() : null,
        //         ])
         ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipement::class,
        ]);
    }
}

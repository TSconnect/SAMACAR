<?php

namespace App\Form;

use App\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('LieuDepart')
            ->add('LieuArrivee')
            ->add('HeureDepart')
            ->add('PrixTrajet')
            ->add('PlacesDisponibles')
            ->add('Chauffeur')
            ->add('Vehicule')
            ->add('DatePublication')
            ->add('DateExpiration')
            ->add('EtatAnnonce')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}

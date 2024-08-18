<?php

namespace App\Form;

use App\Entity\Event;
// use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'attr' => ['class' => 'form-control mb-2 w-50'],
            ])
            ->add('description', TextareaType::class, [
                'attr' => ['class' => 'form-control mb-2 w-50'],
            ])
            ->add('date_start', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('time_start', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('capacity', null, [
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('type', ChoiceType::class, [
                'choices'  => [
                    '-- Select --' => null,
                    'Music' => "music",
                    'Comedy' => "comedy",
                    'Movies' => "movies",
                ],
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('image', null, [
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('email', null, [
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('phone', null, [
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('venue', null, [
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('street_name', null, [
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('street_number', null, [
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('city', null, [
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('zip_code', null, [
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
            ->add('country', null, [
                'attr' => ['class' => 'form-control mb-2 w-25'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}

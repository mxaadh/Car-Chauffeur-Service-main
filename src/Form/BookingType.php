<?php

namespace App\Form;

use App\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('bookingId')
            ->add('customerId')
            ->add('specialBooking')
            ->add('dropOfCustomer', null, [
                'widget' => 'single_text'
            ])
            ->add('pckUpCustomer', null, [
                'widget' => 'single_text'
            ])
            ->add('isLuxury')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', null, [
                'constraints' => [
                    new Assert\Email(),
                    new Assert\Regex([
                        'pattern' => '/@sport\.com$/',
                        'message' => 'L\'adresse email doit appartenir au domaine sport.com'
                    ]),
                ],
            ])
            ->add('roles')
            ->add('password')
            ->add('username')
            ->add('numTel')
            ->add('dateN', DateType::class )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'attr'=>['novalidate'=>'novalidate']

        ]);
    }
}
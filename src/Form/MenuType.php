<?php

namespace App\Form;

use App\Entity\Menu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('categories')
            ->add('UserId')
            ->add('descriptionmenu', TextareaType::class, [
                'attr' => ['rows' => 5, 'cols' => 20],
            ])

          //  ->add('nbplats')
            ->add('Submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-outline-dark',
                    'style' => 'background-color: grey; color: #6d071a;',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Menu::class,
        ]);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-03-21
 * Time: 10:54
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('surname');
    }

    public function getParent()
    {
        return BaseRegistrationType::class;
    }


}
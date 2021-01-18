<?php


namespace App\Controller;


use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class LoginFormType extends \Symfony\Component\Form\AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //On ajoute les champs du formulaire avec un nom et  un type pour chaque champs
        // <input type="text" name="login"/>
        $builder->add('login', TextType::class,[
            'constraints' => new NotBlank(),
    ]);
        // <input type="password" name="password"/>
        $builder->add('password', PasswordType::class,[
            'constraints' => [
                new Length(null,4,10),
            ]
        ]);
        // <input type="submit" name="submit"/>
        $builder->add('submit', SubmitType::class);
    }

}
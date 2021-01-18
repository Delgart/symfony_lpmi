<?php


namespace App\Controller;



/*
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;*/
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    private $accounts = [['login'=>'admin','password'=>'azerty'],['login'=>'user','password'=>'qsdfg']];

    public function loginForm(Request $request):Response{

        $form = $this->createForm(LoginFormType::class);

        //Prise en charge de la requete
        $form->handleRequest($request);
        //On verifie sur le formulaire qui a ete soumis (clic sur envoyer) et s'il est valide (valeurs bien formées)
        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            $login = $data['login'];
            $password = $data['password'];


            $this->redirectToRoute('hello',['prenom' =>$data['login']]);
        } else if ($form->isSubmitted()){
            $message = 'Login ou mot de passe mal formé';
        }

        //l'appel à createView genere une version utilisable par le moteur de rendu
        $formView = $form->createView();

        return $this->render('login.html.twig',['form'=>$formView, 'message'=>$message]);
    }

    public function loginPost(Request $request):Response{

        $form = $this->createForm(LoginFormType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            $login = $data['login'];
            $password = $data['password'];

            $returnMessage = "Bienvenue ! $login";
        } else {
            $returnMessage = 'Désolé, veuillez réessayer !';
        }
        return $this->render('login_result.html.twig',['message'=>$returnMessage]);
    }
}
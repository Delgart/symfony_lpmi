<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldControler extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * Controler "hello world", affiche la chaine  "Hello World" dans le navigateur
     * @param $prenom le prenom à afficher
     * @return Response*
     */
    function hello($prenom):Response{
        /**$returnString = "Hello $prenom";*/
        return $this->render('hello.html.twig', [
            'prenom'=>$prenom]);

    }

    function form():Response{
        return new Response("<html>
            <body>
                <form method='post'>
                    Nom : <input name='name'/>
                    <input type='submit'/>
                </form>
            </body>
        </html>");
    }

    function formReceive(Request $request):Response{
        $name = $request->request->get('name');
            return new Response("Merci $name");
    }
    function liste():Response{
        return $this->render('liste.html.twig', [
            'liste'=> [
                ['prenom' => 'Ala','nom' => 'Zero'],
                ['prenom' => 'Ala','nom' => 'Dun'],
                ['prenom' => 'Ala','nom' => 'Deux'],
            ]
        ]);
    }
}
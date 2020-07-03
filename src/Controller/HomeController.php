<?php
        /**
         * le namespace permet d'identifier la classe
         * pour pouvoir l'appeler dans d'autres classes
         */
        namespace App\Controller;

        use Symfony\Component\Routing\Annotation\Route;

        /**
         * je cree une classe HomeControleur qui correspond au nom du fichier, et qui me permert de regrouper des routes
         *
         */


        class HomeController {
            /**
             * @Route("/test2", name="home")
             *
             * je cree une route dans un commentaire que php va exécuter( c'est donc une annotation)
             * je sais que c'est une annotation car il y a une classe avec un @ devant.
             * j'associe une url a ma route et je lui associe aussi une methode de controleur(en plaçant mon annotation
             * de la méthode). la méthode du controleur
             */
            public function home(){

                var_dump('hello home');die;
            }


        }


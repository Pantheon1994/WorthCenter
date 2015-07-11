<?php


class connexionController extends \Slim\Slim
{
    public static function index()
    {
        $slim = \Slim\Slim::getInstance();
        $slim->render('connexion.php');
    }

    public static function connexion()
    {
        $slim = \Slim\Slim::getInstance();

        $user = new \WorthCenter\user(array(
            "password" => sha1($_POST['Motdepasse']),
            "email" => $_POST['AdresseEmail'],
        ));
        if ($user->createSession()) {
            $slim->redirect('membre');
        } else {
            flash::setFlash('session', "Email ou mot de passe incorrecte.");
            $slim->redirect('connexion');
        }
    }

    public static function deconnexion()
    {
        $slim = \Slim\Slim::getInstance();
        unset($_COOKIE['user']);
        setcookie("user", "", time() - (999999 * 30), "/"); // 86400 = 1 day
        flash::setFlash('session', "Vous êtes bien deconnecté !");
        $slim->redirect('connexion');

    }

}
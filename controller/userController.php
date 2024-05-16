<?php
require_once 'C:\\xampp\\htdocs\\phpCosiaca\\Proyecto\\model\\Model.php';

class userController
{
    public static function userLogin()
    {
        if (isset($_POST['mail'], $_POST['password'])) {

            $data = array(
                'mail' => $_POST['mail'],
                'password' => $_POST['password']
            );

            $validationBD = Model::modelUserLogIn($data);

            if ($validationBD['boolResponse']) {
                header('Location: ../../tienda.php');
            }

            else {
                echo $validationBD['response'];
            }
        }
    }

    public static function userLogup()
    {

        if (isset($_POST['mail'], $_POST['name'], $_POST['password'], $_POST['password_confirm'])) {

            $data = array(
                'name' => $_POST['name'],
                'last_name' => $_POST['last_name'],
                'mail' => $_POST['mail'],
                'password' => $_POST['password'],
                'password_confirm' => $_POST['password_confirm']
            );

            $validationBD = Model::modelUserLogup($data);

            if ($validationBD['boolResponse']) {
                header('Location: login.php');
            }
        }
    }

    public static function userLogout()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location: page.php');
    }
}



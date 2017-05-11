<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class ConnectsController extends AppController {

    public function login(){
        $errors = false;
        $this->template = "indexTemplate";
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])){
                if($auth->authorizationBan($_POST['username'])){
                    session_destroy();
                    $this->render('connects.ban', compact('form', 'errors'));
                    exit();
                }
                if($auth->authorizationKick($_POST['username'])){
                    session_destroy();
                    $this->render('connects.kick', compact('form', 'errors'));
                    exit();
                }
                if($_SESSION["auth"] === "admin"){
                    header('Location: index.php?p=admin.admins.all');
                } elseif($_SESSION["auth"] === "user"){
                    header('Location: index.php?p=users.index');
                }
            }else{
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('connects.login', compact('form', 'errors'));
    }

    public function register()
    {
        $errors = false;
        $this->template = "indexTemplate";
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if (isset($_POST['username'], $_POST['password'], $_POST['password2'], $_POST['mail']) && $_POST['password'] != '' && $_POST['mail'] != '') {
                 if($auth->register($_POST['username'], $_POST['password'], $_POST['password2'], $_POST['mail'])){
                   header("Location: index.php");
                   exit();
                }else{
                    $errors = true;
                }
            }else{
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('connects.register', compact('form', 'errors'));
    }

    public function disconnect()
    {
        session_destroy();
        header("Location: index.php");
        exit();
    }
}
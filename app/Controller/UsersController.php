<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class UsersController extends AppController {

    public function login(){
        $errors = false;
        $this->template = "indexTemplate";
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            $auth->login($_POST['username'], $_POST['password']);
            if($_SESSION["auth"] === "admin"){
                header('Location: index.php?p=admin.posts.index');
            } elseif($_SESSION["auth"] === "user"){
                header('Location: index.php?p=posts.index');
            } else{
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'errors'));
    }

}
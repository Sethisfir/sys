<?php

namespace App\Controller;

use Core\Controller\Controller;

class UsersController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
    }

    public function index(){
        if(!$_SESSION){
            $this->notFound();
        }
        $_SESSION['auth'] == "admin" ? $isAdmin = "admin.users.all" : $isAdmin = "users.index";
        $profil = $this->User->findUser($_SESSION["user"], true);
        $myLibrary = $this->User->getMusics();
        $profil->src != null ? $src = $profil->src : $src = "/img/Fichier6.svg";
        $this->render('users.index', compact('profil', 'src', 'myLibrary'));
    }

    public function addRequest(){
        if(!$_SESSION){
          $this->notFound();
        }
        $musique = htmlspecialchars($_GET['music']);
        $shareUser = htmlspecialchars($_GET['shareUser']);
        $receiveUser = htmlspecialchars($_GET['receiveUser']);
        $res = $this->User->addRequest($musique, $shareUser, $receiveUser);
        echo $res == true ? '<div class="alert alert-success" role="alert">Demande envoyé avec succès</div>' : '<div class="alert alert-error" role="alert">Une erreur est survenue :(</div>';

        $this->render('search.index', compact('res'));
    }

    public function request()
    {
        if(!$_SESSION){
          $this->notFound();
        }
        $musicsList = $this->User->requestWait();
        $this->render('users.request', compact('musicsList'));
    }

    public function musics()
    {
        if(!$_SESSION){
          $this->notFound();
        }
        $this->render('users.musics');
    }

    public function deal()
    {
      if (isset($_POST['id'])){
        if(!$_SESSION){
          $this->notFound();
        }
        $id = $_POST['id'];
        if($this->User->exchangeValid($id)){
          $musicsList = $this->User->requestWait();
          $this->render('users.request', compact('musicsList'));
        }else{
          $musicsList = $this->User->requestWait();
          $this->render('users.request', compact('musicsList'));
        }
      }
    }
}

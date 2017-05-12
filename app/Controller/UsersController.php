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

    public function category(){
        $categorie = $this->Category->find($_GET['id']);
        if($categorie === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('posts.category', compact('articles', 'categories', 'categorie'));
    }

    public function show(){
        $article = $this->Post->findWithCategory($_GET['id']);
        $this->render('posts.show', compact('article'));
    }

}

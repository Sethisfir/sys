<?php

namespace App\Controller;

use Core\Controller\Controller;

class UsersController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
    }

    public function index(){
        $profil = $this->User->findUser($_SESSION["user"], true);
        $myLibrary = $this->User->getMusics();
        $profil->src != null ? $src = $profil->src : $src = "/img/Fichier6.svg";
        $this->render('users.index', compact('profil', 'src', 'myLibrary'));
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
<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Category');
    }

    public function index(){
        $_SESSION['auth'] == "admin" ? $isAdmin = "admin.users.all" : $isAdmin = "users.index";
        if (isset($_POST['title'])){
            $pushSongs = $this->Post->addSong($_POST["title"], $_POST["author"], $_POST["releaseDate"], $_POST["user"], $_POST["type"], $_POST["process"]);
            echo '<div class="alert alert-success" role="alert">Titre ajouté avec succès</div>';
        }
        $posts = $this->Post->allMySong($_SESSION["user"]);
        $form = new BootstrapForm();
        $this->render('posts.index', compact('form', 'isAdmin'));
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
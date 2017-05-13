<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class SearchController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('Search');
        $this->loadModel('User');
        $this->loadModel('Post');
    }

    public function index(){
       if(!$_SESSION){
            $this->notFound();
        }
       $_SESSION['auth'] == "admin" ? $isAdmin = "admin.users.all" : $isAdmin = "users.index";
       $search = $this->Search->allMusics();
       $form = new BootstrapForm();
       $this->render('search.index', compact('search', 'isAdmin', 'form'));
    }

    public function instantSearch(){
        $search = $this->Search->search($_GET['title'], $_GET["proc"]);
        foreach ($search as $value) {
            echo "<p>Alors moi c'est ".$value->name." et j't'".$value->process." ".$value->title." de ".$value->author." sorti le ".$value->releaseDate." en format ".$value->type;
        }
    }
}
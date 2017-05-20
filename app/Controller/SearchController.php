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
        $search = $this->Search->titleSearch($_GET['title'], $_GET["proc"]);
        echo "<div class='form'>";
        foreach ($search as $key => $value) {
            echo "<p><a href='index.php?p=search.details&song=".$value->id."'>".$value->title." - ".$value->author." - ".$value->type."</a></p>";
        }
        echo '</div>';
    }

    public function details(){
        if(!$_SESSION){
            $this->notFound();
        }
        $search = $this->Search->search($_GET['song']);
        $this->render('search.details', compact('search'));
    }
}
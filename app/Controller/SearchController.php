<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class SearchController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('Search');
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
}
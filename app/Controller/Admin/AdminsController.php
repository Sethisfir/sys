<?php

namespace App\Controller\Admin;

use Core\Controller\Controller;
use Core\Database\Database;

class AdminsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
    }
    public function all(){
        $users = $this->User->last();
        $this->render('admin.users.show', compact('users'));
    }

    public function delete()
    {
        $this->User->delete($_POST["id"]);
        $this->all();
    }
}
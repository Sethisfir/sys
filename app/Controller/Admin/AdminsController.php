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
        $users = $this->User->allUsers();
        $this->render('admin.users.show', compact('users'));
    }

    public function delete()
    {
        $user = $this->User->find($_POST['id'], false);
        if($user->isBan == false){
            $this->User->update($_POST['id'], ['isBan' => true]);
            $this->User->update($_POST['id'], ['isKick' => true]);
            header("Location: index.php?p=admin.admins.all");
            exit();
        }elseif($user->isBan == true){
            $this->User->update($_POST['id'], ['isBan' => false]);
            header("Location: index.php?p=admin.admins.all");
            exit();
        }
    }

    public function kick()
    {
        $user = $this->User->find($_POST['id'], false);
        if($user->isKick == false){
            $this->User->update($_POST['id'], ['isKick' => true]);
            header("Location: index.php?p=admin.admins.all");
            exit();
        }elseif($user->isKick == true){
            $this->User->update($_POST['id'], ['isKick' => false]);
            header("Location: index.php?p=admin.admins.all");
            exit();
        }
    }
}
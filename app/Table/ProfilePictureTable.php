<?php
namespace App\Table;

use Core\Table\Table;

class ProfilePictureTable extends Table{

    protected $table = 'users';

    public function addPicture( $files, $user_id, $picture_id=false, $insert=true){
    	if($files){
	    	$this->query("UPDATE profilpictures SET selecte=0 WHERE users_id=$user_id");
	    	if($insert){
		    	$this->query("INSERT INTO profilpictures SET src=?, users_id=?, selecte=?",
		    					["img/upload/".$files['name'], $user_id, 1]);
		    	if(!$this->uploadFiles($files)){
	    			echo '<h1>This is an EPIC FAIL</h1>';
	    		}else{
	    			echo '<h1>Yeah ! It works !';
	    		}
	    	}elseif($picture_id){
	    		$this->query("UPDATE profilpictures SET selecte=1 WHERE id= $picture_id");
	    	}
	    }
    }

    public function user_pictures($users_id){
    	return $this->query("SELECT profilpictures.id,
    								profilpictures.src 
    						FROM profilpictures, users 
    						WHERE profilpictures.users_id = $users_id
    						AND users.id = $users_id");
    }

}

<?php
namespace App\Table;

use Core\Table\Table;

class PostTable extends Table{

    protected $table = 'musics';

    /**
     * Récupère les derniers article
     * @return array
     */
    public function last($id){
       return $this->query("SELECT users.name,
                                    musics.title,
                                    musics.author,
                                    musics.releaseDate,
                                    categories.type,
                                    process.type as process
                            FROM musics, users, categories, process 
                            WHERE musics.users_id = $id
                            AND categories.id = musics.categories_id
                            AND process.id = musics.process_id ORDER BY musics.id DESC LIMIT 4");
    }

    /**
     * Récupère tous les articles
     * @return array
     */
    public function allMySong($id){
       return $this->query("SELECT users.name,
                                    musics.title,
                                    musics.author,
                                    musics.releaseDate,
                                    categories.type,
                                    process.type as process
                            FROM musics, users, categories, process 
                            WHERE musics.users_id = $id
                            AND musics.users_id = users.id
                            AND categories.id = musics.categories_id
                            AND process.id = musics.process_id ORDER BY musics.id DESC");
    }

    /**
    *   Insert une nouvelle musique
    *   @return bool
    */
    public function addSong($title, $author, $releaseDate, $users_id, $categories_id, $process_id){
        return $this->query("INSERT INTO musics 
                            SET musics.title=?,
                                musics.author=?,
                                musics.releaseDate=?,
                                musics.users_id=?,
                                musics.categories_id=?,
                                musics.process_id=?", [$title, $author, $releaseDate, $users_id, $categories_id, $process_id]);
    }
}
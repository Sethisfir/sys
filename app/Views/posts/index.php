<div class="row">
    <form methode="POST">
        <?= $form->input("title", "titre"); ?>
        <?= $form->input("author", "artiste"); ?>
        <div>;
            <p>
                <label>Cassette</label>
                <input type='radio' name='type' value='1' />
            </p>
            <p>
                <label>Cd</label>
                <input type='radio' name='type' value='2' />
            </p>
            <p>
                <label>Vinyl</label>
                <input type='radio' name='type' value='3' />
            </p>
        </div>
        <div>
            <label>Echange</label>
            <input type='radio' name='process' value='1' />
            <label>Don</label>
            <input type='radio' name='process' value='2' />
            <label>Partager</label>
            <input type='radio' name='process' value='3' />
        </div>
        <input type='hidden' value='<?= $_SESSION['user'] ?>' name='user' />
        <button type="submit">Envoyer</button>
    </form>
    
    <div class="col-sm-8">
        <?php foreach ($posts as $post): ?>

            <h2><a><?= $post->title; ?></a></h2>

            <p><em><?= $post->author; ?></em></p>

            <p><?= $post->releaseDate; ?></p>

            <p><?= $post->type; ?></p>

        <?php endforeach; ?>

    </div>

</div>
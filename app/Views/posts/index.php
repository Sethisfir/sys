<div class="row">
    <form methode="POST">
    <?php
        echo $form->input("title", "titre");
        echo $form->input("author", "artiste");
        echo '<div>';
        echo '<p>';
        echo "<label>Cassette</label>";
        echo "<input type='radio' name='type' value='1' />";
        echo '</p>';
        echo '<p>';
        echo "<label>Cd</label>";
        echo "<input type='radio' name='type' value='2' />";
        echo '</p>';
        echo '<p>';
        echo "<label>Vinyl</label>";
        echo "<input type='radio' name='type' value='3' />";
        echo '</p>';
        echo '</div>';
        echo '<div>';
        echo "<label>Echange</label>";
        echo "<input type='radio' name='process' value='1' />";
        echo "<label>Don</label>";
        echo "<input type='radio' name='process' value='2' />";
        echo "<label>Partager</label>";
        echo "<input type='radio' name='process' value='3' />";
        echo '</div>';
        echo "<input type='hidden' value='".$_SESSION['user']."' name='user' />";
    ?>
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
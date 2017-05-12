<div class="row">
    <form method="POST">
        <?= $form->input("title", "titre"); ?>
        <?= $form->input("author", "artiste"); ?>
        <?= $form->input("releaseDate", "date de parution", ['type' => 'date']); ?>
        <div>;
            <p>
                <label>Cassette</label>
                <input type='radio' name='type' value='1' />
            </p>
            <p>
                <label>Cd</label>
                <input type='radio' name='type' value='2' />
            </p>it 
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
</div>

<div class="page">
    <form method="POST" class="formShare">
        <?= $form->input("title", "Titre"); ?>
        <?= $form->input("author", "Artiste"); ?>
        <?= $form->input("releaseDate", "Date", ["type" => "date"]); ?>
        <!--Format disponible-->
        <div class="format">
            <!--Faux input pour permettre l'affichage des suivants...-->
            <input type='radio' name='type' value='1' id="cassette"/>
            <label for="cassette" class="iconeCassette iconeFormat"></label>
            <input type='radio' name='type' value='2' id="cd" checked />
            <label for="cd" class="iconeCd iconeFormat"></label>
            <input type='radio' name='type' value='3' id="vinyle"/>
            <label for="vinyle" class="iconeVinyle iconeFormat"></label>
            
        </div>
        <!--Type échange-->
        <div class="radioEchange form-group">
            <label for="echange">Echange</label>
            <input type='radio' name='process' value='1' id="echange" />
            <label for=" don">Don</label>
            <input type='radio' name='process' value='2' id="don" />
            <label for="partage">Partager</label>
            <input type='radio' name='process' value='3' id="partage" />
        </div>
        <!--Envoi-->
        <div class="form-group">
            <input type='hidden' value='<?= $_SESSION['user'] ?>' name='user' />
            <button type="submit" class="btnEnvoi">Envoyer</button>
        </div>
    </form>
</div>
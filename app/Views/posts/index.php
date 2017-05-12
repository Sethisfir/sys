
<div class="page">
    <form methode="POST" class="formShare">
        <?= $form->input("title", "Titre"); ?>
        <?= $form->input("author", "Artiste"); ?>
        <!--Format disponible-->
        <div class="form-group format">
            <!--Faux label pour permettre l'affichage des suivants...-->
            <label></label>
            <input type='radio' name='type' />
            <label for="cassette" class="iconeCassette"></label>
            <input type='radio' name='type' value='1' id="cassette" />
            <label for="cd" class="iconeCd"></label>
            <input type='radio' name='type' value='2' id="cd" />
            <label for="vinyle" class="iconeVinyle"></label>
            <input type='radio' name='type' value='3' id="vinyle"/>
        </div>
        <!--Type échange-->
            <div class="radioEchange">
                <label for="echange">Echange</label>
                <input type='radio' name='process' value='1' id="echange" />
            </div>
            <div class="radioEchange">
                <label for=" don">Don</label>
                <input type='radio' name='process' value='2' id="don" />
            </div>
            <div class="radioEchange">
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
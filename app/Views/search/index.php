
<!--Formulaire recherche-->
<form method="post" id="formSearch">
	<div class="form-group">
		<label>Rechercher</label>
	 	<input type="text" name="search" id="search" class="form-control"/>
	 </div>
	 <div class="form-group">
	 	<label>Echange</label>
		<input type="radio" name="process" class="process"	value="1" checked/>
		<label>Don</label>
		<input type="radio" name="process" class="process"	value="2"/>
		<label>Partage</label>
		<input type="radio" name="process" class="process"	value="3"/>
	</div>
</form>

<!-- Ici contenu de la recherche -->
<div id="searchContainer" class="form">
	<!-- TUNING DANS Controller/SearchController fonction instantSearch -->
</div>	

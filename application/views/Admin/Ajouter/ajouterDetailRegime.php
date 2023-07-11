<?php $this->load->view('Admin/header'); ?>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
				<div class="row">
				<div class="col-lg-12">
					<div class="text-center">
						<h1 class="h4 text-gray-900 mb-12">Ajouter detail Régime</h1>
					</div>
					<div>
						<p>Objectif : <?php echo $nomObjectif; ?></p>
						<p>Poids : <?php echo $donnees['poids']; ?></p>
						<p>Prix : <?php echo $donnees['prix']; ?> Ar</p>
						<p>Durée : <?php echo $donnees['duree']; ?> jrs</p>
					</div>
				</div>
				</div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-5">
							<div class="form-group">
								<label for="objectif">Aliment</label>
								<select class="form-control" id="aliment">
									<?php foreach($listsakafo as $indice){ ?>
										<option value="<?php echo $indice['nom']; ?>"><?php echo $indice['nom']; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="prix">Quantite(kg)</label>
								<input type="text" class="form-control" id="quantite" name="prix" placeholder="Entrez le prix">
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block" id="ajoutAliment">
								Ajouter
							</button>
                        </div>
                    </div>
					<div class="col-lg-6">
                        <div class="p-5">
							<div class="form-group">
								<label for="activite">Activité sportive</label>
								<select class="form-control" id="activite" name="activite">
									<?php foreach($listactivite as $indice){ ?>
										<option value="<?php echo $indice['nom']; ?>"><?php echo $indice['nom']; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="prix">Nombre</label>
								<input type="number" min="1" class="form-control" id="nombre" name="nombre" placeholder="Entrez le prix">
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block" id="ajoutActivite">
								Ajouter
							</button>
                        </div>
                    </div>
                </div>
				<div class="row">
				<div class="col-lg-12">
					<form action="<?php echo site_url('RegimeController/insertRegime'); ?>" method="post">
						<input type="hidden" name="idObjectif" value="<?php echo $donnees['idObjectif']; ?>">
						<input type="hidden" name="poids" value="<?php echo $donnees['poids']; ?>">
						<input type="hidden" name="prix" value="<?php echo $donnees['prix']; ?>">
						<input type="hidden" name="duree" value="<?php echo $donnees['duree']; ?>">
						<input type="hidden" name="tailleAliment" id="tailleAliment">
						<input type="hidden" name="tailleActivite" id="tailleActivite">
						<table class="table">
							<thead>
								<tr>
									<th>Type</th>
									<th>Nom</th>
									<th>Nombre</th>
									<th></th>
								</tr>
							</thead>
							<tbody id="tbody">

							</tbody>
						</table>
					
						<div class="col-md-12">
							<div class="text-center" id="divValide">
								
							</div>
						</div>
					</form>
				</div>
				</div>
            </div>
        </div>
    </div>
	<script>
		const divValide = document.getElementById('divValide');
		const ajoutAliment = document.getElementById('ajoutAliment');
		const ajoutActivite = document.getElementById('ajoutActivite');
		const tbody = document.getElementById('tbody');	
		let valdier = false;
		const taille_inputAliment = document.getElementById('tailleAliment');
		const taille_inputActivite = document.getElementById('tailleActivite');
		let countAliment = 0;
		let countActivite = 0;
		//sakafo						
		ajoutAliment.addEventListener('click', function(){
			if(!valdier){
				const button = document.createElement('button');
				button.setAttribute('type','submit');
				button.setAttribute('class','btn btn-primary btn-user btn-block');
				button.textContent="Enregistrer";
				divValide.appendChild(button);
				valdier = true;
			}
			
			//
			var aliment = document.getElementById('aliment');
			var alimentValue = aliment.value;
			var quantite = document.getElementById('quantite');
			var quantiteValue = quantite.value;
			const tr = document.createElement('tr');
			const td1 = document.createElement('td');
			td1.textContent="Aliment";
			tr.appendChild(td1);
			//aliment
			const td2 = document.createElement('td');
			td2.textContent=alimentValue;
			tr.appendChild(td2);
			//input
			const aliment_input = document.createElement('input');
			aliment_input.setAttribute('type','hidden');
			aliment_input.setAttribute('name',"aliment"+countAliment);
			aliment_input.setAttribute('value',alimentValue);
			tr.appendChild(aliment_input);
			//quantite
			const td3 = document.createElement('td');
			td3.textContent=quantiteValue;
			tr.appendChild(td3);
			//input
			const quantite_input = document.createElement('input');
			quantite_input.setAttribute('type','hidden');
			quantite_input.setAttribute('name',"quantite"+countAliment);
			quantite_input.setAttribute('value',quantiteValue);
			tr.appendChild(quantite_input);
			//button supprimer
			let boutonSupprimer = document.createElement("button");
    		boutonSupprimer.setAttribute('class', 'btn btn-dark');
    		boutonSupprimer.innerText = "Supprimer";
			const td4 = document.createElement('td');
			td4.textContent=boutonSupprimer;
			boutonSupprimer.setAttribute('onclick', 'supprimerLigneAliment(this)');
			tr.appendChild(boutonSupprimer);
			//
			//incrementer
			taille_inputAliment.setAttribute('value',countAliment+1);
			countAliment++;
			tbody.appendChild(tr);
		});
		//activite
		ajoutActivite.addEventListener('click', function(){
			if(!valdier){
				const button = document.createElement('button');
				button.setAttribute('type','submit');
				button.setAttribute('class','btn btn-primary btn-user btn-block');
				button.textContent="Enregistrer";
				divValide.appendChild(button);
				valdier = true;
			}
			
			//
			var activite = document.getElementById('activite');
			var activiteValue = activite.value;
			var nombre = document.getElementById('nombre');
			var nombreValue = nombre.value;
			const tr = document.createElement('tr');
			const td1 = document.createElement('td');
			td1.textContent="Activite";
			tr.appendChild(td1);
			//activite
			const td2 = document.createElement('td');
			td2.textContent=activiteValue;
			tr.appendChild(td2);
			//input
			const activite_input = document.createElement('input');
			activite_input.setAttribute('type','hidden');
			activite_input.setAttribute('name','activite'+countActivite);
			activite_input.setAttribute('value',activiteValue);
			tr.appendChild(activite_input);
			//nombre
			const td3 = document.createElement('td');
			td3.textContent=nombreValue;
			tr.appendChild(td3);
			//input
			const nombre_input = document.createElement('input');
			nombre_input.setAttribute('type','hidden');
			nombre_input.setAttribute('name','nombre'+countActivite);
			nombre_input.setAttribute('value',nombreValue);
			tr.appendChild(nombre_input);
			//button supprimer
			let boutonSupprimer = document.createElement("button");
    		boutonSupprimer.setAttribute('class', 'btn btn-dark');
    		boutonSupprimer.innerText = "Supprimer";
			const td4 = document.createElement('td');
			td4.textContent=boutonSupprimer;
			boutonSupprimer.setAttribute('onclick', 'supprimerLigneActivite(this)');
			tr.appendChild(boutonSupprimer);
			//
			//incrementer
			taille_inputActivite.setAttribute('value',countActivite+1);
			countActivite++;
			tbody.appendChild(tr);
		});
		function supprimerLigneAliment(td) {
    		var tr = td.parentNode; // Récupérer le parent <tr> du <td>
    		tr.remove(); // Supprimer la ligne complète
			countAliment = countAliment-1;
			taille_inputAliment.setAttribute('value',countAliment);
		}
		function supprimerLigneActivite(td) {
    		var tr = td.parentNode; // Récupérer le parent <tr> du <td>
    		tr.remove(); // Supprimer la ligne complète
			countActivite = countActivite-1;
			taille_inputActivite.setAttribute('value',countActivite);
		}

	</script>
</body>
</html>

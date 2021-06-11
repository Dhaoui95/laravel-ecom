@extends('main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
	<style>
		.col-sm-4{
			padding-top: 0px;
			margin-top: 20px;
			height: 100px;
			width: 10px;
		}
		.file-field.big-2 .file-path-wrapper {
height: 3.7rem; }
.file-field.big-2 .file-path-wrapper .file-path {
height: 3.5rem; }

	</style>


	
<section id="cart_items">
	<div class="container">
	<form action="{{ route('ajout') }}" method="POST"  enctype="multipart/form-data">
		@csrf
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  
			  <li class="active">Annonce <h3>Enchere</h3></li>
			</ol>
		</div><!--/breadcrums-->

	<!--/checkout-options-->

		<div class="register-req">
			<p>S'il vous plait remplissez le formulaire pour l'ajout de votre produit</p>
		</div><!--/register-req-->

		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-3">
					<div class="shopper-info">
						<p>Shopper Information</p><br>
						<div class="checkout-options">
							<ul class="nav">
				<li>
					<label><input type="checkbox" name="EtatProduit" id="EtatProduit" value="New"> New</label>
				</li>
				<li>
					<label><input type="checkbox" name="EtatProduit" id="EtatProduit" value="Occassion"> Occassion</label>
				</li>
				
			</ul>
		</div><br><br>
			<select type="text" name="typeProduit" id="typeProduit" class="form-control" >
							<option value="Type de produit"  >-- Type --</option>
							<optgroup label="Electromenager">
								<option value="climatiseur">Climatiseur</option>
								<option value="refrigerateur">refrigerateur</option>
								<option value="cuisiniere">cuisiniere</option>
								<option value="Hote">Hote</option>
								<option value="Lave vaisselle">Lave vaisselle</option>
								<option value="Machine a laver">Machine a laver</option>
								<option value="Chaudiere">Chaudiere</option>
								<option value="Ventillateur">Ventillateur</option>
								<option value="four">four</option>
								<option value="Fritteuse">Fritteuse</option>
							  </optgroup>
							  <optgroup label="Informatique">
								<option value="Pc bureau">Pc bureau</option>
								<option value="Pc portable">Pc portable</option>
								<option value="Pc Gamer">Pc Gamer</option>
								<option value="Mac">Mac</option>
								<option value="Accesoires">Accesoires</option>
							  </optgroup>
							  <optgroup label="Telephone">
								<option value="Android">Android</option>
								<option value="iPhone">iPhone</option>
								<option value="Telephone portable">Telephone portable</option>
								<option value="Accesoires">Accesoires</option>
							  </optgroup>
							  <optgroup label="TV/SON">
								<option value="TV LED">TV LED</option>
								<option value="Meuble Tv">Meuble Tv</option>
								<option value="Home cinema">Home cinema</option>
								<option value="video projecteur">video projecteur</option>
								<option value="Accesoires">Accesoires</option>
							  </optgroup>
							
						</select><br><br>
						
						<select type="text" name="marque" id="marque" class="form-control">
							<option value="Maruqe">-- Marque --</option>
							<option value="Samsung"> Samsung</option>
							<option value="LG">LG</option>
							<option value="Condor">Condor</option>
							<option value="Hwuawi">Hwuawi</option>
							<option value="Oppo">Oppo</option>
							<option value="Apple">Apple</option>
							<option value="asus">asus</option>
							<option value="acer">acer</option>
							<option value="MSI">MSI</option>
							<option value="lenovo">lenovo</option>
							<option value="Bio Luxe">Bio Luxe</option>
							<option value="whirlpool">whirlpool</option>

							
						</select>
						<br>
						
					</div>
				</div>
				<div class="col-sm-5 clearfix">
					<div class="bill-to">
						<p>type de vente</p>
						<div class="form-one">
								<select type="text" name="duree" id="duree" class="form-control">
									<option >-- Duree utilisation --</option>
									<option value="< 1 mois">Moins 1 mois</option>
									<option value="< 1 mois">Moins 6 mois</option>
									<option value=">6 mois">Plus 6 mois</option>
									<option value="> 1 ans">Plus 1 ans</option>
									<option value="Jamais servi">Jamais servi</option>
									
								</select><br>
								<input type="tel" placeholder="Numero de serie" maxlength="16" minlength="6" name="numSerie" id="numSerie" class="form-control"><br>
								<input type="text" placeholder="Email*" name="mail" id="mail" class="form-control" required><br>
								<input type="tel" id="phone" name="phone" placeholder="Phone" class="form-control" required> <br>                              
								<input type="text" placeholder="Nom *" name="nom" id="nom" class="form-control" required><br>
								
								<input type="text" placeholder="prenom *"  name="prenom" id="prenom" class="form-control" required><br>
								<input type="text" placeholder="Address *" name="adresse" id="adresse" class="form-control" required><br>
								
						</div>
						<div class="form-two">
								<input type="tel" maxlength="5" minlength="4" name="postal" id="postal" placeholder="Zip / Postal Code *" class="form-control" required><br>
								<select name="region" id="region" class="form-control" required><br>
									<option>-- Region --</option>
									<option value="Sousse">Sousse</option>
									<option value="Nebel">Nebel</option>
									<option value="Tunis">Tunis</option>
									<option value="Sfax">Sfax</option>
									<option value="Monastir">Monastir</option>
									<option value="Kairouan">Kairouan</option>
									<option value="Gaabes">Gabes</option>
									<option value="Bizerte">Bizerte</option>
								</select><br>
								<select data-type="text" name="payment" id="payment" class="form-control" required><br>
									<option>-- Type d'achat --</option>
									<option value="Poste">Poste</option>
									<option value="Livraison">Livraison</option>
									<option value="carte bancaire">carte bancaire</option>
									
								</select><br>
								
								<label for="currency-field">A partie de :</label><br>
								<input type="text" name="montant" id="montant"  value="" data-type="currency" placeholder="10.000.000 Dt">
								<div class="col-sm-12">
								<div class="order-message">
									<p>Description</p>
									<textarea name="message" id="message"  placeholder="Description de votre produit " style="margin-right:25px;height:150px" class="form-control" style="height: 180px;width:200px;" rows="3"></textarea>
									
								</div>
								</div>
								
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="input-group hdtuto control-group lst increment" style="width: 400px;" >
						<input type="file" name="photo[]" class="myfrm form-control" style="width: 400px;">
						<div class="input-group-btn" style="width: 400px;"> 
						  <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
						</div>
					  </div>
					  <div class="clone hide" style="width: 500px;">
						<div class="hdtuto control-group lst input-group" style="width: 400px;margin-top:10px">
						  <input type="file" name="photo[]" class=" form-control" style="width: 400px;">
						  <div class="input-group-btn" style="width: 400px;"> 
							<button class="btn btn-danger"  type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
						  </div>
					    </div>
					  </div>
				  
					  <button class="btn btn-primary" type="submit" value="Poster" style="width: 400px;margin-top:10px">Poster</button>
					  <a href="home" type="button" class="btn btn-secondary" style="width: 400px;"">Quitter</a>
					  
			    </div>
			</div>
		</div>
	</form>		
</div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>
@if(Session::has('success'))
<script>
	toastr.success("{!! Session::get('success') !!}");
</script>
@endif
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto control-group lst").remove();
      });
    });
</script>




	
	
    @endsection
	
	


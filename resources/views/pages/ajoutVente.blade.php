<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>

    <meta name="keywords" content="wizard, bootstrap wizard, creative tim, long forms, 3 step wizard, sign up wizard, beautiful wizard, long forms wizard, wizard with validation, paper design, paper wizard bootstrap, bootstrap paper wizard">
    <meta name="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Paper Bootstrap Wizard by Creative Tim">
    <meta itemprop="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Paper Bootstrap Wizard by Creative Tim">
    <meta name="twitter:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Paper Bootstrap Wizard by Creative Tim | Free Boostrap Wizard" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/paper-bootstrap-wizard/wizard-list-place.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg" />
    <meta property="og:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors." />
    <meta property="og:site_name" content="Creative Tim" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
	
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
    <!-- Google Tag Manager -->
	<!--header-->
	
</head>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="images/home/devices.png" alt="" style="width: 120px;heigth:120px;"/></a>
                    </div>
                   
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                        
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Pannier</a></li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="avatar avatar-48 img-circle" href="#" role="button" style="padding-right: 2cm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="images/{{ Auth()->user()->avatar }}" height="40px" width="40px" alt=""  class="avatar avatar-48 img-circle">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                 </a>
                                 
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.html" class="active">Home</a></li> 
                            <li class="dropdown"><a href="#">Consulter<i class="fa fa-angle-down"></i></a>
                               
                            </li> 
                            <li><a href="#">About</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</h<!--/header-->
	<body>
        
		<!-- Google Tag Manager (noscript) -->
	
	<!-- End Google Tag Manager (noscript) -->
	<div class="image-container set-full-height" style="background-color: rgb(233, 177, 151)">
	    <!--   Creative Tim Branding   -->
	    <a href="https://demos.creative-tim.com/paper-kit" class="made-with-pk">
			<div class="brand">Elek</div>
			<div class="made-with">Vente with <strong>Eelectroniks</strong></div>
		</a>
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
                        <form action="{{route('postVente')}}" method="POST" enctype="multipart/form-data">
		                <!--        You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red"       -->
                                {{ csrf_field() }}
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">Annonce Vente</h3>
		                        	<p class="category">Formulaire a remplir s'il vous plait</p>
		                    	</div>
								<div class="wizard-navigation">
									<div class="progress-with-circle">
									    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 10%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#location" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Location
											</a>
                                        </li>
                                        
			                            <li>
											<a href="#type" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-direction-alt"></i>
												</div>
												Type
											</a>
										</li>
			                            <li>
											<a href="#facilities" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-panel"></i>
												</div>
												Facilities
											</a>
										</li>
			                            <li>
											<a href="#description" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-comments"></i>
												</div>
												Comments
											</a>
                                        </li>
                                        <li>
											<a href="#photos" data-toggle="tab">
												<div class="icon-circle">
													<i class="fa fa-camera-retro fa-2x" style="position:initial"></i>
												</div>
												Photos
											</a>
										</li>
                                        
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="location">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h5 class="info-text"> Let's start with the basic details</h5>
		                            		</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Adresse</label>
		                                        	<input type="text" class="form-control" id="exampleInputEmail1" name="adresse" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group">
		                                            <label>Region</label><br>
		                                            <select name="region" class="form-control">
                                                        <option>-- Region --</option>
                                                        <option value="Sousse">Sousse</option>
                                                        <option value="Nebel">Nebel</option>
                                                        <option value="Tunis">Tunis</option>
                                                        <option value="Sfax">Sfax</option>
                                                        <option value="Monastir">Monastir</option>
                                                        <option value="Kairouan">Kairouan</option>
                                                        <option value="Gaabes">Gabes</option>
                                                        <option value="Bizerte">Bizerte</option>
		                                            </select>
		                                        </div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label >Type Produit</label>
		                                        	<select class="form-control" name="typeProduit">
														<option value="climatiseur">--Type Produit--</option>
			                                            <optgroup label="Electromenager" >
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
                                                        
                                                    </select><br>
                                                    <label>Marque Produit</label>
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
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group">
													<label>Num Postal</label>
		                                        	<div class="input-group">
		                                            	<input type="tel" maxlength="5" minlength="4" name="postal" id="postal" placeholder="Zip / Postal Code *" class="form-control" >
		                                            	<span class="input-group-addon"></span>
													</div>
													<label>Mail</label>
		                                        	<div class="input-group">
		                                        	<input type="text" placeholder="Email*" name="mail" id="mail" class="form-control"><br>
													<span class="input-group-addon"></span>
													</div>
		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="type">
		                                <h5 class="info-text">Quelle est l'etat de votre produit ?  </h5>
		                                <div class="row">
		                                    <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="col-sm-4 col-sm-offset-2">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="EtatProduit" value="Nouveau">
		                                                <div class="card card-checkboxes card-hover-effect">
															<p>Nouveau</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="EtatProduit" value="Occasion">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="glyphicon glyphicon-credit-card" style="background-position: center;position: absolute"></i>
															<p>Occasion</p><i class="glyphicon glyphicon-credit-card"></i>
		                                                </div>
													</div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="facilities">
		                                <h5 class="info-text">Précisez encore plus . </h5>
		                                <div class="row">
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Duree de votre utilisation ?</label>
		                                        	<select type="text" name="duree" id="duree" class="form-control">
														<option >-- Duree utilisation --</option>
														<option value="< 1 mois">Moins 1 mois</option>
														<option value="< 1 mois">Moins 6 mois</option>
														<option value=">6 mois">Plus 6 mois</option>
														<option value="> 1 ans">Plus 1 ans</option>
														<option value="Jamais servi">Jamais servi</option>
														
													</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Prix</label>
		                                        	<div class="input-group">
		                                            	<input type="text" class="form-control" name="montant" placeholder="Votre prix">
		                                            	<span class="input-group-addon">DT</span>
													</div>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Votre numero de telephone ?</label>
		                                        	<input type="tel" id="phone" name="phone" placeholder="Phone" class="form-control"> 
												</div>
												<div class="form-group">
		                                        	<label>Type de payement ?</label>
		                                        	<select data-type="text" name="payment" id="payment" class="form-control" >
														<option>-- Type d'achat --</option>
														<option value="Poste">Poste</option>
														<option value="Livraison">Livraison</option>
														<option value="carte bancaire">carte bancaire</option>
														
													</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Numero de serie</label>
		                                        	<input type="tel" placeholder="Numero de serie" maxlength="16" minlength="6" name="numSerie" id="numSerie" class="form-control">
												</div>
												<div class="form-group">
													<!--<label for="sel1" >Quantite :</label>
													<select class="form-control" id="sel1" name="quantity">
													  <option value="1">1</option>
													  <option value="2">2</option>
													  <option value="3">3</option>
													  <option value="4">4</option>
													</select>-->
												  </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h5 class="info-text"> Envoyer nous une description. </h5>
		                                    <div class="col-sm-6 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>Place description</label>
		                                            <textarea class="form-control" placeholder="" name="message" id="message rows="15"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                        <div class="form-group">
		                                            <label>Example</label>
		                                            <p class="description">"C'est un excellent appareil en trés bon état qui appartenait a ma fille tres bien entretenue..."</p>
		                                        </div>
		                                    </div>
		                                </div>
									</div>
									<div class="tab-pane" id="photos">
		                                <div class="row">
		                                    <h5 class="info-text"> Placez vos photos ici. </h5>
		                                    <div class="col-sm-6 col-sm-offset-1">
		                                        <div class="input-group hdtuto control-group lst increment" style="width: 400px;" >
													<input type="file" name="photo[]" class="myfrm form-control" style="width: 400px;" multiple>
													<div class="input-group-btn" style="width: 400px;"> 
													  <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
													</div>
												  </div>
												  <div class="clone hide" style="width: 500px;">
													<div class="hdtuto control-group lst input-group" style="width: 400px;margin-top:10px">
													  <input type="file" name="photo[]" class=" form-control" style="width: 400px;" multiple>
													  <div class="input-group-btn" style="width: 400px;"> 
														<button class="btn btn-danger"  type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
													  </div>
													</div>
												  </div>
		                                    </div>
		                                    
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
										
										<button class="btn btn-finish btn-fill btn-danger btn-wd" type="submit" value="Finish" style="width: 50px;">Finish</button>
									</div>

	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
	                                <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

		
		
	</div>



	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
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
</html>

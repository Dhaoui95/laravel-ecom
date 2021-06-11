<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
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
                        <a href=""><img src="images/home/devices.png" alt="" style="width: 120px;heigth:120px;"/></a>
                    </div>
                   
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        @php
                        $total = App\Pannier::all()->where('user_ip',request()->ip())->sum(function($t){
                          return  $t->montant*$t->qty;
                        });
                        $quantite = App\Pannier::all()->where('user_ip',request()->ip())->sum('qty'); 
                        $wishs= App\Wishlist::all()->where('user_ip',request()->ip())->sum('qty');
                            
                            
                        @endphp
                        <ul class="nav navbar-nav">
                            
                            <li><a href="{{url('account',Auth()->user()->id)}}"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="{{url('addWishlist')}}"><img src="https://img.icons8.com/plasticine/100/000000/like--v3.png" height="50px" width="40px"/>{{$wishs}}</a></li>
                            <li><a href="{{url('pannierView')}}">{{$quantite}}<i class="fa fa-shopping-cart"></i> Pannier :DT {{$total}}</a></li>
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
                        <?php if (Auth::user()->userType=='admin') {?> 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="avatar avatar-48 img-circle" href="#" role="button" style="padding-right: 2cm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="/images/{{Auth()->user()->avatar }}" height="40px" width="40px" alt=""  class="avatar avatar-48 img-circle">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                 </a>
                                 
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('dashboard') }}
                                        </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                      <?php  }else {?>
                          
                    
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="avatar avatar-48 img-circle" href="#" role="button" style="padding-right: 2cm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="/images/{{Auth()->user()->avatar }}" height="40px" width="40px" alt=""  class="avatar avatar-48 img-circle">
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
                            <?php }?>
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
                            <li><a href="{{url('/index')}}" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Consulter<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="listeVente">Ventes</a></li>
                                    <li><a href="listeProduit">Encheres </a></li> 
                                   
                                </ul>
                            </li> 
                            <li class="dropdown"><a href="#">Annoncer<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('ajoutVente')}}">Vente</a></li>
                                    <li><a href="{{url('ajout')}}">Enchere</a></li>
                                </ul>
                            </li> 
                            <li><a href="404.html">About</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
               @include('partials._search')
             
            </div>
        </div>
    </div><!--/header-bottom-->
</header>
</header>
<!--/header-->
@yield('nav')
@extends('main')
@section('content')
<section>
    <div class="container">
        @if (session('wishDelete'))
        <div class="alert alert-danger" role="alert">
        {{session()->get('wishDelete')}}
      </div>
      @endif
            
        
        <div class="row">
<div class="col-sm-9">
    <div class="blog-post-area">
        <h2 class="title text-center">Produit Favoris</h2>
        <?php
            if ($wishlists->isEmpty()) { ?>
                                  <h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif"> desole pas de produit ajoute</h4>   
                
            
        <?php } else {?>

        @foreach ($wishlists as $wishlists)
       
        <div class="single-blog-post">
            
            <h3>{{$wishlists->typeProduit}}</h3>
            <h5>{{$wishlists->marque}}</h5>
            <div class="post-meta">
                <ul>
                   
                    <li><i class="fa fa-user"></i> {{$wishlists->user_name}}</li>
                    <li><i class="fa fa-clock-o"></i>{{date('H:i',strtotime($wishlists->created_at))}}</li>
                    <li><i class="fa fa-calendar"></i> {{date('d M Y',strtotime($wishlists->created_at))}}</li>
                </ul>
                <span>
                   <h4 style="color: orange">{{$wishlists->EtatProduit}}</h4>
                </span>
            </div>
            <a href="">
                <img src="/postImage/{{($wishlists->image)}}" alt=""  height="250px" width="50px">
            </a>
            <h4>
                {{($wishlists->message)}}</h4>
          
            <div class="pager-area">
                <ul class="pager pull-right">
                    <li><button type="submit" class="fad fa-bags-shopping">Passer a la commande</button></li>
                   
                </ul>
                <ul class="pager pull-left">
                    
                    <li><a href="{{url('wishlist/delete/'.$wishlists->id)}}" >supprimer</a></li>
                    
                </ul>
            </div>
        </div>
    
        @endforeach
        <?php } ?>
    </div><!--/blog-post-area-->

    

   

   <!--Comments-->
    
   
</div>
        </div>
        
    </div>
</section>
@endsection
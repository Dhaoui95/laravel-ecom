@extends('main')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/comment.css">

<script src="assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@if (session('pannier'))
<div class="alert alert-success" role="alert">
    {{session()->get('pannier')}}
  </div>
    
@endif
@if (session('commentaire'))
<div class="alert alert-success" role="alert">
    {{session()->get('commentaire')}}
  </div>
    
@endif


<section>
    
    @foreach ($vente as $vente)
        
    
    <div class="container">
        <div class="row">
            <div class="post" data-postid="{{$vente->id}}">
            
         <div class="col-sm-9 padding-right">
             <div class="product-details"><!--product-details-->
                 <div class="col-sm-5">
                  <div class="view-product">
                <img src="/postImage/{{json_decode($vente->image)[0]}}"  alt="" />
                
                </div>
            <div id="similar-product" class="carousel slide" data-ride="carousel">
                
                  <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            @foreach (json_decode($vente->image) as $image)
                                
                            
                            <img src="/postImage/{{$image}}"  alt="" style="position: initial"/>
                            @endforeach
                                
                            
                        
                        </div>
                      
                        
                    </div>

                  <!-- Controls -->
                  <a class="left item-control" href="#similar-product" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="right item-control" href="#similar-product" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                  </a>
            </div>

        </div>
        <div class="col-sm-7">
            <div class="product-information">
            <h1>{{$vente->EtatProduit}}</h1><!--/product-information-->
                <img src="" class="newarrival" alt="" />
            <h2>{{$vente->typeProduit}}</h2>
            <p>{{$vente->marque}}</p>
                
                <span>
                <span>Prix : {{$vente->montant}} Dinars</span><br>
                <label style="align-items: center"><h5 style="color: orange;">Methode d'achat:</h5><h1>{{$vente->payment}}</h1></label>
                    
                        
                        <input type="hidden" name="montant" value="{{$vente->montant}}">
                        <input type="hidden" name="typeProduit" value="{{$vente->typeProduit}}">
                        <form action="{{url('add/to_cart/'.$vente->id)}}" method="POST">
                            @csrf
                    <input name="montant" class="btn btn-fefault cart" type="hidden" value="{{$vente->montant}}" >
                    <input name="image" class="btn btn-fefault cart" type="hidden" value="{{$vente->image}}" >
                        <button class="fa fa-shopping-cart" type="submit"></button>
                        Add to cart
                    </a>
                </form>
                
             
                </span>
            <p><i class="glyphicon glyphicon-map-marker"></i> <b>Region: </b>{{$vente->region}}</p>
            <p><i class="glyphicon glyphicon-earphone"></i> <b>Telephone: </b> {{$vente->phone}}</p>
                <p><i class="glyphicon glyphicon-home"></i> <b>Adresse: </b> {{$vente->adresse}}</p>
                <p><i class="glyphicon glyphicon-pushpin"></i> <b>Postal: </b>{{$vente->postal}}</p>
                <p><i class="glyphicon glyphicon-envelope"></i> <b>e-mail: </b>{{$vente->mail}}</p>
                <div class="interaction">
                    
                    <a href="{{url('likedVente/'.$vente->id.'/')}}"><i class="glyphicon glyphicon-heart" style="font-size: 3em;color: red">
                    </i><span class="like" > ({{$vente->like()->count()}})</span></a>
                    
                </div>
               

                 
                
            </div><!--/product-information-->
        </div>
    </div><!--/product-details-->
    
    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                
                <li class="active"><a href="" data-toggle="tab">Commenatires ({{$vente->comment()->count()}})</a></li>
            </ul>
        </div>
            <div class="tab-pane fade active in" id="reviews" >
                <div class="col-sm-12">
                    <ul>
                    <li><img src="images/{{ $vente->user_avatar }}" height="40px" width="40px" alt=""  class="avatar avatar-48 img-circle"><a href="">{{$vente->user_name}} {{$vente->user_lastname}}</a></li>
                    <li><a href=""><i class="fa fa-clock-o"></i>{{date('H:i',strtotime($vente->created_at))}}</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>{{date('d M Y',strtotime($vente->created_at))}}</a></li>
                    </ul>
                <p>{{$vente->message}}</p>
                    <p><b>Intéressé(e) ...</b></p>
                    
                    
                    <form action="{{url('/comments',$vente)}}" method="POST">
                        @csrf
                        <textarea name="commentaire" id="content" @error('commentaire') is-invalid @enderror ></textarea>
                        @error('commentaire')
                        <div  class="invalid-feedback">{{$errors->first('commentaire')}}</div>
                            
                        @enderror
                        
                        <button type="submit" class="btn btn-default pull-left">
                            poser mon commenatire
                        </button>
                    </form>
                    <button type="submit"  class="btn btn-default pull-right"><a href="{{url('chat')}}"><i  class="glyphicon glyphicon-envelope"></i>
                        chat</a>
                    </button>
                    
                   
                </div>
               
            </div>
            
          
        </div>
        
        @foreach ($vente->comment()->latest()->get() as $comment)
        <div class="be-comment">
            <div class="be-img-comment">	
                    <img src="images/{{$comment->comment_avatar}}" alt="" class="be-ava-comment">
                
            </div>
            <div class="be-comment-content">
                
                    <span class="be-comment-name">
                        {{$comment->comment_name}}
                        </span>
                    <span class="be-comment-time">
                        <i class="fa fa-clock-o"></i>
                        {{$comment->created_at->diffForHumans()}}
                    </span>
    
                <p class="be-comment-text">
                    {{$comment->commentaire}}
                </p>
            </div>
            
           
                
            
        </div>
        @endforeach
    </div><!--/category-tab-->
    

</div>
</div>
            </div>
           
        </div>
       @endforeach
</section>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    
@endsection
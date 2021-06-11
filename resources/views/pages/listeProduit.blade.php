@extends('main')
@section('content')
<link rel="stylesheet" href="assets/vendor/sweetalert2/dist/sweetalert2.min.css">
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
<div class="col-sm-3">
<div class="left-sidebar">
    <h2>Category</h2>
    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        
        
            
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        Television
                    </a>
                </h4>
            </div>
            <div id="mens" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        <li><a href="#">tv</a></li>
                        <li><a href="#">Meuble tv</a></li>
                        <li><a href="#">Accesoires</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        Telephone
                    </a>
                </h4>
            </div>
            <div id="womens" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Huawei</a></li>
                        <li><a href="#">Oppo</a></li>
                        <li><a href="#">Iphone</a></li>
                        <li><a href="#">Tablette</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#Groselectromenager">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            Gros electromenager
                        </a>
                    </h4>
                </div>
                <div id="Groselectromenager" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li><a href="#">climatiseur</a></li>
                            <li><a href="#">lave vaisselle</a></li>
                            <li><a href="#">machine a laver</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#Informatique">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            Informatique
                        </a>
                    </h4>
                </div>
                <div id="Informatique" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li><a href="#">Pc</a></li>
                            <li><a href="#">PC bureau</a></li>
                            <li><a href="#">pc gamer</a></li>
                            <li><a href="#">Accesoires</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        
    
        
        
    </div><br><!--/category-products-->

    
    
    <div class="price-range"><!--price-range-->
        <h2>Price Range</h2>
        <div class="well text-center">
             <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
             <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
        </div>
    </div><!--/price-range-->
    
    

</div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    
                
                    <!--/brands_products-->
                    
                    <!--/price-range-->
                    
                    <!--/shipping-->
                </div>
            </div>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Latest From our Blog</h2>
                    @foreach ($posts as $post)
                        
                   
                    <div class="single-blog-post">
                        <h3>{{$post->typeProduit}}</h3>
                        <h5>{{$post->marque}}</h5>
                        <div class="post-meta">
                            <ul>
                                <li>{{$post->user_name}}  {{$post->user_lastname}}
                                <li><i class="fa fa-clock-o"></i> {{date('H:i',strtotime($post->created_at))}}</li>
                                <li><i class="fa fa-calendar"></i> {{date('d M Y',strtotime($post->created_at))}}</li>
                            </ul>
                            <span>
                               A partir de : {{$post->montant}}DT 
                            </span>
                        </div>
                        <a href="">
                            <img src="/postImage/{{json_decode($post->image)[0]}}"  alt="" />
                        </a>
                        <p>
                            <p><i class="glyphicon glyphicon-map-marker"></i> <b>Region: </b>{{$post->region}}</p>
                            <p><i class="glyphicon glyphicon-earphone"></i> <b>Telephone: </b> {{$post->phone}}</p>
                                <p><i class="glyphicon glyphicon-home"></i> <b>Adresse: </b> {{$post->adresse}}</p>
                                <p><i class="glyphicon glyphicon-pushpin"></i> <b>Postal: </b>{{$post->postal}}</p>
                                <p><i class="glyphicon glyphicon-envelope"></i> <b>e-mail: </b>{{$post->mail}}</p>
                                <div class="interaction">
                        </p>
                        <h2>
                          Description :  {{$post->message}}</h2>

                        
                        <div class="pager-area">
                            <ul class="pager pull-right">
                                <li><a href="#">Pre</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--/blog-post-area-->

                <div class="rating-area">
                    <a href="{{url('liked/'.$post->id.'/')}}"><img src="https://img.icons8.com/dusk/64/000000/facebook-like.png"/></a>
                    <ul class="tag">
                        <li>Methode de vente:</li>
                        <li>{{$post->payment}} <span></span></li>
                   <!--     <form action="{{url('add/to_cartPost/'.$post->id)}}" method="POST">
                            @csrf
                    <input name="montant" class="btn btn-fefault cart" type="hidden" value="{{$post->montant}}" >
                    <input name="image" class="btn btn-fefault cart" type="hidden" value="{{$post->image}}" >
                        <button class="fa fa-shopping-cart" type="submit"></button>
                        Add to cart
                    </a>
                </form>-->
                    </ul>
             
                </div><!--/rating-area-->

          

               <!--Comments-->
               <form action="{{url('/commentsP',$post)}}" method="POST">
               @csrf
               <textarea name="commentaire" id="content" @error('commentaire') is-invalid @enderror ></textarea>
                        @error('commentaire')
                        <div  class="invalid-feedback">{{$errors->first('commentaire')}}</div>
                            
                        @enderror
                        
                        <button type="submit" class="btn btn-default pull-left">
                            poser mon commenatire
                        </button>
                <div class="response-area">
                   <br> <hr>
                    <h2>Commenatires ({{$post->comment()->count()}})</h2>
                    @foreach ($post->comment()->latest()->get() as $comment)
                    <ul class="media-list">
                        <li class="media">
                            <div>
                            <a class="pull-left" href="#" >
                                <img src="images/{{$comment->comment_avatar}}"  alt="" style="height: 50px;width: 50px;" class="be-ava-comment">
                            </a>
                        </div>
                            <div class="media-body">
                                <ul class="sinlge-post-meta">
                                    <li><i class="fa fa-user"></i>{{$comment->comment_name}}</li>
                                    <li><i class="fa fa-clock-o"></i>  {{$comment->created_at->diffForHumans()}}</li>
                                    <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                                </ul>
                                <p>{{$comment->commentaire}}</p>
                                <a class="btn btn-primary"><i class="fa fa-reply"></i>reponse</a>
                            </div>
                        </li>
                        
                       
                    </ul>
                    @endforeach					
                </div>
            </form><!--/Response-area-->
                
                @endforeach<!--/Repaly Box-->
            </div>	
        </div>
    </div>
</section>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    
@endsection
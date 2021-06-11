@extends('main')
@section('content')
@if (session('pannierdelete'))
<div class="alert alert-danger" role="alert">
    {{session()->get('pannierdelete')}}
  </div>
    
@endif

<section id="cart_items">
    <div class="container">
        @if (session('pannierUpdate'))
        <div class="alert alert-success" role="alert">
        {{session()->get('pannierUpdate')}}
            
        @endif
        <div class="breadcrumbs">
           
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div>
        
            
        
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                @foreach ($panniers as $pannier)
                    
                
                <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="/postImage/{{json_decode($pannier->vente->image)[0]}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$pannier->vente->typeProduit}}</a></h4>
                            <p>{{$pannier->vente->marque}}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{$pannier->vente->montant}}</p>
                        </td>
                        
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <form action="{{url('pannier/update/quantite/'.$pannier->id)}}" method="POST">
                                        @csrf
                                    
                                  <input class="cart_quantity_input" type="text" value="{{$pannier->qty}}" size="2" name="qty"   min="1">
                                  <button type="submit" class="btn btn-secondary" >Update</button>
                                </form>
                                 </div>
                            </td>
                        <td class="cart_total">
                            <p class="cart_total_price"> DT {{$pannier->montant * $pannier->qty}}</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{url('pannier/delete/'.$pannier->id)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                   
                </tbody>
                @endforeach
            </table>
        </div>
        <div class="panel-footer">
            <div class="row text-center">
                <div class="col-xs-9">
                    <h4 class="text-right">Total <strong>DT {{$subtotal}}</strong></h4>
                </div>
                <div class="col-xs-3">
                    <button type="button" class="btn btn-success btn-block">
                       <a href="{{url('payment')}}"> Checkout</a>
                    </button>
                </div>
            </div>
        </div>
        
    </div>
</section> 
<div class="row">
    <div class="col-sm-6">
        <div class="chose_area">
            
            <ul class="user_info">
                
                
            <a class="btn btn-default check_out" href="listeVente">Revenir au shop</a>
        </div>
    </div>
   
</div>
    
@endsection
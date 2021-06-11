@extends('admin.layoutAd')

@section('contentAd')
@if (session('about'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('about')}}
                  </div>
                  @endif
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Service Utilities</h1>
    

    <!-- Content Row -->
    <div class="row">

        <!-- Grow In Utility -->
        <div class="col-lg-6">
            <form action="{{url('aboutStore')}}" method="POST">
                @csrf
            <div class="card position-relative">
                
                <div class="card-header py-3">
                   
                </div>
                <div class="card-body">
                  <h2>Service</h2>
                  <input type="text" class="form-control" placeholder="service" name="service_name">
                  <h2>Description</h2>
                  <textarea name="service_description" id="" class="form-control" placeholder="Description" cols="30" rows="10"></textarea>
                  
                
            </div>
            <button type="submit" class="btn btn-info">Save</button>
        </form>

        </div>

    </div>


</div>
          
    

@endsection
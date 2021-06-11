@extends('admin.layoutAd')

@section('contentAd')

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Modifier Profile!</h1>
                    </div>
                    <form action="{{url('role-register-update/'.$users->id)}}" method="POST" class="user">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="First Name" name="name" value="{{$users->name}}">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Last Name" name="lastname"  value="{{$users->lastname}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address" name="email"  value="{{$users->email}}">
                        </div>
                        <div class="form-group">
                           <label for="">Donnez un role</label>
                           <select name="userType" class="form-control" >
                               <option value="admin">Admin</option>
                               <option value="normal">normal</option>
                           </select>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Update</button>
                        <hr>
                        
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

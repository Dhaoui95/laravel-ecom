@extends('admin.layoutAd')

@section('contentAd')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @if (session('statusUpdate'))
                    <div class="alert alert-success" role="alert">
                        {{session()->get('statusUpdate')}}
                      </div>
                      @endif
                      @if (session('statusDelete'))
                      <div class="alert alert-danger" role="alert">
                          {{session()->get('statusDelete')}}
                        </div>
                        @endif
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Userr table</h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Last name</th>
                                            <th>E mail</th>
                                            <th>Avatar</th>
                                            <th>Type User</th>
                                            <th>EDIT</th>
                                            <th>DELETE</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      
                                @foreach ($users as $row)
                                    
                               
                                     
                                        <tr>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->lastname}}</td>
                                            <td>{{$row->email}}</td>
                                            <td><img src="/images/{{$row->avatar}}" style="height: 50px;width: 40px;" alt=""></td>
                                            <td>{{$row->userType}}</td>
                                            <td><a href="/role-edit/{{$row->id}}" ><i class="fas fa-user-edit" style="size: 7px"></i></a></td>
                                            <form action="{{url('role-delete/',$row->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <td><button type="submit" class="btn btn-danger"></button><i class="fas fa-user-minus"></i></a></td>
                                        </form>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
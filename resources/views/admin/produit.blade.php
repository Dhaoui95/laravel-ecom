@extends('admin.layoutAd')

@section('contentAd')


@if (session('statusDelete'))
<div class="alert alert-danger" role="alert">
    {{session()->get('statusDelete')}}
  </div>
  @endif

                @if (session('ajoutProd'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('ajoutProd')}}
                  </div>
                  @endif
                <form action="{{url('/add-product')}}" method="POST">
                    @csrf
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Produit:</label>
                              <input type="text" class="form-control" name="typeProduit" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Marque:</label>
                                <input type="text" class="form-control" name="marque" id="recipient-name">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Prix:</label>
                                <input type="text" class="form-control" name="montant" id="recipient-name">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Region:</label>
                                <select name="region" class="form-control" id="">
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
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">image:</label>
                                <input type="file" class="form-control" name="image" id="recipient-name">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Duree:</label>
                                <select name="duree" class="form-control" id="">
                                    <option value="< 1 mois">Moins 1 mois</option>
									<option value="< 1 mois">Moins 6 mois</option>
									<option value=">6 mois">Plus 6 mois</option>
									<option value="> 1 ans">Plus 1 ans</option>
									<option value="Jamais servi">Jamais servi</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Adresse :</label>
                                <input type="text" class="form-control" name="adresse" id="recipient-name">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">numero Serie:</label>
                                <input type="text" class="form-control" name="numSerie" id="recipient-name">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Payement:</label>
                                <input type="text" class="form-control" name="payment" id="recipient-name">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Postal:</label>
                                <input type="text" class="form-control" name="postal" id="recipient-name">
                              </div>
                             
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" name="mail" id="recipient-name">
                              </div>
                              <div class="form-group">
                                <label  class="col-form-label">EtatProduit:</label>
                                <select name="EtatProduit" class="form-control" id="">
                                    <option value="New">New</option>
                                    <option value="Occasion">Occasion</option>
                                </select>
                                
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Telephone:</label>
                                <input type="text" class="form-control" name="phone" id="recipient-name">
                              </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Description:</label>
                              <textarea class="form-control" name="message" id="message-text"></textarea>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                   
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Produit table</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">ADD</button>
                    
                   

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
                                            <th>Person</th>
                                            <th>Produit</th>
                                            <th>image</th>
                                            <th>Marque</th>
                                            <th>Prix(Dt)</th>
                                            <th>Email</th>
                                            <th>Etat Produit</th>
                                            <th>region</th>
                                            <th>Description</th>
                                            <th>numero serie</th>
                                            <th>postal</th>
                                            <th>adresse</th>
                                            <th>telephone</th>
                                            <th>EDIT</th>
                                            <th>DELETE</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      
                               
                                    @foreach ($vente as $vente)
                                        
                                    
                               
                                     
                                        <tr>
                                            <td><img src="/images/{{$vente->user_avatar }}" class="rounded" alt=""><h2>{{$vente->user_name}}</h2>{{$vente->user_lastname}}</td>
                                            <td>{{$vente->typeProduit}}</td>
                                            <td><img src="/postImage/{{$vente->image}}" style="border-radius: 40px 40px 0 0" ></td>
                                            <td>{{$vente->marque}}</td>
                                            <td>{{$vente->montant}}</td>
                                            <td>{{$vente->mail}}</td>
                                            <td>{{$vente->EtatProduit}}</td>
                                            <td>{{$vente->region}}</td>
                                            <td>{{$vente->message}}</td>
                                            <td>{{$vente->numSerie}}</td>
                                            <td>{{$vente->postal}}</td>
                                            <td>{{$vente->adresse}}</td>
                                            <td>{{$vente->telephone}}</td>
                                            
                                            <td><a href="#" ><i class="fas fa-user-edit" style="size: 7px"></i></a></td>
                                            <form action="{{url('role-prod',$vente->id)}}" method="POST">
                                                @csrf
                                                @method('GET')
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


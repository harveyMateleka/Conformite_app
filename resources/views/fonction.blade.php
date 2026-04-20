@extends('welcome')
@section('section_body')
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Fonction Utilisateur</h1>
                    </div>

                    <!-- Content Row -->
                 

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-7 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Mise à jour</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                        <div class="row">
                                    <div class="col-md-8">
                                       <div class="content">
                                           <form action="{{ route('route_fonction.store') }}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <label for="inputText" class="col-sm-4 col-form-label"></label>
                                                <div class="col-sm-8">
                                                     <label> Fonction</label></BR>
                                                    <input type="text" class="form-control" name="fonction" id="fonction" required placeholder="">
                                                    <input type="hidden" class="form-control" name="id_fonction" id="id_fonction" required placeholder="">
                                                </div>
                                            </div></BR>
                                             <div class="row mb-3">
                                                 <div class="col-md-4">
                                                 </div>
                                                <div class="col-md-8">
                                                    <button type="submit" class="btn btn-primary">Sauvegader</button>
                                                    <button type="submit" class="btn btn-danger">Annuler</button>
                                                </div>
                                                </div>
                                        </form>
                                       </div>
                                  
                                 </div>
                              </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-5 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Liste de Fonction</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                         <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       <tr>
                                            <th>id</th>
                                            <th>Fonction</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                              
                                    <tbody>
                                       
                                       @foreach ($fonction as $ligne )
                                       <tr>
                                        <td>
                                            {{ $ligne->id }}
                                        </td>
                                        <td>
                                            {{ $ligne->fonction }}
                                        </td>
                                        <td>
                                    <a href="#" data-id="{{ $ligne->id }}" class="btn btn-success btn-circle btn-sm  editfonction">
                                        <i class="fas fa-check"></i>
                                    </a>
                                        <a href="#" data-id="{{ $ligne->id }}" class="btn btn-danger btn-circle btn-sm deletefonction">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                            
                                        </td>
                                       </tr>
                                       @endforeach
                                  
                                    </tbody>
                                </table>
                            </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
               

                </div>
@endsection
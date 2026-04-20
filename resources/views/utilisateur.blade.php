@extends('welcome')
@section('section_body')
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Utilisateur</h1>
                    </div>

                    <!-- Content Row -->
                 

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-10 col-lg-10">
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
                                           <form action="{{ route('route_users.store') }}" method="POST">
                                            @if(session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}

                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                            @endif
                                            @csrf
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" name="name" class="form-control" placeholder="Entrer le nom" required>
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Entrer l'email" required>
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                </div>

                {{-- Fonction --}}
                <div class="mb-3">
                    <label class="form-label">Fonction</label>
                    <select name="fonction_id" class="form-control" required>
                        <option value="">-- Sélectionner une fonction --</option>
                        @foreach($fonctions as $fonction)
                            <option value="{{ $fonction->id }}">
                                {{ $fonction->fonction }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Boutons --}}
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
                        <div class="col-xl-10 col-lg-10">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Liste des Utilisateurs</h6>
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
                                            <th>name</th>
                                            <th>Email</th>
                                            <th>Fonction</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                              
                                    <tbody>
                                       
                                       @foreach ($users as $ligne )
                                       <tr>
                                        <td>
                                            {{ $ligne->id }}
                                        </td>
                                        <td>
                                            {{ $ligne->name }}
                                        </td>
                                        <td>
                                            {{ $ligne->email }}
                                        </td>
                                         <td>
                                            {{ $ligne->fonction->fonction}}
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
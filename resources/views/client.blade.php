@extends('welcome')
@section('section_body')
    <style>
        #kyc-score-display { font-size: 1.8em; font-weight: bold; padding: 10px; text-align: center; border-radius: 4px; margin-top: 15px; }
        #kyc-score-details { font-size: 0.9em; margin-top: 10px; color: #666; }
    </style>
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Client</h1>
                    </div>

                    <!-- Content Row -->
                 

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Information du client</h6>
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
                                    <div class="col-md-12">
                                       <div class="content">
                                           <form action="#" method="POST" id="mon_form_client">
                                            @if(session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}

                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                            @endif
                                            @csrf

                                            <div class="row">
                                                <div class="col-lg-4">
                                                        <label class="form-label">Nom de l'agent</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Entrer le nom" required value="{{ auth()->user()->name }}" readonly>
                                                </div>
                                                     <div class="col-lg-4">
                                                            <label class="form-label">Numéro du Dossier</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Entrer le nom" required value="{{ $code_dossier }}" readonly>
                                                    </div>

                                                    <div class="col-lg-4">
                                                            <label class="form-label">Categorie Client</label>
                                                            <select name="type_client" id="type_client" class="form-control">
                                                                <option value="0">---Choisir la categorie client</option>
                                                                 <option value="1">Physique Congolaise</option>
                                                                <option value="2">Physique Etrangère</option>
                                                                <option value="3">Moral Lucratif</option>
                                                                <option value="4">Moral non Lucratif</option>
                                                            </select>
                                                    </div>

                                            </div>
                <div id="affichage">


                </div></br>

                <div id="physique_congolais">
                        <div class="row">
                            <div class="col-md-4 mb-3"> 
                                <label>Noms Client</label> 
                                <input type="text" name="name" class="form-control" required> 
                            </div> 
                                <div class="col-md-4 mb-3"> 
                                    <label>Sexe</label> 
                                    <select name="sexe" class="form-control"> 
                                        <option value="">-- Choisir --</option> 
                                        <option value="M">Masculin</option> 
                                        <option value="F">Féminin</option> 
                                    </select> 
                                </div> 
                            <div class="col-md-4 mb-3"> 
                                <label>Etat civil</label>

                                <select name="etat_civil" class="form-control"> 
                                    <option value="">-- Choisir --</option> 
                                    <option value="M">Marié(e)</option> 
                                    <option value="C">Celibataire</option>
                                    <option value="C">Divorsé(e)</option> 
                                    <option value="V">Veuf(ve)</option> 
                                </select>
                            </div> 
                        </div> 
                           <div class="row">
                                    <div class="col-md-4 mb-3"> 
                                        <label>Adresse</label> 
                                        <input type="text" name="adresse" class="form-control"> 
                                    </div> 
                                    <div class="col-md-4 mb-3"> 
                                        <label>Téléphone</label> 
                                        <input type="text" name="telephone" class="form-control"> 
                                    </div> 
                                <div class="col-md-4 mb-3"> 
                                    <label>Profession</label> 
                                    <input type="text" name="profession" class="form-control"> 
                                </div> 
                              
                               
                           </div>
                             <div class="row">
                                    <div class="col-md-4 mb-3"> 
                                        <label>Secteur d'activité</label> 
                                        <input type="text" name="secteur_activite" class="form-control"> 
                                    </div>

                                    <div class="col-md-4 mb-3"> 
                                        <label>Piece d'identité</label> 
                                          <select name="pc_piece_fournie" class="form-control" id="pc_piece_fournie"> 
                                            <option value="-1">-- Choisir --20pt</option> 
                                            <option value="0">Pas de Piece d'identité</option> 
                                            <option value="Passport">Passport</option> 
                                            <option value="Cart-electeur">Carte d'electeur</option>
                                            <option value="Permis-de-conduire">Permis de conduire</option> 
                                        </select> 
                                    </div>

                                      <div class="col-md-4 mb-3"> 
                                        <label>Date expiration</label> 
                                        <input type="date" name="pc_date_exp_piece" class="form-control" id="pc_date_exp_piece"> 
                                    </div>
                           
                                </div>
                             
                        
                </div>

                  <div id="physique_etranger">
                        <div class="row">
                            <div class="col-md-4 mb-3"> 
                                <label>Noms Client</label> 
                                <input type="text" name="name_etra" class="form-control" required> 
                            </div> 
                                <div class="col-md-4 mb-3"> 
                                    <label>Sexe</label> 
                                    <select name="sexe_etra" class="form-control"> 
                                        <option value="">-- Choisir --</option> 
                                        <option value="M">Masculin</option> 
                                        <option value="F">Féminin</option> 
                                    </select> 
                                </div> 
                            <div class="col-md-4 mb-3"> 
                                <label>Etat civil</label>

                                <select name="etat_civil_etra" class="form-control"> 
                                    <option value="">-- Choisir --</option> 
                                    <option value="M">Marié(e)</option> 
                                    <option value="C">Celibataire</option>
                                    <option value="C">Divorsé(e)</option> 
                                    <option value="V">Veuf(ve)</option> 
                                </select>
                            </div> 
                        </div> 
                           <div class="row">
                                    <div class="col-md-4 mb-3"> 
                                        <label>Adresse</label> 
                                        <input type="text" name="adresse" class="form-control"> 
                                    </div> 
                                    <div class="col-md-4 mb-3"> 
                                        <label>Téléphone</label> 
                                        <input type="text" name="telephone" class="form-control"> 
                                    </div> 
                                <div class="col-md-4 mb-3"> 
                                    <label>Profession</label> 
                                    <input type="text" name="profession" class="form-control"> 
                                </div> 
                              
                               
                           </div>
                             <div class="row">
                                    <div class="col-md-4 mb-3"> 
                                        <label>Secteur d'activité</label> 
                                        <input type="text" name="secteur_activite" class="form-control"> 
                                    </div>

                                      <div class="col-md-4 mb-3"> 
                                        <label>Passeport Valide (Date Exp)</label> 
                                        <input type="date" name="pc_date_exp_pass" class="form-control" id="pc_date_exp_pass"> 
                                    </div>

                                    <div class="col-md-4 mb-3"> 
                                        <label>Visa/Permis de Séjour Valide (Date Exp):</label> 
                                        <input type="date" name="pe_date_exp_visa" class="form-control" id="pe_date_exp_visa"> 
                                    </div>
                           
                                </div>
                                 <div class="row">
                                     <div class="col-md-4 mb-3"> 
                                        <label>Soumis à la loi FATCA :</label> 
                                         <select name="pe_is_fatca" class="form-control"> 
                                            <option value="">-- Choisir --</option> 
                                            <option value="1">Oui</option> 
                                            <option value="0">Nom</option>
                                         </select>
                                    </div>

                                     <div class="col-md-4 mb-3"> 
                                        <label>Nationalité</label> 
                                        <input type="text" name="nationalite" class="form-control"> 
                                    </div>

                                 </div>
                             
                        
                </div>


                    <div id="moral_lucratif">
                        <div class="row">
                            <div class="col-md-4 mb-3"> 
                                <label>Denomition social</label> 
                                <input type="text" name="name" class="form-control" required> 
                            </div> 
                                <div class="col-md-4 mb-3"> 
                                    <label>Adresse Social</label> 
                                  <input type="text" name="adresse" class="form-control" required> 
                                </div> 
                                 <div class="col-md-4 mb-3"> 
                                    <label>Contact société</label> 
                                  <input type="text" name="telephone" class="form-control" required> 
                                </div> 
                         
                        </div> 
                           <div class="row">
                                    <div class="col-md-4 mb-3"> 
                                        <label>N° RCCM</label> 
                                        <input type="text" name="ml_rccm" class="form-control" id="ml_rccm"> 
                                    </div> 
                                    <div class="col-md-4 mb-3"> 
                                        <label>N° IDNAT</label> 
                                        <input type="text" name="ml_idnat" class="form-control" id="ml_idnat"> 
                                    </div> 
                                <div class="col-md-4 mb-3"> 
                                    <label>N° NIF</label> 
                                    <input type="text" name="nif" class="form-control" id="nif"> 
                                </div> 
                              
                               
                           </div>
                             <div class="row">
                                    <div class="col-md-5 mb-3"> 
                                        <label>Secteur d'activité</label> 
                                        <input type="text" name="secteur_activite" class="form-control"> 
                                    </div>
                           
                                </div>
                             
                        
                </div>
                








             
                
             

                <div id="moral_non">

                <div class="row">
                            <div class="col-md-6 mb-3"> 
                                <label>Dénomination (ASBL/ONG):</label> 
                                <input type="text" name="name" class="form-control" required> 
                            </div> 
                                <div class="col-md-6 mb-3"> 
                                    <label>N° Arrêté Ministériel/Reconnaissance:</label> 
                                  <input type="text" name="mnl_arrete" class="form-control" required> 
                                </div> 
                         
                        </div> 
                           <div class="row">
                                    <div class="col-md-6 mb-3"> 
                                        <label>Source de Financement (Détaillée):</label> 
                                        <input type="text" name="mnl_source_financement" class="form-control"> 
                                    </div> 
                           </div>
                           

                </div>

                  <div id="score_analyse">

                 </div>

                {{-- Email --}}
              

                {{-- Password --}}
             

                {{-- Fonction --}}
            

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

            <div id="kyc-score-display">Score KYC: 100/100</div>
            <div id="kyc-score-details">Base: 100 points. Facteurs de risque/documents manquants appliqués.</div>
            </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                      
                    </div>

                    <!-- Content Row -->
               

                </div>
                <Script>

                </Script>
@endsection

@section('scripts')
    <script type="text/javascript">

       

         $(document).ready(function(){
          let score=0;
          let today = new Date();
          today.setHours(0,0,0,0);
          let nbre_date_piece=0;
          let nbre_date_visa=0;
          let scoreDisplay = document.getElementById('kyc-score-display');
          let scoreDetail = document.getElementById('kyc-score-details');
           document.getElementById("physique_congolais").style.display = "none";
           document.getElementById("physique_etranger").style.display = "none";
           document.getElementById("moral_lucratif").style.display = "none";
           document.getElementById("moral_non").style.display = "none";
           
            $('#type_client').change(function(){
                
                        switch ($('#type_client').val()) {
                            case '1':
                                 document.getElementById("physique_congolais").style.display = "block";
                                 document.getElementById("physique_etranger").style.display = "none";
                                 document.getElementById("moral_lucratif").style.display = "none";
                                 document.getElementById("moral_non").style.display = "none";
                                 document.getElementById("mon_form_client").reset();
                                 $('#type_client').val("1");
                                break;
                            case '2':
                                 document.getElementById("physique_congolais").style.display = "none";
                                 document.getElementById("physique_etranger").style.display = "block";
                                 document.getElementById("moral_lucratif").style.display = "none";
                                 document.getElementById("moral_non").style.display = "none";
                                 document.getElementById("mon_form_client").reset();
                                 $('#type_client').val("2");
                                 break;
                                 case '3':
                                 document.getElementById("physique_congolais").style.display = "none";
                                 document.getElementById("physique_etranger").style.display = "none";
                                 document.getElementById("moral_lucratif").style.display = "block";
                                 document.getElementById("moral_non").style.display = "none";
                                  document.getElementById("mon_form_client").reset();
                                   $('#type_client').val("3");
                                    break;
                             case '4':
                                 document.getElementById("physique_congolais").style.display = "none";
                                 document.getElementById("physique_etranger").style.display = "none";
                                 document.getElementById("moral_lucratif").style.display = "none";
                                 document.getElementById("moral_non").style.display = "block";
                                document.getElementById("mon_form_client").reset();
                                 $('#type_client').val("4");
                                break;
                                default:
                                break;
                        }

            });

            $('#pc_piece_fournie').change(function(){
               if ($('#pc_piece_fournie').val()=='-1' || $('#pc_piece_fournie').val()=='0') {
                    score=0;
                }
            })
            
            $('#pc_date_exp_piece').change(function(){

             if ($('#pc_piece_fournie').val()!='-1' || $('#pc_piece_fournie').val()!='0') {
                    nbre_date_piece=(new Date($('#pc_date_exp_piece').val())-today)/(1000 * 60 * 60 * 24);
                    if (nbre_date_piece < 1){
                        score=0;
                    }
                    else if(nbre_date_piece <=100){
                        score=5;
                    }
                    else {
                        score=20;
                    }

                }

                document.getElementById("kyc-score-display").innerText ="Score KYC: " + score + "/100";
            });


            $('#pc_date_exp_pass').change(function(){

                   nbre_date_piece=(new Date($('#pc_date_exp_pass').val())-today)/(1000 * 60 * 60 * 24);
                    if (nbre_date_piece < 1){
                        score=0;
                    }
                    else if(nbre_date_piece <=100){
                        score=5;
                    }
                    else {
                        score=20;
                    }


                document.getElementById("kyc-score-display").innerText ="Score KYC: " + score + "/100";
            });

               
                  $('#pe_date_exp_visa').change(function(){
                     nbre_date_visa=(new Date($('#pe_date_exp_visa').val())-today)/(1000 * 60 * 60 * 24);

                    if (nbre_date_piece < 1 && nbre_date_visa < 1 || nbre_date_piece < 1 && nbre_date_visa > 1){
                         score=0;
                    }

                    else if(nbre_date_piece <=100){
                        score +=10;
                    }

                    else {
                        score=20; 
                    }
                    
                     document.getElementById("kyc-score-display").innerText ="Score KYC: " + score + "/100";
     
                  });
         });

         $('#ml_rccm').on('blur', function() {
            if ($('#ml_rccm').val()!='') {
                score=10; 
            }
            else{
                 score-=10; 
            }
            document.getElementById("kyc-score-display").innerText ="Score KYC: " + score + "/100";
         });

         
         $('#ml_idnat').on('blur', function() {
            if ($('#ml_rccm').val()!='' &&  $('#ml_idnat').val()!='') {
                score+=10; 
            }
            else{
                 score-=10; 
            }
            document.getElementById("kyc-score-display").innerText ="Score KYC: " + score + "/100";
         });

             $('#nif').on('blur', function() {
            if ($('#ml_rccm').val()!='' &&  $('#ml_idnat').val()!='' && $('#nif').val()) {
                score+=10; 
            }
            else{
                 score-=10; 
            }
            document.getElementById("kyc-score-display").innerText ="Score KYC: " + score + "/100";
         });
    </script>
@endsection
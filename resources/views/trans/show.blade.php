@extends('Dachboard.dach')

@section('content')
<div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title mb-0">Transporteur {{$transporteur->nom}}</p>
          <div class="table-responsive">
            <table class="table table-striped table-borderless">
              <thead>
                <tr>
                  
                </tr>  
              </thead>
              <tbody>
                <tr>
                  <td>Nom de transporteur</td>
                  <td class="font-weight-bold">{{$transporteur->nom}}</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
                <tr>
                  <td>Telephone</td>
                  <td class="font-weight-bold">{{ $transporteur->tel }}</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
                <tr>
                  <td>Numero de CIN</td>
                  <td class="font-weight-bold">{{ $transporteur->cin}}</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
                <tr>
                  <td>Matricule Fiscale</td>
                  <td class="font-weight-bold">{{ $transporteur->mat }}</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
                <tr>
                  <td>Zone</td>
                  <td class="font-weight-bold">{{ $transporteur->zone }}</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
                <tr>
                  <td>Véhicule</td>
                  <td class="font-weight-bold">{{ $transporteur->matricule }}</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
                <tr>
                  <td>Type Véhicule</td>
                  <td class="font-weight-bold">{{ $transporteur->type }}</td>
                  <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                </tr>
                <tr>
                    <td>Garantie</td>
                    <td class="font-weight-bold">{{ $transporteur->garntie }}</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                  </tr>
                  <tr>
                    <td>Montant de garantie</td>
                    <td class="font-weight-bold">{{ $transporteur->montant }}</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                  </tr>
                  <tr>
                    <td>Status de transporteur</td>
                    <td class="font-weight-bold">@if($transporteur->status== 0)
                        <span class="badge badge-warning">Active</span>
                        @elseif($transporteur->status == 1)
                        <span class="badge badge-dark">Inactive</span>
                       @endif </td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                  </tr>
                  <tr>
                    <td>Etat de Contrat</td></td>
                    <td class="font-weight-bold">@if($transporteur->contrat== 0)
                        <span class="badge badge-secondary">En attend</span>
                        @elseif($transporteur->contrat == 1)
                        <span class="badge badge-primary">En cours de traitement</span>
                        @elseif($transporteur->contrat == 2)
                        <span class="badge badge-danger">Rejeter</span>
                       
                       @endif  </td>
                    
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td></tr>
                       <tr>
                        <td>Bennes</td>
                        <td class="font-weight-bold"> @foreach ($transporteur->bennes as $item)
                            <span class="badge bg-secondary"> <li>{{ $item->nbenne }}</li></span>
                          @endforeach</td>
                        <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                      
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
     </div>
    </div>
  </div>
    
@endsection
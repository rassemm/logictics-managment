@extends('Dachboard.dach')

@section('content')
@toastr_css
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
        <div class="container-fluid">
          <div class="animated fadeIn">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card" style="border-radius: 10%">
                    
                		
                    <div class="d-flex justify-content-end mb-4">
                  </div>
                    <div class="card-body">
                      <div class="alert alert-success alert-link" role="alert">  <i class="far fa-table"></i>{{ __('liste des transporteurs') }} </div>

                      <div class="topright mb-3">
                        <a class="btn btn-primary" href="{{ route('trans.create') }}"> <i class="fa fa-plus"></i></a>
                        <a class="btn btn-danger" href="{{ route('indexx') }}"><i class="fas fa-file-export"></i></a>
                        {{-- <a class="btn btn-success " href="{{ route('exports') }}"><i class="far fa-file-excel"  ></i></a>
                        <a class="btn btn-danger " href="{{ route('exportPdf') }}"><i class="fas fa-download" id="ignorePDF"></i></a> --}}
                       
                         
                    <div class="pull-right">
                    
                                  <form action="{{ route('trans.index') }}" method="GET" role="search">
                  
                                      <div class="input-group pull-left" >
                                          <span class="input-group-btn mr-5 mt-1">
                                              <button class="btn btn-info" type="submit" title="Search projects">
                                                  <span ><i class="fa fa-search" aria-hidden="true"></i>
                                                  </span>
                                              </button>
                                          </span>
                                          <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
                                          <a href="{{ route('trans.index') }}" class=" mt-1">
                                              <span class="input-group-btn">
                                                  <button class="btn btn-danger" type="button" title="Refresh page">
                                                      <span ><i class="fa fa-cog" aria-hidden="true"></i></span>
                                                  </button>
                                              </span>
                                          </a>
                                      </div>
                                  </form>
                              </div>
                      
                      </div>
                        <table  class="table table-bordered table-striped table-hover datatable datatable-User" style="width:100%;" >
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Transporteur</th>
                                <th>Telephone</th>
                                <th>CIN /MAF</th>
                                <th>Zone</th>
                                <th>Matricule</th>
                                <th>Type</th>     
                                <th>Bennes</th>  
                                <th>Status</th>                          
                                <th>Etat de Contrat</th>                          
                                <th>Action</th>
                                
                              
                              </tr>
                            </thead>
                        <tbody>
                          @foreach($transporteurs as $transpoteur)
                            <tr>
                             
                              <td><strong>{{ $transpoteur->id}}</strong></td>
                              <td><strong>{{ $transpoteur->nom}}</strong></td>
                              <td><strong>{{ $transpoteur->tel}}</strong></td>
                              <td><strong>{{ $transpoteur->cin}}</strong></td>
                              <td><strong>{{ $transpoteur->zone}}</strong></td>
                               <td><strong>{{ $transpoteur->matricule}}</strong></td>
                              <td><strong>{{ $transpoteur->type}}</strong></td>
                              <td>
                                <ul>
                                  @foreach ($transpoteur->bennes as $item)
                                    <span class="badge bg-secondary"> <li>{{ $item->nbenne }}</li></span>
                                  @endforeach
                                  <ul>
                              </td>
                             
                              <td>@if($transpoteur->status== 0)
                                <span class="badge badge-warning">Active</span>
                                @elseif($transpoteur->status == 1)
                                <span class="badge badge-dark">Inactive</span>
                               @endif 
                        </td> 
                        <td>@if($transpoteur->contrat== 0)
                          <span class="badge badge-secondary">En attend</span>
                          @elseif($transpoteur->contrat == 1)
                          <span class="badge badge-primary">En cours de traitement</span>
                          @elseif($transpoteur->contrat == 2)
                          <span class="badge badge-danger">Rejeter</span>
                         
                         @endif  </td>
                              <td>
                               
                                <form method="POST" action="{{route('trans.destroy',  $transpoteur->id) }}"  >
                                  <a class="btn btn-warning" href="{{ route('afficher' ,  $transpoteur->id) }}"><i class="fas fa-eye"></i></a>

                                <a class="btn btn-info" href="{{ route('trans.edit',  $transpoteur->id) }}"><i class="fas fa-edit"></i></a>
                                @method('DELETE')
                                @csrf
                               <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                               
                           </form>
                              </td>
                           
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
                {{ $transporteurs->links() }} 
              </div>
            </div>
          </div>
        </div>
       
@endsection


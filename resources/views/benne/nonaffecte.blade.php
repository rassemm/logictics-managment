@extends('Dachboard.dach')

@section('content')

  
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-lg-3 col-3">
              <div class="topright">
              </div>
            </div>
          </div>
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="far fa-table"></i>{{ __('liste des bennes non affecte') }}
                		</div>
                    <div class="d-flex justify-content-end mb-4">
                  </div>
                    <div class="card-body">
                      <button onclick="window.print()">Print this page</button>
                        <table id="myTable" class="display expandable-table" style="width: 100%" >
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Numero de benne</th>
                                <th>Longeur</th>
                                <th>largeur</th>
                                <th>Hauteur</th>
                                <th>Remarque</th>                               
                                
                              </tr>
                            </thead>
                        <tbody>
                          @foreach ($bennes as $benne)
                            <tr>
                               <td><strong>{{ $benne->id}}</strong></td>
                              <td><strong>{{ $benne->nbenne}}</strong></td>
                              <td><strong>{{ $benne->long}}</strong></td>
                              <td><strong>{{ $benne->larg}}</strong></td>
                              <td><strong>{{ $benne->haut}}</strong></td>
                              <td><strong>{{ $benne->req}}</strong></td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script>
     $(document).ready(function(){
    $('#myTable').DataTable();
});
      </script>
@endsection




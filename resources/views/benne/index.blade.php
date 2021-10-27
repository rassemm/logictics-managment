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
              <div class="row">
                <div class="topleft">
                  
                </div>
              </div>
            </div>
          </div>
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="far fa-table"></i>{{ __('liste des bennes') }}
                		</div>
                    <div class="d-flex justify-content-end mb-4">
                  </div>
                    <div class="card-body">
                      <div class="topright mb-3">
                        <a class="btn btn-primary" href="{{ route('benne.create') }}"> <i class="fa fa-plus"></i></a>
                        <a class="btn btn-success " href=" {{ route('export') }}"><i class="far fa-file-excel"></i></a>
                        <a class="btn btn-danger " href="{{ route('generatePDF') }}"><i class="fas fa-download"></i></a>
                      </div>
                        <table id="example" class="table table-striped table-bordered" style="width:100%;" >
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Numero de benne</th>
                                <th>Longeur</th>
                                <th>largeur</th>
                                <th>Hauteur</th>
                                <th>Remarque</th>                               
                                <th>Action</th>
                          
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
                              <td>
                               
                                <form method="POST" action="{{route('benne.destroy',  $benne->id) }}"  >
                               
                                  <a class="btn btn-info" href="{{ route('benne.edit',  $benne->id) }}"><i class="fas fa-edit"></i></a>
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
          </div>
        </div>
        <script>
          @jquery
      @toastr_js
      @toastr_render
      </script>
@endsection


@section('javascript')

@endsection

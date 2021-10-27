@extends('Dachboard.dach')

@section('content')
  
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
        <div class="container-fluid">
          <div class="animated fadeIn">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="far fa-table"></i>{{ __('liste des transporteur') }}
                		</div>
                    <div class="d-flex justify-content-end mb-4">
                  </div>
                    <div class="card-body">
                      <div class="topright mb-3">
                        <a class="btn btn-primary" href="{{ route('trans.create') }}"> <i class="fa fa-plus"></i></a>
                        <a class="btn btn-success " href=""><i class="far fa-file-excel"></i></a>
                        <a class="btn btn-danger " href=""><i class="fas fa-download"></i></a>
                      </div>
                        <table class="display expandable-table" style="width: 100%" >
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
                                <th>Action</th>
                                <th></th>
                                <th></th>
                                <th></th>
                              
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
                              <td>
                               
                                <form method="POST" action="{{route('trans.destroy',  $transpoteur->id) }}"  >
                               
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
                {{ $transporteurs->links() }} 
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

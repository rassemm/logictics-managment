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
              <form  action="{{ route('benne.storeTransporteur') }}" method="POST">
                @csrf
                  <div class="card">
                    <div class="card-header">Affecte Benne</div>
                      <div class="card-body">
                        <div class="row">
                        <div class="col">
                          <select class="form-select form-select-lg mb-3 btn-success" aria-label=".form-select-lg example" name="transporteur_id" style="display: inline-block; ">
                              @foreach ($transporteurs as $item)
                              <option value="{{ $item->id }}">{{ $item->nom}}</option>
                              @endforeach
                              
                          </select>
                      </div>
                      <div class="col">
                          <select class="form-select form-select-lg mb-3 btn-primary" aria-label=".form-select-lg example" name="benne_id" style="display: inline-block; ">
                              @foreach ($bennes as $item)
                                  <option value="{{ $item->id }}">{{ $item->nbenne }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col">
                  <button class="btn btn-warning" type="submit" style="display: inline-block; " value="Affectée"><i class="fas fa-share-square"></i></button></div>
                </form>
                      </div>
                    </div>
                  </div>
                    
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
                        <table class="display expandable-table" style="width: 100%" >
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Transporteur</th>
                                <th>Numero de benne</th>
                                <th>Longeur</th>
                                <th>largeur</th>
                                <th>Hauteur</th>
                                <th>Remarque</th>
                              </tr>
                            </thead>
                        <tbody>
                          @foreach ($bennesAff as $benne)
                            <tr>
                             <td><strong>{{ $benne->id}}</strong></td>
                              <td><strong>{{ $benne->transporteur[0]->nom}}</strong></td>
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
          @jquery
      @toastr_js
      @toastr_render
      </script>
@endsection




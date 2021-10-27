@extends('Dachboard.dach')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card mt-auto">
          <img src="{{ asset('image/trans.jpg') }}" >
          <div class="weather-info">
            <div class="d-flex">
              <div>
                
              </div>
              <div class="ml-2">
                <h4 class="location font-weight-normal">Departement Logistique</h4>
                <h6 class="font-weight-normal">Siacm Agri</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card mt-auto">
          <img src="{{ asset('image/agri.jpg') }}" >
          <div class="weather-info">
            <div class="d-flex">
              <div>
                
              </div>
              <div class="ml-2">
                <h4 class="location font-weight-normal"></h4>
                <h6 class="font-weight-normal">Siacm Agri</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="row">
        <div class="col-md-4 mb-4 stretch-card transparent">
          <div class="card card-tale ">
            <div class="card-body" >
              <p class="mb-4">Totale Nombre de utilisateurs</p>
              <p class="fs-30 mb-2">{{ $users->count() }}</p>
              <p></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Total Nombre des Transporteurs</p>
              <p class="fs-30 mb-2">{{ $transporteurs->count() }}</p>
              <p></p>
            </div>
          </div>
        </div>
      
        <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Totale Nombre des Bennes</p>
              <p class="fs-30 mb-2">{{ $bennes->count() }}</p>
              <p></p>
          </div>
        </div>
        </div>
      </div>
   
    
@endsection
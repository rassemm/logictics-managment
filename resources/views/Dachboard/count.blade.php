@extends('Dachboard.dach')
@section('content')
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card position-relative">
      <div class="card-body">
        <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                  <div class="ml-xl-4 mt-3">
                  <p class="card-title">Detailed Reports</p>
                    <h1 class="text-primary">$34040</h1>
                    <h3 class="font-weight-500 mb-xl-4 text-primary">Lorem</h3>
                    <p class="mb-2 mb-xl-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque officiis, illum possimus eveniet iste neque magnam fuga, rem quibusdam consequatur dolorem beatae natus quasi molestias voluptatem! Odit et amet voluptas.</p>
                  </div>  
                  </div>
                <div class="col-md-12 col-xl-9">
                  <div class="row">
                    <div class="col-md-6 border-right">
                    <img src="{{ asset('image/trans.jpg') }}" style=" border-radius: 50%;" alt="" width="95%">
                    </div>
                    <div class="col-md-6 mt-3">
                      <canvas id="north-america-chart"></canvas>
                      <div id="north-america-legend"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                  <div class="ml-xl-4 mt-3">
                  <p class="card-title">Detailed Reports</p>
                    <h1 class="text-primary">$34040</h1>
                    <h3 class="font-weight-500 mb-xl-4 text-primary">Lorem</h3>
                    <p class="mb-2 mb-xl-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt exercitationem suscipit asperiores corrupti iure quas non at hic, ut perferendis ullam consequatur, ea, voluptatum aliquid dolorum. Earum est quod natus?</p>
                  </div>  
                  </div>
                <div class="col-md-12 col-xl-9">
                  <div class="row">
                    <div class="col-md-6 border-right">
                      <img src="{{ asset('image/agri.jpg') }}" width="95%" style=" border-radius: 50%;" >

                    </div>
                    <div class="col-md-6 mt-3">
                      <canvas id="south-america-chart"></canvas>
                      <div id="south-america-legend"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
    {{-- <div class="col-md-6 grid-margin stretch-card">
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
     
        <div class="card mt-auto">
          <img src="{{ asset('image/agri.jpg') }}" style=" border-radius: 50%;" >
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
    </div> --}}
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
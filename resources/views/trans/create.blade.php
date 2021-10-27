@extends('Dachboard.dach')

@section('content')
    <style>
        label abbr{
            position: relative;
            left: 1;
            color: red;
        }
    </style>

    <div class="container mt-5">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                  <i class="fa fa-align-justify"></i>{{ __('Transporteur') }}
                    </div>
                <div class="card-body">
        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <form  action="{{ route('trans.store') }}"   method="POST" enctype="multipart/form-data">

            @csrf
            <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                <label style="font-weight: 900;">Transporteur<abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="text"name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}"  id="nom" >

                <!-- Error -->
                @error('nom')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
            <div class="col-md-4">
            <div class="form-group">
                <label>Tel <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="number"name="tel" class="form-control  @error('tel') is-invalid @enderror" value="{{ old('tel') }}"  id="tel">

                <!-- Error -->
                @error('tel')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
            <div class="col-md-4">
            <div class="form-group">
                <label>  CIn/MAF <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="text" name="cin" class="form-control  @error('cin') is-invalid @enderror" value="{{ old('cin') }}"
                    id="cin">

                    @error('cin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>Zone<abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="text" class="form-control  @error('zone') is-invalid @enderror" value="{{ old('zone') }}" name="zone"
                    id="zone">

                    @error('zone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Matricule <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="text" class="form-control  @error('matricule') is-invalid @enderror" value="{{ old('matricule') }}" name="matricule"
                    id="matricule">

                    @error('matricule')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
            <div class="form-group">
                <label>Type Véhicule <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
              <input type="text" class="form-control  @error('type') is-invalid @enderror" value="{{ old('type') }}" name="type"
              id="type">


                    @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>Garantie<abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="text" class="form-control  @error('garntie') is-invalid @enderror" value="{{ old('garntie') }}" name="garntie"
                    id="garntie">

                    @error('garntie')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Montant de Garantie<abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="text" class="form-control  @error('montant') is-invalid @enderror" value="{{ old('montant') }}" name="montant"
                    id="montant">

                    @error('montant')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>Remarque <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <textarea class="form-control  @error('rq') is-invalid @enderror" value="{{ old('rq') }}"  placeholder="Entrer votre reqmarque" name="rq" id="description" id="summary-ckeditor" name="summary-ckeditor"  cols="30" rows="10"></textarea>

                    @error('rq')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
    <div class="row">
            <div class="col-md-6">
             
                <div class="col-md-6">
                    <button type="submit" name="send" class="btn btn-dark"><i class="fas fa-plus-circle"></i></button>
                </div>
                       </div>
                    </div>
                </div>
            </div>
        </form>
        <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fas fa-backward"></i></a>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection
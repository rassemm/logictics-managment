@extends('Dachboard.dach')

@section('content')
    <style>
        label abbr{
            position: relative;
            left: 1;
            color: red;
        }
    </style>
<div class="container">
    <div class="row">
    <div class="container mt-5">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                  <i class="fa fa-align-justify"></i>{{ __('Bennes') }}
                    </div>
                <div class="card-body">
        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <form  action="{{ route('benne.store') }}"   method="POST" enctype="multipart/form-data">

            @csrf
            <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                <label>Numéro de benne <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="text"name="nbenne" class="form-control @error('nbenne') is-invalid @enderror" value="{{ old('nbenne') }}"  id="nbenne" >

                <!-- Error -->
                @error('nbenne')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
            <div class="col-md-4">
            <div class="form-group">
                <label>Longeur <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="number"name="long" class="form-control  @error('long') is-invalid @enderror" value="{{ old('long') }}"  id="long">

                <!-- Error -->
                @error('long')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>
            <div class="col-md-4">
            <div class="form-group">
                <label> Largeur <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="text" name="larg" class="form-control  @error('larg') is-invalid @enderror" value="{{ old('larg') }}"
                    id="larg">

                    @error('larg')
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
                <label>Hauteur<abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="text" class="form-control  @error('haut') is-invalid @enderror" value="{{ old('haut') }}" name="haut"
                    id="haut">

                    @error('haut')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>Remarque <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <textarea  class="form-control  @error('req') is-invalid @enderror" value="{{ old('req') }}"  placeholder="Entrer votre reqmarque" name="req" id="description" id="summary-ckeditor" name="summary-ckeditor"  cols="30" rows="10"></textarea>

                    @error('req')
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
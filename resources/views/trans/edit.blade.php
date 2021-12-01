@extends('Dachboard.dach')
@section('content')
<div class="container">
    <div class="row">
    <div class="container mt-5">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card" style="border-radius: 7%">
                
                  
                    
                <div class="card-body">
                <div class="alert alert-warning alert-link" role="alert">   <i class="fa fa-align-justify"></i>{{ __('Transporteur') }}</div> 
        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <form  action="{{ route('trans.update',$transporteur->id) }}"   method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
             <div class="col-md-4">
               <div class="form-group">
                <label>Transporteur<abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
                <input type="text"name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{$transporteur->nom}}"  id="nom" >

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
                <input type="number"name="tel" class="form-control  @error('tel') is-invalid @enderror" value="{{$transporteur->tel}}"  id="tel">

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
                <input type="text" name="cin" class="form-control  @error('cin') is-invalid @enderror" value="{{$transporteur->cin}}"
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
                <input type="text" class="form-control  @error('zone') is-invalid @enderror"  value="{{$transporteur->zone}}" name="zone"
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
                <input type="text" class="form-control  @error('matricule') is-invalid @enderror"  value="{{$transporteur->matricule}}" name="matricule"
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
            <div class="col"></div>
            <div class="form-group">
                <label>Type Véhicule <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
              <input type="text" class="form-control  @error('type') is-invalid @enderror"  value="{{$transporteur->type}}" name="type"
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
                <input type="text" class="form-control  @error('garntie') is-invalid @enderror"  value="{{$transporteur->garntie}}" name="garntie"
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
                <input type="text" class="form-control  @error('montant') is-invalid @enderror"  value="{{$transporteur->montant}}" name="montant"
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
                <textarea class="form-control  @error('rq') is-invalid @enderror" value="{{ old('rq') }}"  placeholder="Entrer votre reqmarque" name="rq" id="description" id="summary-ckeditor" name="summary-ckeditor"  cols="30" rows="10">{{ $transporteur->rq }} </textarea>

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
            <label>Etat de Conrat <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
            <select class="btn btn-sm btn-primary  dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name="contrat">
                <i class="mdi mdi-calendar"></i>
                <option value="0" @if($transporteur->contrat==0)selected @endif>En attend</option>
              <option value="1" @if($transporteur->contrat==1)selected @endif>En cours de traitement</option>
              <option value="2" @if($transporteur->contrat==2)selected @endif>Rejeter</option>
            </select>
        </div>
        <div class="col-md-6">
            <label>Status <abbr title="(obligatoire)" aria-hidden="true">*</abbr></label>
            <select class="btn btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name="status">
              <option value="0" @if($transporteur->status==0)selected @endif>Active</option>
              <option value="1" @if($transporteur->status==1)selected @endif>Inactive</option>
            </select>
        </div>
</div>
    <div class="row">
                <div class="col-md-6">
                    <button type="submit" name="send" class="btn btn-dark"><i class="fas fa-edit"></i></button>
                </div>
                       </div>
                       
                    </div>    </div>
                    </div>
                </div>
            </div>
        </form>
        <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fas fa-backward"></i></a>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
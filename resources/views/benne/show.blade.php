@extends('Dachboard.dach')

@section('content')
<div class="media">
    <img src="{{ asset('image/benne.jpg') }}" class="align-self-center mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0">{{ $benne->nbenne }}</h5>
      <h5 class="mt-0">{{ $benne->long }}</h5>
      <h5 class="mt-0">{{ $benne->larg }}</h5>
      <h5 class="mt-0">{{ $benne->haut }}</h5>
      <p>{{ $benne->req }}</p>
    </div>
  </div>
@endsection


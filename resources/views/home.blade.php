@extends('layouts.master')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <a style="color: #66EB9A" class="navbar-brand" href="#">WE FASHION</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('showSolde')}}">Produits</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('showFemme')}}">Categories</a>
          </li>
      </ul>
    </div>
</nav>
<a type="button" href="#">Nouveau</a>
@endsection

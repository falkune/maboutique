@extends('layouts.master')


@section('title')
  Page des produit 
@endsection

@section('content')

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <a style="color: #66EB9A" class="navbar-brand" href="#">WE FASHION</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('showSolde')}}">Solde</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('showFemme')}}">Femme</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('showHomme')}}">Homme</a>
            </li>
        </ul>
    </div>
  </nav>

  <div id="produits">

    <div>
      <h1>Produits</h1>
    </div>

    <section id="myproducts">

      @foreach($products as $product)

        <article >
        
          <section class="container">
            <section>

              <a href="{{route('showProduct', $product->id)}}">
                <img src="{{ asset('images/' . $product->url_image ) }}"/>
              </a>
                
            </section>
          </section>
          <div>
            <div><a href="{{route('showProduct', $product->id)}}">{{$product->Title}}</a></div>
            <span>{{$product->Price}}</span>
          </div>

        </article>

      @endforeach
      
    </section>

    <div id="navigation">
      {{$products->links()}}
    </div>

  </div>

  <!-- Footer -->
  <footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

          <ul class="list-unstyled">
            <li>
              <p>
                <a href="#!">Mentions légales</a>
              </p>
            </li>
            <li>
              <p>
                <a href="#!">Presse</a>
              </p>
            </li>
            <li>
              <p>
                <a href="#!">Fabrication</a>
              </p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Contact details -->
          <h5 class="font-weight-bold text-uppercase mb-4">service client</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#">Contactez-nous</a>
            </li>
            <li>
              <a href="#">Livraison & Retour</a>
            </li>
            <li>
              <a href="#">Conditions de vente</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

          <!-- Social buttons -->
          <h5 class="font-weight-bold text-uppercase mb-4">réseaux sociaux</h5>
          <a href="#" class="btn-floating btn-fb">
            Facebook : <i class="fab fa-facebook-f"></i>
          </a>
          <br>
          <a href="#" class="btn-floating btn-tw">
            instagram : <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
          </a>
          <br>
          <a href="#" class="btn-floating btn-gplus">
            inscrivez vous à la newsletter
          </a>
    
        </div>

      </div>
    </div>

  </footer>
  
@endsection
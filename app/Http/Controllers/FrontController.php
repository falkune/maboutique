<?php

namespace App\Http\Controllers;
use App\Product;
use App\Categorie;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    private $paginate = 5;

    public function index(){
        $products = Product::paginate($this->paginate);
        return view('front.index', ['products' => $products]);
    }

    public function show(int $id){
        $product = Product::find($id);
        return view('front.produit', ['product' => $product]);
    }

    public function solde(){
        $soldes = Product::where('Code', '=', 'solde')->paginate($this->paginate);
        return view('front.solde', ['soldes' => $soldes]);
    }

    public function homme(){
        $categories = Product::where('categorie_id', '=', 1)->paginate($this->paginate);
        return view('front.categorie', ['categories' => $categories]);
    }

    public function femme(){
        $categories = Product::where('categorie_id', '=', 2)->paginate($this->paginate);
        return view('front.categorie', ['categories' => $categories]);
    }
}

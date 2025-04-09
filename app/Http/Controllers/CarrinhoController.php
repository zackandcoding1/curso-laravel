<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use ShoppingCart;


class CarrinhoController extends Controller
{
    public function carrinhoLista() {
        $itens = ShoppingCart::content();
        dd($itens);
    }
}

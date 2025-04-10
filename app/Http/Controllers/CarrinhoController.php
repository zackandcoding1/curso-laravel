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

    public function adicionaCarrinho(Request $request) {
        ShoppingCart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
            'options' => [
                'image' => $request->img
            ]
        ]);
    }
}

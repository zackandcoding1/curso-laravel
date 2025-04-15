<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use ShoppingCart;


class CarrinhoController extends Controller
{
    public function carrinhoLista()
    {
        $itens = ShoppingCart::content();
        return view('site.carrinho', compact('itens'));
    }

    public function adicionaCarrinho(Request $request)
    {
        ShoppingCart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'qty' => abs($request->qty),
            'options' => [
                'image' => $request->img
            ]
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'Produto adicionado ao carrinho!');
    }

    public function removeCarrinho(Request $request) {
        ShoppingCart::remove($request->rowId);
        return redirect()->route('site.carrinho')->with('sucesso', 'Produto removido do carrinho!');
    }

    public function atualizaCarrinho(Request $request) {
        ShoppingCart::update($request->rowId, abs((int) $request->qty));
        return redirect()->route('site.carrinho')->with('sucesso','Produto do carrinho atualizado!');
    }

    public function limparCarrinho() {
        ShoppingCart::destroy();
        return redirect()->route('site.carrinho')->with('aviso','Seu carrinho está vazio!');
    }
}
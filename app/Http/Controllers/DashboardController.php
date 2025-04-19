<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index() {
        $usuarios = User::all()->count();

        // Gráfico 1 - Usuários
        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total'),
        ])
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();

        // preparar arrays
        foreach($usersData as $user) {
            $ano[] = $user->ano;
            $total[] = $user->total;
        }

        // formatar para Chart.JS
        $userLabel = "'Comparativo de cadastro'";
        $userAno = implode(',', $ano);
        $userTotal = implode(',', $total);

        // Gráfico 2 - Categorias
        $catData = Categoria::with('produtos')->get();

        // preparar array
        foreach($catData as $cat) {
            $catNome[] = "'".$cat->nome."'";
            $catTotal[] = $cat->produtos->count();
        }

        // formatar para Chart.JS
        $catLabel = implode(',', $catNome);
        $catTotal = implode(',', $catTotal);

        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal', 'catLabel', 'catTotal'));
    }
}

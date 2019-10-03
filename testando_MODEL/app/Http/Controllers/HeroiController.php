<?php

namespace App\Http\Controllers;

use App\Heroi;
use Illuminate\Http\Request;

class HeroiController extends Controller
{
    public function index(Request $request)
    {
        if($request->method() === 'GET'){
            return 'listando herois';
        }
        $heroi                      = new Heroi();
        $heroi->nome                = $request->nome;
        $heroi->identidade_secreta  = $request->identidade;
        $heroi->origem              = $request->origin;
        $heroi->foto                = $request->foto;
        $heroi->save();
        return redirect('/herois');
    }
    public function update()
    {
        return 'atualizando heroi';
    }
    
    public function delete()
    {
        return 'deletando heroi';
    }
}

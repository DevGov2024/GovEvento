<?php

namespace App\Http\Controllers;

use App\tipoEventos;
use Illuminate\Http\Request;

class tipo_eventosController extends Controller
{
    public function create()
    {

        return  view('tipo_eventos.create');
    }

    public function store(Request $request)
    {
        tipoEventos::create([
            'nome' => $request->nome,
            'preco' => $request->preco,




        ]);
        return "Evento criado com Sucesso!";
    }




    public function show($id)
    {

        $produto = tipoEventos::findOrFail($id);
        return view('tipo_eventos.show', ['produto' => $produto]);
    }



    public function edit($id)


    {

        $produto =  tipoEventos::findOrFail($id);

        return view('tipo_eventos.edit', ['produto' => $produto]);
    }


    public function update(Request $request, $id)
    {

        $produto = tipoEventos::findOrFail($id);

        $produto->update([

            'nome' => $request->nome,
            'preco' => $request->preco,


        ]);

        return "Evento atualizado com sucesso!";
    }






    public function delete($id)

    {


        $produto = tipoEventos::findOrFail($id);

        return view('tipo_eventos.delete', ['produto' => $produto]);
    }



    public function destroy($id)
    {

        $produto = tipoEventos::findOrFail($id);
        $produto->delete();


        return  "Evento excluído com sucesso";
    }
}

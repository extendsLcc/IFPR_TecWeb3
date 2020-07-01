<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function renderIndex( Request $request ){

        $series = Series::all()->sortBy('nome');

        return view('admin.pages.series.index', compact('series'));

    }

    public function renderCreate( Request $request ){

        return view('admin.pages.series.form');

    }

    public function store( Request $request ){

        $serie = Series::create($request->all());

        return redirect(route('series.list'))->with('message', "Registro {$serie->nome} salvo com sucesso: id:{$serie->id}");

    }

    public function delete( Request $request){

        Series::destroy( $request->id );

        return response( 'série excluida' , 200);

    }

}

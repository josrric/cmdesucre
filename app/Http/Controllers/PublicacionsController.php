<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Publicacion;
use App\Categoria;
use App\Http\Requests\PublicacionRequest;
use Caffeinated\Flash\Facades\Flash;

class PublicacionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p=Publicacion::orderBy('id', 'ASC')->paginate(7);

        return view('admin.publicacion.index')->with('public', $p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias= Categoria::orderBy('nombre', 'ASC')->lists('nombre','id');

        return view('admin.publicacion.registro')->with('categoria', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicacionRequest $request)
    {
        $p=new Publicacion();
        $p->titulo=$request->titulo;
        $p->contenido=$request->contenido;
        $p->categoria_id=$request->categoria_id;
        $p->user_id=40;
        $p->save();

        flash::success('Publicacion Creada');

        return redirect()->route('admin.publicaciones.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p=Publicacion::find($id);
        $categorias= Categoria::orderBy('nombre', 'ASC')->lists('nombre','id');

        return view('admin.publicacion.update')->with('public', $p)->with('categoria', $categorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $p=Publicacion::find($id);
        $p->titulo=$request->titulo;
        $p->categoria_id=$request->categoria_id;
        $p->contenido=$request->contenido;
        $p->save();

        flash::warning('Se ha cambiado Exitosamente');
        return redirect()->route('admin.publicaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p=Publicacion::find($id);
        $p->delete();

        Flash::error('Noticia Eliminada');
        return redirect()->route('admin.publicaciones.index');
    }
}

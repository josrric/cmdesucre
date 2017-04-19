<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
	protected $table = 'publicaciones';

	protected $fillabel = ['titulo',
						   'contenido',
						   'user_id',
						   'categoria_id'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function categoria()
	{
		return $this->belongsTo('App\Categoria');
	}

	public function imagenes()
	{
		return $this->hasMany('App\Imagen');
	}
}

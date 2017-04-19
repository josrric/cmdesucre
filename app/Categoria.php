<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = 'categorias';

	protected $fillabel = ['nombre'];

	public function publicaciones()
	{
		return $this->hasMany('App\Publicacion');
	}
}

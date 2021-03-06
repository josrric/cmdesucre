<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
	protected $table = 'imagenes';

	protected $fillabel = ['url',
						   'publicacion_id'];

	public function publicacion()
	{
		return $this->belongsTo('App\Publicacion');
	}
}

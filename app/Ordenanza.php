<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordenanza extends Model
{
	protected $table = 'ordenanzas';

	protected $fillabel = ['año',
						   'titulo',
						   'url'];


}

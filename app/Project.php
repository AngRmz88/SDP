<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model 
{
   protected $table="projects"; //tabla a utilizar
   protected $fillable=['status','nombre_proyecto','imagen',
   'tecnologia_proyecto','capacidad','fecha_estimada','gcr',
   'tipo_estudio','mpio/estado','empresa','coordenadas',
   'descripcion'];
}

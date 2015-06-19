<?php
class Task extends Eloquent {
	/*autoriza asignación masiva*/
	protected $fillable = ['folio',
							'oficioReferencia',
							'descripcion'];
	public $timestamps = false;

    public function user() 
    {
    	return $this->belongsTo('User'); /*a un usuario le pertenece una tarea, es decir, una tarea perternece a un usuario*/
    }
}
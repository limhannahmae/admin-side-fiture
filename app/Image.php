<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $fillable = ['gallery-id', 'file_name', 'file_size', 'file_mime', 'file_path', 'created_by'];

    public function gallery()
    {
    	return $this->belongsTo('App\Gallery');
    }
}

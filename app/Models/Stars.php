<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stars extends Model
{

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'description',
        'url_photo',
    ];
}

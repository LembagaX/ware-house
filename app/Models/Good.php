<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Good extends Model
{
    use CrudTrait;
    protected $table = 'goods';
    protected $fillable = [
        'no',
        'name'
    ];

    public function productions()
    {
        return $this->hasMany(Production::class);
    }
}

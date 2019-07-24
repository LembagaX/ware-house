<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;

class Production extends Model
{
    use CrudTrait;
    protected $table = 'productions';
    protected $fillable = [
        'divisi',
        'shift',
        'start',
        'finish',
        'batch',
        'wip',
        'bs',
        'gas',
        'person',
        'description',
        'good_id',
        'created_at'
    ];

    public function good()
    {
        return $this->belongsTo(Good::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('j F Y');
    }
}
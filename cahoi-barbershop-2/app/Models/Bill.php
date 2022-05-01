<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';

    protected $fillable = [
        'total',
        'task_id',
        'discount_id'
    ];

    public function task()
    {
        $this->belongsTo(Task::class, 'task_id', 'id');
    }

    public function discount()
    {
        $this->belongsTo(Discount::class, 'discount_id', 'id');
    }
}

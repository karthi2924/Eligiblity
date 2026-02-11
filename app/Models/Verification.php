<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $table = 'verifications';
    protected $fillable = [
        'date',
        'appt_id',
        'details',
        'insurance',
        'plan',
        'status',
        'action',
        'comments'
    ];
}

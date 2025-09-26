<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $table        = 'log_activities';
    protected $primaryKey   = 'id';
    protected $fillable     = [ 
        'id', 
        'user_id',
        'status_code',
        'action',
        'module',
        'description',
        'ip_address',
        'user_agent', 
        'created_at', 
        'updated_at'
    ];

    // Get relation of user relation
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

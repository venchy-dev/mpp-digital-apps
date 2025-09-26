<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    protected $table        = 'user_preferences';
    protected $primaryKey   = 'id';
    protected $fillable     = [ 
        'id', 
        'user_id',
        'role',
        'is_active',
        'created_at', 
        'updated_at'
    ];

    // Get relation of user relation
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class ClientModel extends Model
{
    use HasFactory;

    public $timestamps = true;
    public $incrementing = true;
    protected $table = 'clients';

    public $casts = [
        'id' => 'int'
    ];

    protected $fillable = [
        'name',
        'email',
        'contact',
        'signed',
        'focus',
        'package',
        'team',
    ];

    public $hidden = [];

    public function getCreatedAtAttribute($value)
    {
        $createdAt = Carbon::parse($value);
        return $createdAt->format('M d, Y g:ia');
    }

    public function getSignedAttribute($value)
    {
        $createdAt = Carbon::parse($value);
        return $createdAt->format('M d, Y');
    }

    public function getTeamAttribute($value)
    {
        return unserialize($value);
    }
}

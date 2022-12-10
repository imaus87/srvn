<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'founded_year',
        'location',
        'user_id'
    ];

    protected $with = [
        'teammanager'
    ];

    public function teammanager(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}

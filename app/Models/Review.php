<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_name',
        'customer_email',
        'image_id',
        'comment',
        'stars'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'uuid',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'customer_name' => 'string',
        'customer_email' => 'string',
        'image_id' => 'integer',
        'comment' => 'string',
        'stars' => 'integer',
    ];

    public function image(): HasOne
    {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }
}

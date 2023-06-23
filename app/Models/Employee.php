<?php

namespace App\Models;

use App\Enums\EmployeeStatus;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image_id',
        'position', // Chức vụ
        'description', // Mô tả
        'socials', // Mạng xã hội
        'status',
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
        'name' => 'string',
        'image_id' => 'integer',
        'position' => 'string', // Chức vụ
        'description' => 'string', // Mô tả
        'socials' => 'array', // Mạng xã hội
        'status' => 'string',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'status' => EmployeeStatus::UnPublish,
    ];

    public function image(): HasOne
    {
        return $this->hasOne(Image::class);
    }
}

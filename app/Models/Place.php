<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'slug',
        'title',
        'description',
        'content',
        'address',
        'city',
        'price',
        'opening_hours',
        'activated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'opening_hours' => 'array',
    ];

    /**
     * Get user.
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    /**
     * Get category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class)->withTrashed();
    }

    /**
     * Get images.
     */
    public function images()
    {
        return $this->hasMany(PlaceImage::class);
    }

    /**
     * Get the facilities for the place.
     */
    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'facility_place');
    }
}

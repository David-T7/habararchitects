<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'city', 'country', 'category', 'budget', 'quote', 'description', 'isActive', 'featured', 'postedBy'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'architects' => 'array',
        // 'types' => 'array',
    ];

    public function setNewsCompletionDateAttribute($value)
    {
        $this->attributes['completion'] = Carbon::createFromFormat('m/d/Y', $value)->format('d-m-Y');
    }
    public function getNewsCompletionDateAttribute()
    {
        return Carbon::createFromFormat('d-m-Y', $this->attributes['completion']);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'postedBy');
    }
}

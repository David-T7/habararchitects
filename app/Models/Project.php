<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'code_name', 'city', 'country', 'types', 'collaborators', 'location', 'year', 'site_area', 'floor_area', 
        'story_num', 'client', 'budget', 'category', 'status', 'description', 'engineers', 'currency', 'isActive', 'featured',
        'postedBy'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'engineers' => 'array',
        'types' => 'array',
    ];

    public function setProjectCompletionDateAttribute($value)
    {
        $this->attributes['completion'] = Carbon::createFromFormat('m/d/Y', $value)->format('d-m-Y');
    }
    public function getProjectCompletionDateAttribute()
    {
        return Carbon::createFromFormat('d-m-Y', $this->attributes['completion']);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'postedBy');
        // return $this->belongsTo('App\Models\User', 'postedBy');
    }

    public function images()
    {
        return $this->belongsTo(Image::class, 'id', 'project_id',);
    }

    /**
     * Picture URLs in display order; the first (cover) picture is stored in main/.
     */
    public function imageUrls(): array
    {
        $names = $this->images ? (json_decode($this->images->project_pictures, true) ?: []) : [];

        return collect($names)
            ->map(fn ($name, $index) => asset('img/projects/'.$this->id.($index === 0 ? '/main/' : '/').$name))
            ->all();
    }
}

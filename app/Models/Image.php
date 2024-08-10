<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'project_pictures',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'id', 'project_id');
    }
}

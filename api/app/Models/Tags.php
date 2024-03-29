<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function skills()
    {
        return $this->belongsToMany(Skills::class, 'tags_skills', 'id_tag', 'id_skills');
    }

    public function projects(){
        return $this->belongsToMany(Projects::class, 'tags_projects', 'id_tag', 'id_project');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'path'];

    public function link() {
        $link = json_decode($this->path);
        return '/storage/'. $link[0]->download_link;
    }
}

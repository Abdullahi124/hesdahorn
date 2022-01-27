<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['file'];

    protected $appends = ['link'];

    public function getLinkAttribute()
    {
        $link = json_decode($this->file);
        return 'storage/'. $link[0]->download_link;
    }
}

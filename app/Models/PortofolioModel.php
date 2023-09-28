<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_project',
        'kategori_project',
        'image_project'
    ];
}

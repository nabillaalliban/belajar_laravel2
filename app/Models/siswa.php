<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nis', 'nama','jenis_kelamin','kelas'];
    public $timestap = true;
}

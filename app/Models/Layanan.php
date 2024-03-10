<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $fillable = ['Nama Web', 'Link Web', 'Deskripsi', 'Status', 'Tanggal Pemantauan', 'Keterangan',
    ];
}

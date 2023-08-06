<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $fillable = ['no_antrian', 'fullname', 'nik', 'alamat', 'telp', 'specialist_id', 'keluhan', 'is_call', 'tanggal_antrian'];

    public function user()
    {
        return $this->belongsTo(Patient::class);
    }
}

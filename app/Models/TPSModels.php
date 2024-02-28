<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPSModels extends Model
{
    use HasFactory;
    protected $table = 'tb_tps';
    protected $primaryKey = 'no_tps';
    public $timestamps = false;

    protected $fillable = [
        'nama_tps',
        'jenis_tps',
        'kelas_tps',
        'status_tanah',
        'volume',
        'latitude',
        'longitude',
        'alamat',
        'pelayanan',
        'keadaan',
    ];
}

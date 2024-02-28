<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluhKesahModels extends Model
{
    use HasFactory;
    protected $primaryKey = 'no';
    protected $table = 'tb_keluh';
    protected $fillable = ['subjek', 'pesan' , 'created_at'];
}

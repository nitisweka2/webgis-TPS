<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPS extends Model
{
    use HasFactory;

    protected $table = 'tb_tps';

    protected $fillable = ['latitude', 'longitude'];

    public static function hitungJarak($x1, $y1, $x2, $y2)
    {
        return sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
    }

    public static function titikTerdekat($xReferensi, $yReferensi)
    {
        $dataDatabase = self::all(['latitude', 'longitude'])->toArray();

        $titikTerdekat = null;
        $jarakTerdekat = PHP_INT_MAX;

        foreach ($dataDatabase as $data) {
            $jarak = self::hitungJarak($xReferensi, $yReferensi, $data['latitude'], $data['longitude']);

            if ($jarak < $jarakTerdekat) {
                $titikTerdekat = $data;
                $jarakTerdekat = $jarak;
            }
        }

        return $titikTerdekat;
    }
}

<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Config::insert([
            [
                'code' => 'default_password',
                'value' => 'admin',
            ],
            [
                'code' => 'page_size',
                'value' => '5',
            ],
            [
                'code' => 'app_name',
                'value' => 'Aplikasi Surat Menyurat',
            ],
            [
                'code' => 'institution_name',
                'value' => 'Kantor Kesyahbandaran dan Otoritas Pelabuhan Kalianget',
            ],
            [
                'code' => 'institution_address',
                'value' => 'Jl. Raya Pelabuhan, Tambangan, Kalianget Tim., Kec. Kalianget, Kabupaten Sumenep, Jawa Timur 69471',
            ],
            [
                'code' => 'institution_phone',
                'value' => '081818184769',
            ],
            [
                'code' => 'institution_email',
                'value' => 'ksop_kalianget@kemenhub.go.id',
            ],
            [
                'code' => 'language',
                'value' => 'id',
            ],
            [
                'code' => 'pic',
                'value' => 'Azwar Anas, SH., M.HUM',
            ],
        ]);
    }
}

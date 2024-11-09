<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ApresiasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('apresiasis')->insert([
            [
                'title' => 'PPK Ormawa 2024',
                'image_path' => 'image/1726394257448208873_2943191939156261_7199825528160077790_n.heic.jpeg',
                'description' => 'Civitas Akademika Universitas Ciputra mengucapkan selamat kepada:
                1.⁠ ⁠⁠Kezia Elice - ISB 2022
                2.⁠ ⁠⁠Vincentia Jennifer - ISB 2022

                atas penerimaan PPK Ormawa 2024 dengan subproposal “kampung jahit arumpreneur” sebagai program pengembangan kewirausahaan dalam upaya pemberdayaan dan peningkatan pendapatan ibu-ibu rumah tangga desa glagaharum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'INTEREST 2024',
                'image_path' => 'image/1726394480458718783_18335454502123529_6079275910610644396_n.jpg',
                'description' => 'Civitas Akademika Universitas Ciputra mengucapkan selamat kepada:

                1.⁠ ⁠⁠Christian - ISB 2021
                2.⁠ ⁠⁠Kezia Elice - ISB 2022
                3.⁠ ⁠⁠Vincentia Jennifer - ISB 2022
                4.⁠ ⁠⁠Angel Aprilia - ISB 2022

                atas prestasi yang diraih menjadi Juara 2 International Digital Enterprise Competition (INTEREST) 2024 yang diselenggarakan Universitas Negeri Jakarta.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records as needed
        ]);
    }
}

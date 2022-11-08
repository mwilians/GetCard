<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Pengguna, Lembaga, Template, Package, ListKartu};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        
        User::create([
            'name'	=> 'Admin',
            'email'	=> 'admin@gmail.com',
            'role'  => '0',
            'password'	=> bcrypt('passwordadmin')
        ]);

        User::create([
            'name'	=> 'User',
            'email'	=> 'user@gmail.com',
            'role'  => '1',
            'password'	=> bcrypt('passworduser')
        ]);

        User::create([
            'name'	=> 'Romusa',
            'email'	=> 'romusa@gmail.com',
            'role'  => '1',
            'password'	=> bcrypt('passworduser')
        ]);

        Pengguna::create([
            'user_id' => '2',
            'template_id' => '1',
            'no_id' => '123456',
            'foto' => 'assets/media/users/lavender.jpg',
            'nama'	=> 'Lavender',
            'jenis_kelamin' => 'Perempuan',
            'jabatan' => 'CEO',
            'telepon' => '081272466449',
            'email'	=> 'lavender@gmail.com',
            'tanggal_bergabung' => now(),
            'tanggal_berakhir' => now()
        ]);

        Pengguna::create([
            'user_id' => '2',
            'template_id' => '2',
            'no_id' => '789101',
            'foto' => 'assets/media/users/jahe.jpg',
            'nama'	=> 'Jahe',
            'jenis_kelamin' => 'Laki-laki',
            'jabatan' => 'Manager',
            'telepon' => '082526631187',
            'email'	=> 'jahe@gmail.com',
            'tanggal_bergabung' => now(),
            'tanggal_berakhir' => now()
        ]);

        Pengguna::create([
            'user_id' => '2',
            'template_id' => '3',
            'no_id' => '112131',
            'foto' => 'assets/media/users/anggrekhitam.jpg',
            'nama'	=> 'Anggrek Hitam',
            'jenis_kelamin' => 'Perempuan',
            'jabatan' => 'Staff',
            'telepon' => '082234269772',
            'email'	=> 'anggrek@gmail.com',
            'tanggal_bergabung' => now(),
            'tanggal_berakhir' => now()
        ]);

        Lembaga::create([
            'user_id' => '2',
            'foto' => 'assets/media/logos/A-building.png',
            'nama'	=> 'CV. Perusahaan',
            'telepon' => '081311214665',
            'alamat' => 'Jln. Alamat Perusahaan No.1',
            'email'	=> 'perusahaan@gmail.com',
            'website' => 'www.perusahaan.com'
        ]);

        Lembaga::create([
            'user_id' => '3',
            'foto' => 'assets/media/logos/A-email.png',
            'nama'	=> 'CV. Email',
            'telepon' => '081276233007',
            'alamat' => 'Jln. Alamat Email No.1',
            'email'	=> 'email@gmail.com',
            'website' => 'www.email.com'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P1.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A1C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K1C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K1D.png',
            'tipe' => 'Gratis'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P3.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A3C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K3C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K3D.png',
            'tipe' => 'Gratis'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P7.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A7C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K7C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K7D.png',
            'tipe' => 'Gratis'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P10.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A10C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K10C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K10D.png',
            'tipe' => 'Gratis'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P11.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A11C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K11C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K11D.png',
            'tipe' => 'Gratis'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P13.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A13C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K13C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K13D.png',
            'tipe' => 'Gratis'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P16.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A16C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K16C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K16D.png',
            'tipe' => 'Gratis'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P19.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A19C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K19C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K19D.png',
            'tipe' => 'Gratis'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P28.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A28C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K28C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K28D.png',
            'tipe' => 'Gratis'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P8.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A8C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K8C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K8D.png',
            'tipe' => 'Premium'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P9.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A9C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K9C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K9D.png',
            'tipe' => 'Premium'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P14.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A14C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K14C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K14D.png',
            'tipe' => 'Premium'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P15.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A15C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K15C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K15D.png',
            'tipe' => 'Premium'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P17.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A17C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K17C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K17D.png',
            'tipe' => 'Premium'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P22.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A22C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K22C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K22D.png',
            'tipe' => 'Premium'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P24.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A24C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K24C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K24D.png',
            'tipe' => 'Premium'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P27.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A27C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K27C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K27D.png',
            'tipe' => 'Premium'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P23.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A23C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K23C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K23D.png',
            'tipe' => 'Premium'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P29.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A29C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K29C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K29D.png',
            'tipe' => 'Premium'
        ]);

        Template::create([
            'file_demo' => 'assets/media/desain/DP/P21.png',
            'file_kartu_app' => 'assets/media/desain/DAPP/A21C.png',
            'file_kartu_nama1'	=> 'assets/media/desain/DKARTU/K21C.png',
            'file_kartu_nama2' => 'assets/media/desain/DKARTU/K21D.png',
            'tipe' => 'Premium'
        ]);

        ListKartu::create([
            'user_id' => '2',
            'pengguna_id' => '3'
        ]);

        ListKartu::create([
            'user_id' => '2',
            'pengguna_id' => '2'
        ]);

        Package::create([
            'foto' => 'assets/media/img/card-1.png',
            // 'foto' => 'assets/media/img/2.png',
            'paket' => 'Premium',
            'harga'	=> '26000',
            'masa_berlaku' => '15',
            'tipe_template' => 'Premium'
        ]);

        Package::create([
            'foto' => 'assets/media/img/card-1.png',
            'paket' => 'Premium 1',
            'harga'	=> '36000',
            'masa_berlaku' => '30',
            'tipe_template' => 'Premium'
        ]);

        Package::create([
            'foto' => 'assets/media/img/card-1.png',
            'paket' => 'Premium 2',
            'harga'	=> '46000',
            'masa_berlaku' => '45',
            'tipe_template' => 'Premium'
        ]);
    }
}
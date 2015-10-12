<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Wilayah;
use App\Role;
use App\UserWilayahRole;

class Seeder_data_awal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_a = Role::create([
    		'role' => 'Admin',
    		'forbidden_area' => '',
    	]);

    	$role_m = Role::create([
    		'role' => 'Manager',
    		'forbidden_area' => json_encode(['entry'])
    	]);


        $wilayah1 = Wilayah::create([
        	'kode' => '33',
        	'nama_wilayah' => 'Jawa Tengah',
        	'tingkat' => '1_prov',
        	'induk' => '0'
        ]);

        $wilayah2 = Wilayah::create([
        	'kode' => '3375',
        	'nama_wilayah' => 'Kota Pekalongan',
        	'tingkat' => '2_kab_kota',
        	'induk' => '33'
        ]);

        $wilayah3 = Wilayah::create([
        	'kode' => '337503',
        	'nama_wilayah' => 'Pekalongan Utara',
        	'tingkat' => '3_kec',
        	'induk' => '3375'
        ]);

        $wilayah4 = Wilayah::create([
        	'kode' => '3375031009',
        	'nama_wilayah' => 'Bandengan',
        	'tingkat' => '4_des_kel',
        	'induk' => '337503'
        ]);

        $user1 = User::create([
        	'username' => 'nmc',
        	'password' => bcrypt(nusp_password('12345')),
        	'nama_lengkap' => 'NUSP Prase 2',
        	'email' => 'nmc@nusp.dev',
        ]);


        $user2 = User::create([
        	'username' => 'rmcbarat',
        	'password' => bcrypt(nusp_password('rmc123')),
        	'nama_lengkap' => 'RMC Barat',
        	'email' => 'rmcbarat@nusp.dev',
        ]);

        $user3 = User::create([
        	'username' => 'korkot1',
        	'password' => bcrypt(nusp_password('korkot123')),
        	'nama_lengkap' => 'Korkot 1',
        	'email' => 'korkot1@nusp.dev',
        ]);

        UserWilayahRole::create([
        	'user_id' => $user1->id,
        	'kode_wilayah' => '0',
        	'role_id' => $role_m->id
        ]);

        UserWilayahRole::create([
        	'user_id' => $user2->id,
        	'kode_wilayah' => '33',
        	'role_id' => $role_m->id
        ]);

        UserWilayahRole::create([
        	'user_id' => $user3->id,
        	'kode_wilayah' => '3375',
        	'role_id' => $role_a->id
        ]);

    }
}

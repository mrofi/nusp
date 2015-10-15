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
        DB::table('roles')->truncate();
        DB::table('users')->truncate();
        DB::table('user_wilayah_roles')->truncate();

    	$role_a = Role::create([
    		'role' => 'Admin',
    		'forbidden_area' => '',
    	]);

    	$role_m = Role::create([
    		'role' => 'Manager',
    		'forbidden_area' => json_encode(['entry'])
    	]);


     //    $wilayah1 = Wilayah::create([
     //    	'kode' => '33',
     //    	'nama_wilayah' => 'Jawa Tengah',
     //    	'tingkat' => '1_prov',
     //    	'induk' => '0'
     //    ]);

     //    $wilayah2 = Wilayah::create([
     //    	'kode' => '3375',
     //    	'nama_wilayah' => 'Kota Pekalongan',
     //    	'tingkat' => '2_kab_kota',
     //    	'induk' => '33'
     //    ]);

     //    $wilayah3 = Wilayah::create([
     //    	'kode' => '337503',
     //    	'nama_wilayah' => 'Pekalongan Utara',
     //    	'tingkat' => '3_kec',
     //    	'induk' => '3375'
     //    ]);

     //    $wilayah4 = Wilayah::create([
     //    	'kode' => '3375031009',
     //    	'nama_wilayah' => 'Bandengan',
     //    	'tingkat' => '4_des_kel',
     //    	'induk' => '337503'
     //    ]);

        $user0 = User::create([
            'username' => 'su',
            'password' => bcrypt(nusp_password('12345')),
            'nama_lengkap' => 'Super Admin',
            'email' => 'su@nusp.dev',
        ]);

     //    $user1 = User::create([
     //    	'username' => 'nmc',
     //    	'password' => bcrypt(nusp_password('12345')),
     //    	'nama_lengkap' => 'NUSP Prase 2',
     //    	'email' => 'nmc@nusp.dev',
     //    ]);


     //    $user2 = User::create([
     //    	'username' => 'rmcbarat',
     //    	'password' => bcrypt(nusp_password('rmc123')),
     //    	'nama_lengkap' => 'RMC Barat',
     //    	'email' => 'rmcbarat@nusp.dev',
     //    ]);

     //    $user3 = User::create([
     //    	'username' => 'korkot1',
     //    	'password' => bcrypt(nusp_password('korkot123')),
     //    	'nama_lengkap' => 'Korkot 1',
     //    	'email' => 'korkot1@nusp.dev',
     //    ]);

     //    UserWilayahRole::create([
     //    	'user_id' => $user1->id,
     //    	'kode_wilayah' => '0',
     //    	'role_id' => $role_m->id
     //    ]);

        UserWilayahRole::create([
            'user_id' => $user0->id,
            'kode_wilayah' => '0',
            'role_id' => $role_a->id
        ]);

     //    UserWilayahRole::create([
     //    	'user_id' => $user2->id,
     //    	'kode_wilayah' => '33',
     //    	'role_id' => $role_m->id
     //    ]);

     //    UserWilayahRole::create([
     //    	'user_id' => $user3->id,
     //    	'kode_wilayah' => '3375',
     //    	'role_id' => $role_a->id
     //    ]);

$user1 =    User::create(['username' => 'nmc',  'password' => bcrypt(nusp_password('nmcnuspphase2')),  'nama_lengkap' => 'nmc',    'email' => 'nmc@nusp.dev']);
$user2 =    User::create(['username' => 'rmcbarat', 'password' => bcrypt(nusp_password('rmc123')), 'nama_lengkap' => 'rmcbarat',   'email' => 'rmcbarat@nusp.dev']);
$user3 =    User::create(['username' => 'rmctengah',    'password' => bcrypt(nusp_password('rmc123')), 'nama_lengkap' => 'rmctengah',  'email' => 'rmctengah@nusp.dev']);
$user4 =    User::create(['username' => 'rmctimur', 'password' => bcrypt(nusp_password('rmc123')), 'nama_lengkap' => 'rmctimur',   'email' => 'rmctimur@nusp.dev']);
$user5 =    User::create(['username' => 'lco1', 'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco1',   'email' => 'lco1@nusp.dev']);
$user6 =    User::create(['username' => 'lco2', 'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco2',   'email' => 'lco2@nusp.dev']);
$user7 =    User::create(['username' => 'lco3', 'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco3',   'email' => 'lco3@nusp.dev']);
$user8 =    User::create(['username' => 'lco4', 'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco4',   'email' => 'lco4@nusp.dev']);
$user9 =    User::create(['username' => 'lco5', 'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco5',   'email' => 'lco5@nusp.dev']);
$user10 =   User::create(['username' => 'lco6', 'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco6',   'email' => 'lco6@nusp.dev']);
$user11 =   User::create(['username' => 'lco7', 'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco7',   'email' => 'lco7@nusp.dev']);
$user12 =   User::create(['username' => 'lco8', 'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco8',   'email' => 'lco8@nusp.dev']);
$user13 =   User::create(['username' => 'lco9', 'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco9',   'email' => 'lco9@nusp.dev']);
$user14 =   User::create(['username' => 'lco10',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco10',  'email' => 'lco10@nusp.dev']);
$user15 =   User::create(['username' => 'lco11',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco11',  'email' => 'lco11@nusp.dev']);
$user16 =   User::create(['username' => 'lco12',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco12',  'email' => 'lco12@nusp.dev']);
$user17 =   User::create(['username' => 'lco13',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco13',  'email' => 'lco13@nusp.dev']);
$user18 =   User::create(['username' => 'lco14',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco14',  'email' => 'lco14@nusp.dev']);
$user19 =   User::create(['username' => 'lco15',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco15',  'email' => 'lco15@nusp.dev']);
$user20 =   User::create(['username' => 'lco16',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco16',  'email' => 'lco16@nusp.dev']);
$user21 =   User::create(['username' => 'lco17',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco17',  'email' => 'lco17@nusp.dev']);
$user22 =   User::create(['username' => 'lco18',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco18',  'email' => 'lco18@nusp.dev']);
$user23 =   User::create(['username' => 'lco19',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco19',  'email' => 'lco19@nusp.dev']);
$user24 =   User::create(['username' => 'lco20',    'password' => bcrypt(nusp_password('lco123')), 'nama_lengkap' => 'lco20',  'email' => 'lco20@nusp.dev']);
$user25 =   User::create(['username' => 'satkerkabkota1',   'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota1', 'email' => 'satkerkabkota1@nusp.dev']);
$user26 =   User::create(['username' => 'satkerkabkota2',   'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota2', 'email' => 'satkerkabkota2@nusp.dev']);
$user27 =   User::create(['username' => 'satkerkabkota3',   'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota3', 'email' => 'satkerkabkota3@nusp.dev']);
$user28 =   User::create(['username' => 'satkerkabkota4',   'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota4', 'email' => 'satkerkabkota4@nusp.dev']);
$user29 =   User::create(['username' => 'satkerkabkota5',   'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota5', 'email' => 'satkerkabkota5@nusp.dev']);
$user30 =   User::create(['username' => 'satkerkabkota6',   'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota6', 'email' => 'satkerkabkota6@nusp.dev']);
$user31 =   User::create(['username' => 'satkerkabkota7',   'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota7', 'email' => 'satkerkabkota7@nusp.dev']);
$user32 =   User::create(['username' => 'satkerkabkota8',   'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota8', 'email' => 'satkerkabkota8@nusp.dev']);
$user33 =   User::create(['username' => 'satkerkabkota9',   'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota9', 'email' => 'satkerkabkota9@nusp.dev']);
$user34 =   User::create(['username' => 'satkerkabkota10',  'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota10',    'email' => 'satkerkabkota10@nusp.dev']);
$user35 =   User::create(['username' => 'satkerkabkota11',  'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota11',    'email' => 'satkerkabkota11@nusp.dev']);
$user36 =   User::create(['username' => 'satkerkabkota12',  'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota12',    'email' => 'satkerkabkota12@nusp.dev']);
$user37 =   User::create(['username' => 'satkerkabkota13',  'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota13',    'email' => 'satkerkabkota13@nusp.dev']);
$user38 =   User::create(['username' => 'satkerkabkota14',  'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota14',    'email' => 'satkerkabkota14@nusp.dev']);
$user39 =   User::create(['username' => 'satkerkabkota15',  'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota15',    'email' => 'satkerkabkota15@nusp.dev']);
$user40 =   User::create(['username' => 'satkerkabkota16',  'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota16',    'email' => 'satkerkabkota16@nusp.dev']);
$user41 =   User::create(['username' => 'satkerkabkota17',  'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota17',    'email' => 'satkerkabkota17@nusp.dev']);
$user42 =   User::create(['username' => 'satkerkabkota18',  'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota18',    'email' => 'satkerkabkota18@nusp.dev']);
$user43 =   User::create(['username' => 'satkerkabkota19',  'password' => bcrypt(nusp_password('satkerkabkota123')),   'nama_lengkap' => 'satkerkabkota19',    'email' => 'satkerkabkota19@nusp.dev']);
$user44 =   User::create(['username' => 'satkerkabkota20',  'password' => bcrypt(nusp_password('satkerkabkota124')),   'nama_lengkap' => 'satkerkabkota20',    'email' => 'satkerkabkota20@nusp.dev']);
$user45 =   User::create(['username' => 'ppkkotakab1',  'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab1',    'email' => 'ppkkotakab1@nusp.dev']);
$user46 =   User::create(['username' => 'ppkkotakab2',  'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab2',    'email' => 'ppkkotakab2@nusp.dev']);
$user47 =   User::create(['username' => 'ppkkotakab3',  'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab3',    'email' => 'ppkkotakab3@nusp.dev']);
$user48 =   User::create(['username' => 'ppkkotakab4',  'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab4',    'email' => 'ppkkotakab4@nusp.dev']);
$user49 =   User::create(['username' => 'ppkkotakab5',  'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab5',    'email' => 'ppkkotakab5@nusp.dev']);
$user50 =   User::create(['username' => 'ppkkotakab6',  'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab6',    'email' => 'ppkkotakab6@nusp.dev']);
$user51 =   User::create(['username' => 'ppkkotakab7',  'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab7',    'email' => 'ppkkotakab7@nusp.dev']);
$user52 =   User::create(['username' => 'ppkkotakab8',  'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab8',    'email' => 'ppkkotakab8@nusp.dev']);
$user53 =   User::create(['username' => 'ppkkotakab9',  'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab9',    'email' => 'ppkkotakab9@nusp.dev']);
$user54 =   User::create(['username' => 'ppkkotakab10', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab10',   'email' => 'ppkkotakab10@nusp.dev']);
$user55 =   User::create(['username' => 'ppkkotakab11', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab11',   'email' => 'ppkkotakab11@nusp.dev']);
$user56 =   User::create(['username' => 'ppkkotakab12', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab12',   'email' => 'ppkkotakab12@nusp.dev']);
$user57 =   User::create(['username' => 'ppkkotakab13', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab13',   'email' => 'ppkkotakab13@nusp.dev']);
$user58 =   User::create(['username' => 'ppkkotakab14', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab14',   'email' => 'ppkkotakab14@nusp.dev']);
$user59 =   User::create(['username' => 'ppkkotakab15', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab15',   'email' => 'ppkkotakab15@nusp.dev']);
$user60 =   User::create(['username' => 'ppkkotakab16', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab16',   'email' => 'ppkkotakab16@nusp.dev']);
$user61 =   User::create(['username' => 'ppkkotakab17', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab17',   'email' => 'ppkkotakab17@nusp.dev']);
$user62 =   User::create(['username' => 'ppkkotakab18', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab18',   'email' => 'ppkkotakab18@nusp.dev']);
$user63 =   User::create(['username' => 'ppkkotakab19', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab19',   'email' => 'ppkkotakab19@nusp.dev']);
$user64 =   User::create(['username' => 'ppkkotakab20', 'password' => bcrypt(nusp_password('ppkkotakab123')),  'nama_lengkap' => 'ppkkotakab20',   'email' => 'ppkkotakab20@nusp.dev']);
$user65 =   User::create(['username' => 'pmu',  'password' => bcrypt(nusp_password('pmu123')), 'nama_lengkap' => 'pmu',    'email' => 'pmu@nusp.dev']);
$user66 =   User::create(['username' => 'korkot1',  'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot1',    'email' => 'korkot1@nusp.dev']);
$user67 =   User::create(['username' => 'korkot2',  'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot2',    'email' => 'korkot2@nusp.dev']);
$user68 =   User::create(['username' => 'korkot3',  'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot3',    'email' => 'korkot3@nusp.dev']);
$user69 =   User::create(['username' => 'korkot4',  'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot4',    'email' => 'korkot4@nusp.dev']);
$user70 =   User::create(['username' => 'korkot5',  'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot5',    'email' => 'korkot5@nusp.dev']);
$user71 =   User::create(['username' => 'korkot6',  'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot6',    'email' => 'korkot6@nusp.dev']);
$user72 =   User::create(['username' => 'korkot7',  'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot7',    'email' => 'korkot7@nusp.dev']);
$user73 =   User::create(['username' => 'korkot8',  'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot8',    'email' => 'korkot8@nusp.dev']);
$user74 =   User::create(['username' => 'korkot9',  'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot9',    'email' => 'korkot9@nusp.dev']);
$user75 =   User::create(['username' => 'korkot10', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot10',   'email' => 'korkot10@nusp.dev']);
$user76 =   User::create(['username' => 'korkot11', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot11',   'email' => 'korkot11@nusp.dev']);
$user77 =   User::create(['username' => 'korkot12', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot12',   'email' => 'korkot12@nusp.dev']);
$user78 =   User::create(['username' => 'korkot13', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot13',   'email' => 'korkot13@nusp.dev']);
$user79 =   User::create(['username' => 'korkot14', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot14',   'email' => 'korkot14@nusp.dev']);
$user80 =   User::create(['username' => 'korkot15', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot15',   'email' => 'korkot15@nusp.dev']);
$user81 =   User::create(['username' => 'korkot16', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot16',   'email' => 'korkot16@nusp.dev']);
$user82 =   User::create(['username' => 'korkot17', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot17',   'email' => 'korkot17@nusp.dev']);
$user83 =   User::create(['username' => 'korkot18', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot18',   'email' => 'korkot18@nusp.dev']);
$user84 =   User::create(['username' => 'korkot19', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot19',   'email' => 'korkot19@nusp.dev']);
$user85 =   User::create(['username' => 'korkot20', 'password' => bcrypt(nusp_password('korkot123')),  'nama_lengkap' => 'korkot20',   'email' => 'korkot20@nusp.dev']);

UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 35, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 36, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 62, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 33, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 63, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 32, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 12, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 15, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 18, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 21, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 17, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 16, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 73, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 52, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 74, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user1->id, 'kode_wilayah' => 81, 'role_id' => 2]);

UserWilayahRole::create(['user_id' => $user2->id, 'kode_wilayah' => 2171, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user2->id, 'kode_wilayah' => 1274, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user2->id, 'kode_wilayah' => 1671, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user2->id, 'kode_wilayah' => 1771, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user2->id, 'kode_wilayah' => 1871, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user2->id, 'kode_wilayah' => 1506, 'role_id' => 2]);

UserWilayahRole::create(['user_id' => $user3->id, 'kode_wilayah' => 6203, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user3->id, 'kode_wilayah' => 6271, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user3->id, 'kode_wilayah' => 6371, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user3->id, 'kode_wilayah' => 3272, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user3->id, 'kode_wilayah' => 3374, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user3->id, 'kode_wilayah' => 3375, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user3->id, 'kode_wilayah' => 3575, 'role_id' => 2]);

UserWilayahRole::create(['user_id' => $user4->id, 'kode_wilayah' => 7371, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user4->id, 'kode_wilayah' => 7308, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user4->id, 'kode_wilayah' => 7373, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user4->id, 'kode_wilayah' => 7471, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user4->id, 'kode_wilayah' => 5272, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user4->id, 'kode_wilayah' => 8171, 'role_id' => 2]);

UserWilayahRole::create(['user_id' => $user5->id, 'kode_wilayah' => 2171, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user6->id, 'kode_wilayah' => 1274, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user7->id, 'kode_wilayah' => 1671, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user8->id, 'kode_wilayah' => 1771, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user9->id, 'kode_wilayah' => 1871, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user10->id, 'kode_wilayah' => 1506, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user11->id, 'kode_wilayah' => 6203, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user12->id, 'kode_wilayah' => 6271, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user13->id, 'kode_wilayah' => 6371, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user14->id, 'kode_wilayah' => 3272, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user15->id, 'kode_wilayah' => 3673, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user16->id, 'kode_wilayah' => 3374, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user17->id, 'kode_wilayah' => 3375, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user18->id, 'kode_wilayah' => 3575, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user19->id, 'kode_wilayah' => 7371, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user20->id, 'kode_wilayah' => 7308, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user21->id, 'kode_wilayah' => 7373, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user22->id, 'kode_wilayah' => 7471, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user23->id, 'kode_wilayah' => 5272, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user24->id, 'kode_wilayah' => 8171, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user25->id, 'kode_wilayah' => 2171, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user26->id, 'kode_wilayah' => 1274, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user27->id, 'kode_wilayah' => 1671, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user28->id, 'kode_wilayah' => 1771, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user29->id, 'kode_wilayah' => 1871, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user30->id, 'kode_wilayah' => 1506, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user31->id, 'kode_wilayah' => 6203, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user32->id, 'kode_wilayah' => 6271, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user33->id, 'kode_wilayah' => 6371, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user34->id, 'kode_wilayah' => 3272, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user35->id, 'kode_wilayah' => 3673, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user36->id, 'kode_wilayah' => 3374, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user37->id, 'kode_wilayah' => 3375, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user38->id, 'kode_wilayah' => 3575, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user39->id, 'kode_wilayah' => 7371, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user40->id, 'kode_wilayah' => 7308, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user41->id, 'kode_wilayah' => 7373, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user42->id, 'kode_wilayah' => 7471, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user43->id, 'kode_wilayah' => 5272, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user44->id, 'kode_wilayah' => 8171, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user45->id, 'kode_wilayah' => 2171, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user46->id, 'kode_wilayah' => 1274, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user47->id, 'kode_wilayah' => 1671, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user48->id, 'kode_wilayah' => 1771, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user49->id, 'kode_wilayah' => 1871, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user50->id, 'kode_wilayah' => 1506, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user51->id, 'kode_wilayah' => 6203, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user52->id, 'kode_wilayah' => 6271, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user53->id, 'kode_wilayah' => 6371, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user54->id, 'kode_wilayah' => 3272, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user55->id, 'kode_wilayah' => 3673, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user56->id, 'kode_wilayah' => 3374, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user57->id, 'kode_wilayah' => 3375, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user58->id, 'kode_wilayah' => 3575, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user59->id, 'kode_wilayah' => 7371, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user60->id, 'kode_wilayah' => 7308, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user61->id, 'kode_wilayah' => 7373, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user62->id, 'kode_wilayah' => 7471, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user63->id, 'kode_wilayah' => 5272, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user64->id, 'kode_wilayah' => 8171, 'role_id' => 2]);

UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 35, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 36, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 62, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 33, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 63, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 32, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 12, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 15, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 18, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 21, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 17, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 16, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 73, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 52, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 74, 'role_id' => 2]);
UserWilayahRole::create(['user_id' => $user65->id, 'kode_wilayah' => 81, 'role_id' => 2]);

UserWilayahRole::create(['user_id' => $user66->id, 'kode_wilayah' => 2171, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user67->id, 'kode_wilayah' => 1274, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user68->id, 'kode_wilayah' => 1671, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user69->id, 'kode_wilayah' => 1771, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user70->id, 'kode_wilayah' => 1871, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user71->id, 'kode_wilayah' => 1506, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user72->id, 'kode_wilayah' => 6203, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user73->id, 'kode_wilayah' => 6271, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user74->id, 'kode_wilayah' => 6371, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user75->id, 'kode_wilayah' => 3272, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user76->id, 'kode_wilayah' => 3673, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user77->id, 'kode_wilayah' => 3374, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user78->id, 'kode_wilayah' => 3375, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user79->id, 'kode_wilayah' => 3575, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user80->id, 'kode_wilayah' => 7371, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user81->id, 'kode_wilayah' => 7308, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user82->id, 'kode_wilayah' => 7373, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user83->id, 'kode_wilayah' => 7471, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user84->id, 'kode_wilayah' => 5272, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user85->id, 'kode_wilayah' => 8171, 'role_id' => 1]);




    }
}

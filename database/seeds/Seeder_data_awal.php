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
        DB::table('wilayahs')->truncate();
        DB::table('user_wilayah_roles')->truncate();

    	$role_a = Role::create([
    		'role' => 'admin',
    		'forbidden_area' => '',
    	]);

    	$role_m = Role::create([
    		'role' => 'manager',
    		'forbidden_area' => json_encode(['entry', 'verify'])
    	]);

        $role_v = Role::create([
            'role' => 'verifikator',
            'forbidden_area' => json_encode(['entry'])
        ]);

        $user0 = User::create([
            'username' => 'su',
            'password' => bcrypt(nusp_password('12345')),
            'nama_lengkap' => 'Super Admin',
            'email' => 'su@nusp.dev',
        ]);


        UserWilayahRole::create([
            'user_id' => $user0->id,
            'kode_wilayah' => '0',
            'role_id' => $role_a->id
        ]);

Wilayah::create(['kode' => '12', 'nama_wilayah' => 'Sumatera Utara', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '1274', 'nama_wilayah' => 'Kota Tanjung Balai', 'tingkat' => '2_kab_kota', 'induk' => '12']);
Wilayah::create(['kode' => '127404', 'nama_wilayah' => 'Teluk Nibung', 'tingkat' => '3_kec', 'induk' => '1274']);
Wilayah::create(['kode' => '1274041004', 'nama_wilayah' => 'Kapias Pulau Buaya', 'tingkat' => '4_des_kel', 'induk' => '127404']);
Wilayah::create(['kode' => '1274041005', 'nama_wilayah' => 'Beting Kuala Kapias', 'tingkat' => '4_des_kel', 'induk' => '127404']);
Wilayah::create(['kode' => '127405', 'nama_wilayah' => 'Datuk Bandar', 'tingkat' => '3_kec', 'induk' => '1274']);
Wilayah::create(['kode' => '1274051003', 'nama_wilayah' => 'Gading', 'tingkat' => '4_des_kel', 'induk' => '127405']);
Wilayah::create(['kode' => '1274051004', 'nama_wilayah' => 'Sirantau', 'tingkat' => '4_des_kel', 'induk' => '127405']);
Wilayah::create(['kode' => '127406', 'nama_wilayah' => 'Datuk Bandar Timur', 'tingkat' => '3_kec', 'induk' => '1274']);
Wilayah::create(['kode' => '1274061001', 'nama_wilayah' => 'Pulau Simardan', 'tingkat' => '4_des_kel', 'induk' => '127406']);
Wilayah::create(['kode' => '1274061002', 'nama_wilayah' => 'Semula Jadi', 'tingkat' => '4_des_kel', 'induk' => '127406']);
Wilayah::create(['kode' => '1274061004', 'nama_wilayah' => 'Bunga Tanjung', 'tingkat' => '4_des_kel', 'induk' => '127406']);
Wilayah::create(['kode' => '15', 'nama_wilayah' => 'Jambi', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '1506', 'nama_wilayah' => 'Kabupaten Tanjung Jabung Barat', 'tingkat' => '2_kab_kota', 'induk' => '15']);
Wilayah::create(['kode' => '150602', 'nama_wilayah' => 'Tungkal Ilir', 'tingkat' => '3_kec', 'induk' => '1506']);
Wilayah::create(['kode' => '1506021006', 'nama_wilayah' => 'Tungkal Harapan', 'tingkat' => '4_des_kel', 'induk' => '150602']);
Wilayah::create(['kode' => '1506021015', 'nama_wilayah' => 'Kampung Nelayan', 'tingkat' => '4_des_kel', 'induk' => '150602']);
Wilayah::create(['kode' => '1506021018', 'nama_wilayah' => 'Sungainibung', 'tingkat' => '4_des_kel', 'induk' => '150602']);
Wilayah::create(['kode' => '16', 'nama_wilayah' => 'Sumatera Selatan', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '1671', 'nama_wilayah' => 'Kota Palembang', 'tingkat' => '2_kab_kota', 'induk' => '16']);
Wilayah::create(['kode' => '167102', 'nama_wilayah' => 'Seberang Ulu I', 'tingkat' => '3_kec', 'induk' => '1671']);
Wilayah::create(['kode' => '1671021001', 'nama_wilayah' => '15 Ulu', 'tingkat' => '4_des_kel', 'induk' => '167102']);
Wilayah::create(['kode' => '1671021002', 'nama_wilayah' => '1 Ulu', 'tingkat' => '4_des_kel', 'induk' => '167102']);
Wilayah::create(['kode' => '167113', 'nama_wilayah' => 'Kertapati', 'tingkat' => '3_kec', 'induk' => '1671']);
Wilayah::create(['kode' => '1671131002', 'nama_wilayah' => 'Kemang Agung', 'tingkat' => '4_des_kel', 'induk' => '167113']);
Wilayah::create(['kode' => '1671131005', 'nama_wilayah' => 'Karya Jaya', 'tingkat' => '4_des_kel', 'induk' => '167113']);
Wilayah::create(['kode' => '17', 'nama_wilayah' => 'Bengkulu', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '1771', 'nama_wilayah' => 'Kota Bengkulu', 'tingkat' => '2_kab_kota', 'induk' => '17']);
Wilayah::create(['kode' => '177106', 'nama_wilayah' => 'Ratu Agung', 'tingkat' => '3_kec', 'induk' => '1771']);
Wilayah::create(['kode' => '1771061007', 'nama_wilayah' => 'Sawah Lebar Baru', 'tingkat' => '4_des_kel', 'induk' => '177106']);
Wilayah::create(['kode' => '177107', 'nama_wilayah' => 'Ratu Samban', 'tingkat' => '3_kec', 'induk' => '1771']);
Wilayah::create(['kode' => '1771071003', 'nama_wilayah' => 'Belakang Pondok', 'tingkat' => '4_des_kel', 'induk' => '177107']);
Wilayah::create(['kode' => '177109', 'nama_wilayah' => 'Singaran Pati', 'tingkat' => '3_kec', 'induk' => '1771']);
Wilayah::create(['kode' => '1771091004', 'nama_wilayah' => 'Padang Nangka', 'tingkat' => '4_des_kel', 'induk' => '177109']);
Wilayah::create(['kode' => '18', 'nama_wilayah' => 'Lampung', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '1871', 'nama_wilayah' => 'Kota Bandar Lampung', 'tingkat' => '2_kab_kota', 'induk' => '18']);
Wilayah::create(['kode' => '187104', 'nama_wilayah' => 'Panjang', 'tingkat' => '3_kec', 'induk' => '1871']);
Wilayah::create(['kode' => '1871041002', 'nama_wilayah' => 'Srengsem', 'tingkat' => '4_des_kel', 'induk' => '187104']);
Wilayah::create(['kode' => '1871041004', 'nama_wilayah' => 'Pidada', 'tingkat' => '4_des_kel', 'induk' => '187104']);
Wilayah::create(['kode' => '187107', 'nama_wilayah' => 'Telukbetung Selatann', 'tingkat' => '3_kec', 'induk' => '1871']);
Wilayah::create(['kode' => '1871071009', 'nama_wilayah' => 'Gedong Pakuon', 'tingkat' => '4_des_kel', 'induk' => '187107']);
Wilayah::create(['kode' => '187115', 'nama_wilayah' => 'Way Halim', 'tingkat' => '3_kec', 'induk' => '1871']);
Wilayah::create(['kode' => '1871151003', 'nama_wilayah' => 'Gunungsulah', 'tingkat' => '4_des_kel', 'induk' => '187115']);
Wilayah::create(['kode' => '187119', 'nama_wilayah' => 'Telukbetung Timur', 'tingkat' => '3_kec', 'induk' => '1871']);
Wilayah::create(['kode' => '1871191001', 'nama_wilayah' => 'Kota Karang', 'tingkat' => '4_des_kel', 'induk' => '187119']);
Wilayah::create(['kode' => '187120', 'nama_wilayah' => 'Bumi Waras', 'tingkat' => '3_kec', 'induk' => '1871']);
Wilayah::create(['kode' => '1871201004', 'nama_wilayah' => 'Bumi Raya', 'tingkat' => '4_des_kel', 'induk' => '187120']);
Wilayah::create(['kode' => '1871201005', 'nama_wilayah' => 'Kangkung', 'tingkat' => '4_des_kel', 'induk' => '187120']);
Wilayah::create(['kode' => '21', 'nama_wilayah' => 'Kepulauan Riau', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '2171', 'nama_wilayah' => 'Kota Batam', 'tingkat' => '2_kab_kota', 'induk' => '21']);
Wilayah::create(['kode' => '217107', 'nama_wilayah' => 'Sei Beduk', 'tingkat' => '3_kec', 'induk' => '2171']);
Wilayah::create(['kode' => '2171071003', 'nama_wilayah' => 'Mangsang', 'tingkat' => '4_des_kel', 'induk' => '217107']);
Wilayah::create(['kode' => '2171071004', 'nama_wilayah' => 'Tanjung Piayu', 'tingkat' => '4_des_kel', 'induk' => '217107']);
Wilayah::create(['kode' => '32', 'nama_wilayah' => 'Jawa Barat', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '3272', 'nama_wilayah' => 'Kota Sukabumi', 'tingkat' => '2_kab_kota', 'induk' => '32']);
Wilayah::create(['kode' => '327202', 'nama_wilayah' => 'Cikole', 'tingkat' => '3_kec', 'induk' => '3272']);
Wilayah::create(['kode' => '3272021005', 'nama_wilayah' => 'Cisarua', 'tingkat' => '4_des_kel', 'induk' => '327202']);
Wilayah::create(['kode' => '327203', 'nama_wilayah' => 'Citamiang', 'tingkat' => '3_kec', 'induk' => '3272']);
Wilayah::create(['kode' => '3272031002', 'nama_wilayah' => 'Tipar', 'tingkat' => '4_des_kel', 'induk' => '327203']);
Wilayah::create(['kode' => '3272031004', 'nama_wilayah' => 'Gedong Panjang', 'tingkat' => '4_des_kel', 'induk' => '327203']);
Wilayah::create(['kode' => '33', 'nama_wilayah' => 'Jawa Tengah', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '3374', 'nama_wilayah' => 'Kota Semarang', 'tingkat' => '2_kab_kota', 'induk' => '33']);
Wilayah::create(['kode' => '337402', 'nama_wilayah' => 'Semarang Utara', 'tingkat' => '3_kec', 'induk' => '3374']);
Wilayah::create(['kode' => '3374021001', 'nama_wilayah' => 'Bandarharjo', 'tingkat' => '4_des_kel', 'induk' => '337402']);
Wilayah::create(['kode' => '3374021005', 'nama_wilayah' => 'Kuningan', 'tingkat' => '4_des_kel', 'induk' => '337402']);
Wilayah::create(['kode' => '3374021009', 'nama_wilayah' => 'Dadapsari', 'tingkat' => '4_des_kel', 'induk' => '337402']);
Wilayah::create(['kode' => '337404', 'nama_wilayah' => 'Gayamsari', 'tingkat' => '3_kec', 'induk' => '3374']);
Wilayah::create(['kode' => '3374041001', 'nama_wilayah' => 'Tambakrejo', 'tingkat' => '4_des_kel', 'induk' => '337404']);
Wilayah::create(['kode' => '3374041002', 'nama_wilayah' => 'Kaligawe', 'tingkat' => '4_des_kel', 'induk' => '337404']);
Wilayah::create(['kode' => '3375', 'nama_wilayah' => 'Kota Pekalongan', 'tingkat' => '2_kab_kota', 'induk' => '33']);
Wilayah::create(['kode' => '337501', 'nama_wilayah' => 'Pekalongan Barat', 'tingkat' => '3_kec', 'induk' => '3375']);
Wilayah::create(['kode' => '3375011008', 'nama_wilayah' => 'Pasir Kraton Kramat', 'tingkat' => '4_des_kel', 'induk' => '337501']);
Wilayah::create(['kode' => '337503', 'nama_wilayah' => 'Pekalongan Utara', 'tingkat' => '3_kec', 'induk' => '3375']);
Wilayah::create(['kode' => '3375031003', 'nama_wilayah' => 'Kandang Panjang', 'tingkat' => '4_des_kel', 'induk' => '337503']);
Wilayah::create(['kode' => '3375031004', 'nama_wilayah' => 'Panjang Wetan', 'tingkat' => '4_des_kel', 'induk' => '337503']);
Wilayah::create(['kode' => '3375031008', 'nama_wilayah' => 'Pabean', 'tingkat' => '4_des_kel', 'induk' => '337503']);
Wilayah::create(['kode' => '3375031009', 'nama_wilayah' => 'Bandengan', 'tingkat' => '4_des_kel', 'induk' => '337503']);
Wilayah::create(['kode' => '35', 'nama_wilayah' => 'Jawa Timur ', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '3575', 'nama_wilayah' => 'Kota Pasuruan', 'tingkat' => '2_kab_kota', 'induk' => '35']);
Wilayah::create(['kode' => '357504', 'nama_wilayah' => 'Panggungrejo', 'tingkat' => '3_kec', 'induk' => '3575']);
Wilayah::create(['kode' => '3575041003', 'nama_wilayah' => 'Trajeng', 'tingkat' => '4_des_kel', 'induk' => '357504']);
Wilayah::create(['kode' => '3575041005', 'nama_wilayah' => 'Kebonsari', 'tingkat' => '4_des_kel', 'induk' => '357504']);
Wilayah::create(['kode' => '3575041006', 'nama_wilayah' => 'Mayangan', 'tingkat' => '4_des_kel', 'induk' => '357504']);
Wilayah::create(['kode' => '3575041007', 'nama_wilayah' => 'Ngemplakrejo', 'tingkat' => '4_des_kel', 'induk' => '357504']);
Wilayah::create(['kode' => '36', 'nama_wilayah' => 'Banten', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '3673', 'nama_wilayah' => 'Kota Serang', 'tingkat' => '2_kab_kota', 'induk' => '36']);
Wilayah::create(['kode' => '367301', 'nama_wilayah' => 'Serang', 'tingkat' => '3_kec', 'induk' => '3673']);
Wilayah::create(['kode' => '3673011011', 'nama_wilayah' => 'Terondol', 'tingkat' => '4_des_kel', 'induk' => '367301']);
Wilayah::create(['kode' => '367302', 'nama_wilayah' => 'Kasemen', 'tingkat' => '3_kec', 'induk' => '3673']);
Wilayah::create(['kode' => '3673021004', 'nama_wilayah' => 'Warung Jaud', 'tingkat' => '4_des_kel', 'induk' => '367302']);
Wilayah::create(['kode' => '3673021009', 'nama_wilayah' => 'Kilasah', 'tingkat' => '4_des_kel', 'induk' => '367302']);
Wilayah::create(['kode' => '3673021011', 'nama_wilayah' => 'Margaluyu', 'tingkat' => '4_des_kel', 'induk' => '367302']);
Wilayah::create(['kode' => '367304', 'nama_wilayah' => 'Curug', 'tingkat' => '3_kec', 'induk' => '3673']);
Wilayah::create(['kode' => '3673041005', 'nama_wilayah' => 'Cilaku', 'tingkat' => '4_des_kel', 'induk' => '367304']);
Wilayah::create(['kode' => '367305', 'nama_wilayah' => 'Cipojok Jaya', 'tingkat' => '3_kec', 'induk' => '3673']);
Wilayah::create(['kode' => '3673051001', 'nama_wilayah' => 'Cipocok Jaya', 'tingkat' => '4_des_kel', 'induk' => '367305']);
Wilayah::create(['kode' => '3673051003', 'nama_wilayah' => 'Penancangan', 'tingkat' => '4_des_kel', 'induk' => '367305']);
Wilayah::create(['kode' => '52', 'nama_wilayah' => 'Nusa Tenggara Barat', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '5272', 'nama_wilayah' => 'Kota Bima', 'tingkat' => '2_kab_kota', 'induk' => '52']);
Wilayah::create(['kode' => '527201', 'nama_wilayah' => 'Rasanae Barat', 'tingkat' => '3_kec', 'induk' => '5272']);
Wilayah::create(['kode' => '5272011001', 'nama_wilayah' => 'Paruga', 'tingkat' => '4_des_kel', 'induk' => '527201']);
Wilayah::create(['kode' => '5272011002', 'nama_wilayah' => 'Nae', 'tingkat' => '4_des_kel', 'induk' => '527201']);
Wilayah::create(['kode' => '5272011003', 'nama_wilayah' => 'Sarae', 'tingkat' => '4_des_kel', 'induk' => '527201']);
Wilayah::create(['kode' => '5272011004', 'nama_wilayah' => 'Tanjung', 'tingkat' => '4_des_kel', 'induk' => '527201']);
Wilayah::create(['kode' => '5272011014', 'nama_wilayah' => 'Dara', 'tingkat' => '4_des_kel', 'induk' => '527201']);
Wilayah::create(['kode' => '527203', 'nama_wilayah' => 'Asakota', 'tingkat' => '3_kec', 'induk' => '5272']);
Wilayah::create(['kode' => '5272031001', 'nama_wilayah' => 'Melayu', 'tingkat' => '4_des_kel', 'induk' => '527203']);
Wilayah::create(['kode' => '62', 'nama_wilayah' => 'Kalimantan Tengah', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '6203', 'nama_wilayah' => 'Kabupaten Kapuas', 'tingkat' => '2_kab_kota', 'induk' => '62']);
Wilayah::create(['kode' => '620301', 'nama_wilayah' => 'Selat', 'tingkat' => '3_kec', 'induk' => '6203']);
Wilayah::create(['kode' => '6203011007', 'nama_wilayah' => 'Selat Hilir', 'tingkat' => '4_des_kel', 'induk' => '620301']);
Wilayah::create(['kode' => '6203011008', 'nama_wilayah' => 'Selat Tengah', 'tingkat' => '4_des_kel', 'induk' => '620301']);
Wilayah::create(['kode' => '6203011009', 'nama_wilayah' => 'Selat Hulu', 'tingkat' => '4_des_kel', 'induk' => '620301']);
Wilayah::create(['kode' => '6203011010', 'nama_wilayah' => 'Selat Dalam', 'tingkat' => '4_des_kel', 'induk' => '620301']);
Wilayah::create(['kode' => '6203011021', 'nama_wilayah' => 'Selat Utara', 'tingkat' => '4_des_kel', 'induk' => '620301']);
Wilayah::create(['kode' => '6203011022', 'nama_wilayah' => 'Selat Barat', 'tingkat' => '4_des_kel', 'induk' => '620301']);
Wilayah::create(['kode' => '6271', 'nama_wilayah' => 'Kota Palangkaraya', 'tingkat' => '2_kab_kota', 'induk' => '62']);
Wilayah::create(['kode' => '627101', 'nama_wilayah' => 'Pahandut', 'tingkat' => '3_kec', 'induk' => '6271']);
Wilayah::create(['kode' => '6271011001', 'nama_wilayah' => 'Pahandut', 'tingkat' => '4_des_kel', 'induk' => '627101']);
Wilayah::create(['kode' => '6271011005', 'nama_wilayah' => 'Pahandut Seberang', 'tingkat' => '4_des_kel', 'induk' => '627101']);
Wilayah::create(['kode' => '63', 'nama_wilayah' => 'Kalimantan Selatan', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '6371', 'nama_wilayah' => 'Kota Banjarmasin', 'tingkat' => '2_kab_kota', 'induk' => '63']);
Wilayah::create(['kode' => '637101', 'nama_wilayah' => 'Banjarmasin Selatan', 'tingkat' => '3_kec', 'induk' => '6371']);
Wilayah::create(['kode' => '6371011007', 'nama_wilayah' => 'Murung Raya', 'tingkat' => '4_des_kel', 'induk' => '637101']);
Wilayah::create(['kode' => '6371011008', 'nama_wilayah' => 'Kelayan Timur', 'tingkat' => '4_des_kel', 'induk' => '637101']);
Wilayah::create(['kode' => '637102', 'nama_wilayah' => 'Banjarmasin Timur', 'tingkat' => '3_kec', 'induk' => '6371']);
Wilayah::create(['kode' => '6371021003', 'nama_wilayah' => 'Karang Mekar', 'tingkat' => '4_des_kel', 'induk' => '637102']);
Wilayah::create(['kode' => '637103', 'nama_wilayah' => 'Banjarmasin Barat', 'tingkat' => '3_kec', 'induk' => '6371']);
Wilayah::create(['kode' => '6371031009', 'nama_wilayah' => 'Basirih', 'tingkat' => '4_des_kel', 'induk' => '637103']);
Wilayah::create(['kode' => '73', 'nama_wilayah' => 'Sulawesi Selatan', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '7308', 'nama_wilayah' => 'Kabupaten Bone', 'tingkat' => '2_kab_kota', 'induk' => '73']);
Wilayah::create(['kode' => '730823', 'nama_wilayah' => 'Tanete Riattang Timur', 'tingkat' => '3_kec', 'induk' => '7308']);
Wilayah::create(['kode' => '7308231001', 'nama_wilayah' => 'Bajoe', 'tingkat' => '4_des_kel', 'induk' => '730823']);
Wilayah::create(['kode' => '7308231003', 'nama_wilayah' => 'Panyula', 'tingkat' => '4_des_kel', 'induk' => '730823']);
Wilayah::create(['kode' => '7308231007', 'nama_wilayah' => 'Toro', 'tingkat' => '4_des_kel', 'induk' => '730823']);
Wilayah::create(['kode' => '7308231008', 'nama_wilayah' => 'Lonrae', 'tingkat' => '4_des_kel', 'induk' => '730823']);
Wilayah::create(['kode' => '7371', 'nama_wilayah' => 'Kota Makassar', 'tingkat' => '2_kab_kota', 'induk' => '73']);
Wilayah::create(['kode' => '737101', 'nama_wilayah' => 'Mariso', 'tingkat' => '3_kec', 'induk' => '7371']);
Wilayah::create(['kode' => '7371011004', 'nama_wilayah' => 'Lette', 'tingkat' => '4_des_kel', 'induk' => '737101']);
Wilayah::create(['kode' => '7371011005', 'nama_wilayah' => 'Penambungan', 'tingkat' => '4_des_kel', 'induk' => '737101']);
Wilayah::create(['kode' => '737106', 'nama_wilayah' => 'Bontoala', 'tingkat' => '3_kec', 'induk' => '7371']);
Wilayah::create(['kode' => '7371061006', 'nama_wilayah' => 'Layang', 'tingkat' => '4_des_kel', 'induk' => '737106']);
Wilayah::create(['kode' => '737107', 'nama_wilayah' => 'Tallo', 'tingkat' => '3_kec', 'induk' => '7371']);
Wilayah::create(['kode' => '7371071015', 'nama_wilayah' => 'Bunga Eja Beru', 'tingkat' => '4_des_kel', 'induk' => '737107']);
Wilayah::create(['kode' => '737110', 'nama_wilayah' => 'Tamalate', 'tingkat' => '3_kec', 'induk' => '7371']);
Wilayah::create(['kode' => '7371101004', 'nama_wilayah' => 'Mangasa', 'tingkat' => '4_des_kel', 'induk' => '737110']);
Wilayah::create(['kode' => '7371101009', 'nama_wilayah' => 'Parang Tambung', 'tingkat' => '4_des_kel', 'induk' => '737110']);
Wilayah::create(['kode' => '7373', 'nama_wilayah' => 'Kota Palopo', 'tingkat' => '2_kab_kota', 'induk' => '73']);
Wilayah::create(['kode' => '737301', 'nama_wilayah' => 'Wara Timur', 'tingkat' => '3_kec', 'induk' => '7373']);
Wilayah::create(['kode' => '7373011003', 'nama_wilayah' => 'Pontap', 'tingkat' => '4_des_kel', 'induk' => '737301']);
Wilayah::create(['kode' => '7373011007', 'nama_wilayah' => 'Ponjalae', 'tingkat' => '4_des_kel', 'induk' => '737301']);
Wilayah::create(['kode' => '737302', 'nama_wilayah' => 'Wara Utara', 'tingkat' => '3_kec', 'induk' => '7373']);
Wilayah::create(['kode' => '7373021007', 'nama_wilayah' => 'Penggoli', 'tingkat' => '4_des_kel', 'induk' => '737302']);
Wilayah::create(['kode' => '74', 'nama_wilayah' => 'Sulawesi Tenggara', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '7471', 'nama_wilayah' => 'Kota Kendari', 'tingkat' => '2_kab_kota', 'induk' => '74']);
Wilayah::create(['kode' => '747101', 'nama_wilayah' => 'Mandonga', 'tingkat' => '3_kec', 'induk' => '7471']);
Wilayah::create(['kode' => '7471011006', 'nama_wilayah' => 'Korumba', 'tingkat' => '4_des_kel', 'induk' => '747101']);
Wilayah::create(['kode' => '747105', 'nama_wilayah' => 'Kendari Barat', 'tingkat' => '3_kec', 'induk' => '7471']);
Wilayah::create(['kode' => '7471051008', 'nama_wilayah' => 'Dapu Dapura', 'tingkat' => '4_des_kel', 'induk' => '747105']);
Wilayah::create(['kode' => '747106', 'nama_wilayah' => 'Abeli', 'tingkat' => '3_kec', 'induk' => '7471']);
Wilayah::create(['kode' => '7471061010', 'nama_wilayah' => 'Petoaha', 'tingkat' => '4_des_kel', 'induk' => '747106']);
Wilayah::create(['kode' => '7471061013', 'nama_wilayah' => 'Tondonggeu', 'tingkat' => '4_des_kel', 'induk' => '747106']);
Wilayah::create(['kode' => '747107', 'nama_wilayah' => 'Wua-wua', 'tingkat' => '3_kec', 'induk' => '7471']);
Wilayah::create(['kode' => '7471071001', 'nama_wilayah' => 'Wua Wua', 'tingkat' => '4_des_kel', 'induk' => '747107']);
Wilayah::create(['kode' => '747109', 'nama_wilayah' => 'Puuwatu', 'tingkat' => '3_kec', 'induk' => '7471']);
Wilayah::create(['kode' => '7471091002', 'nama_wilayah' => 'Watulondo', 'tingkat' => '4_des_kel', 'induk' => '747109']);
Wilayah::create(['kode' => '81', 'nama_wilayah' => 'Maluku', 'tingkat' => '1_prov', 'induk' => '0']);
Wilayah::create(['kode' => '8171', 'nama_wilayah' => 'Kota Ambon', 'tingkat' => '2_kab_kota', 'induk' => '81']);
Wilayah::create(['kode' => '817102', 'nama_wilayah' => 'Sirimau', 'tingkat' => '3_kec', 'induk' => '8171']);
Wilayah::create(['kode' => '8171022003', 'nama_wilayah' => 'Batu Merah', 'tingkat' => '4_des_kel', 'induk' => '817102']);



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

$user86 =   User::create(['username' => 'ca1',  'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca1',    'email' => 'ca1@nusp.dev']);
$user87 =   User::create(['username' => 'ca2',  'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca2',    'email' => 'ca2@nusp.dev']);
$user88 =   User::create(['username' => 'ca3',  'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca3',    'email' => 'ca3@nusp.dev']);
$user89 =   User::create(['username' => 'ca4',  'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca4',    'email' => 'ca4@nusp.dev']);
$user90 =   User::create(['username' => 'ca5',  'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca5',    'email' => 'ca5@nusp.dev']);
$user91 =   User::create(['username' => 'ca6',  'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca6',    'email' => 'ca6@nusp.dev']);
$user92 =   User::create(['username' => 'ca7',  'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca7',    'email' => 'ca7@nusp.dev']);
$user93 =   User::create(['username' => 'ca8',  'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca8',    'email' => 'ca8@nusp.dev']);
$user94 =   User::create(['username' => 'ca9',  'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca9',    'email' => 'ca9@nusp.dev']);
$user95 =   User::create(['username' => 'ca10', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca10',   'email' => 'ca10@nusp.dev']);
$user96 =   User::create(['username' => 'ca11', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca11',   'email' => 'ca11@nusp.dev']);
$user97 =   User::create(['username' => 'ca12', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca12',   'email' => 'ca12@nusp.dev']);
$user98 =   User::create(['username' => 'ca13', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca13',   'email' => 'ca13@nusp.dev']);
$user99 =   User::create(['username' => 'ca14', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca14',   'email' => 'ca14@nusp.dev']);
$user100 =   User::create(['username' => 'ca15', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca15',   'email' => 'ca15@nusp.dev']);
$user101 =   User::create(['username' => 'ca16', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca16',   'email' => 'ca16@nusp.dev']);
$user102 =   User::create(['username' => 'ca17', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca17',   'email' => 'ca17@nusp.dev']);
$user103 =   User::create(['username' => 'ca18', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca18',   'email' => 'ca18@nusp.dev']);
$user104 =   User::create(['username' => 'ca19', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca19',   'email' => 'ca19@nusp.dev']);
$user105 =   User::create(['username' => 'ca20', 'password' => bcrypt(nusp_password('ca123')),  'nama_lengkap' => 'ca20',   'email' => 'ca20@nusp.dev']);

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

UserWilayahRole::create(['user_id' => $user66->id, 'kode_wilayah' => 2171, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user67->id, 'kode_wilayah' => 1274, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user68->id, 'kode_wilayah' => 1671, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user69->id, 'kode_wilayah' => 1771, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user70->id, 'kode_wilayah' => 1871, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user71->id, 'kode_wilayah' => 1506, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user72->id, 'kode_wilayah' => 6203, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user73->id, 'kode_wilayah' => 6271, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user74->id, 'kode_wilayah' => 6371, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user75->id, 'kode_wilayah' => 3272, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user76->id, 'kode_wilayah' => 3673, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user77->id, 'kode_wilayah' => 3374, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user78->id, 'kode_wilayah' => 3375, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user79->id, 'kode_wilayah' => 3575, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user80->id, 'kode_wilayah' => 7371, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user81->id, 'kode_wilayah' => 7308, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user82->id, 'kode_wilayah' => 7373, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user83->id, 'kode_wilayah' => 7471, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user84->id, 'kode_wilayah' => 5272, 'role_id' => 3]);
UserWilayahRole::create(['user_id' => $user85->id, 'kode_wilayah' => 8171, 'role_id' => 3]);

UserWilayahRole::create(['user_id' => $user86->id, 'kode_wilayah' => 2171, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user87->id, 'kode_wilayah' => 1274, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user88->id, 'kode_wilayah' => 1671, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user89->id, 'kode_wilayah' => 1771, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user90->id, 'kode_wilayah' => 1871, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user91->id, 'kode_wilayah' => 1506, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user92->id, 'kode_wilayah' => 6203, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user93->id, 'kode_wilayah' => 6271, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user94->id, 'kode_wilayah' => 6371, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user95->id, 'kode_wilayah' => 3272, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user96->id, 'kode_wilayah' => 3673, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user97->id, 'kode_wilayah' => 3374, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user98->id, 'kode_wilayah' => 3375, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user99->id, 'kode_wilayah' => 3575, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user100->id, 'kode_wilayah' => 7371, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user101->id, 'kode_wilayah' => 7308, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user102->id, 'kode_wilayah' => 7373, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user103->id, 'kode_wilayah' => 7471, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user104->id, 'kode_wilayah' => 5272, 'role_id' => 1]);
UserWilayahRole::create(['user_id' => $user105->id, 'kode_wilayah' => 8171, 'role_id' => 1]);



    }
}

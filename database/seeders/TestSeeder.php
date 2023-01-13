<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

 
class TestSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal A',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
            'tipe_soal_id' => '1',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal B',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
            'tipe_soal_id' => '1',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal C',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
            'tipe_soal_id' => '1',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal D',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
            'tipe_soal_id' => '1',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal E',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
            'tipe_soal_id' => '1',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal F',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
            'tipe_soal_id' => '1',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal G',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
            'tipe_soal_id' => '1',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal H',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
            'tipe_soal_id' => '1',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe RMIB Soal I',
            'deskripsi' => ' pilih 3 saja',
            'durasi_detik' => '120',
            'tipe_soal_id' => '1',
        ]);

        DB::table('test')->insert([
            'name' => 'Tipe Gambar Soal A',
            'deskripsi' => ' pilih 1 gambar',
            'durasi_detik' => '120',
            'tipe_soal_id' => '2',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Gambar Soal B',
            'deskripsi' => ' pilih 1 gambar',
            'durasi_detik' => '120',
            'tipe_soal_id' => '2',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Gambar Soal C',
            'deskripsi' => ' pilih 1 gambar',
            'durasi_detik' => '120',
            'tipe_soal_id' => '2',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Gambar Soal D',
            'deskripsi' => ' pilih 1 gambar',
            'durasi_detik' => '120',
            'tipe_soal_id' => '2',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Gambar Soal E',
            'deskripsi' => ' pilih 1 gambar',
            'durasi_detik' => '120',
            'tipe_soal_id' => '2',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Gambar Soal F',
            'deskripsi' => ' pilih 1 gambar',
            'durasi_detik' => '120',
            'tipe_soal_id' => '2',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Gambar Soal G',
            'deskripsi' => ' pilih 1 gambar',
            'durasi_detik' => '120',
            'tipe_soal_id' => '2',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Gambar Soal H',
            'deskripsi' => ' pilih 1 gambar',
            'durasi_detik' => '120',
            'tipe_soal_id' => '2',
        ]);

        DB::table('test')->insert([
            'name' => 'Tipe Gambar Soal I',
            'deskripsi' => ' pilih 1 gambar',
            'durasi_detik' => '120',
            'tipe_soal_id' => '2',
        ]);

        DB::table('test')->insert([
            'name' => 'Tipe Holland Soal A',
            'deskripsi' => ' Saya Suka Mempraktekan Hal-Hal Yang Pernah Saya Baca',
            'durasi_detik' => '120',
            'tipe_soal_id' => '3',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Holland Soal B',
            'deskripsi' => ' Saya Suka Mencari Barang Yang Hilang',
            'durasi_detik' => '120',
            'tipe_soal_id' => '3',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Holland Soal C',
            'deskripsi' => ' Saya Menyukai sesuatu yag punya ciri khas berbeda',
            'durasi_detik' => '120',
            'tipe_soal_id' => '3',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Holland Soal D',
            'deskripsi' => ' Saya Suka Berada Di tempat Umum',
            'durasi_detik' => '120',
            'tipe_soal_id' => '3',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Holland Soal E',
            'deskripsi' => ' Saya Senang Apabila Orang Lain Mendengarkan Perkataan Saya',
            'durasi_detik' => '120',
            'tipe_soal_id' => '3',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Holland Soal F',
            'deskripsi' => ' Saya Menyukai Pengerjaan yang Berhubungan dengan Pengecekan dan Pencocokan Data',
            'durasi_detik' => '120',
            'tipe_soal_id' => '3',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Holland Soal G',
            'deskripsi' => ' Saya Suka Memperbaiki Peralatan Yang Rusak',
            'durasi_detik' => '120',
            'tipe_soal_id' => '3',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Holland Soal H',
            'deskripsi' => ' Saya Ingin Tahu Saya Besar',
            'durasi_detik' => '120',
            'tipe_soal_id' => '3',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Holland Soal I',
            'deskripsi' => ' Saya Suka Menyusun Kata-Kata Yang Berakhiran sama ataupun yang terdengar indah',
            'durasi_detik' => '120',
            'tipe_soal_id' => '3',
        ]);
        DB::table('test')->insert([
            'name' => 'Tipe Holland Soal J',
            'deskripsi' => ' Saya Suka Membuat Presentasi yang dapat mengesankan orang lain',
            'durasi_detik' => '120',
            'tipe_soal_id' => '3',
        ]);
    }
}
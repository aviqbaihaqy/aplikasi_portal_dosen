<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */
Auth::routes();

/**
 * KETIKA DIJALANKAN AKAN ERROR KARENA CONTROLLER BELUM DIBUAT, 
 * OLEH KARENA ITU MATIKAN `//` (JANGAN DIHAPUS) ROUTE YANG TIDAK DIKERJAKAN
 */

// 1, Apri Zaenal Arifin, 0755201130042,Gambar 4. Tampilan Menu Beranda & Gambar 5. Tampilan Submenu Biodata
// #tidak membutuhkan route, hanya membuat view yang disesuakn linknya dengan route

// 2, Muhammad Deni Setiawan, 0755201130083,FORM BIODATA
Route::get('/profile/biodata', 'ProfileController@biodata')->name('biodata');

// 3, Ahmad Mustanginudin, 2015150022,RIWAYAT PENDIDIKAN
Route::get('/profile/riwayat_pendidikan', 'ProfileController@riwayatPendidikan')->name('riwayat pendidikan');

// 4, Pratama Khoirul Fata, 2015150028,RIWAYAT KEPANGKATAN
Route::get('/profile/riwayat_kepangkatan', 'ProfileController@riwayatKepangkatan')->name('riwayat kepangkatan');

// 5, Asep Hidayat, 2015150030,RIWAYAT JABATAN
Route::get('/profile/riwayat_jabatan', 'ProfileController@riwayatJabatan')->name('riwayat jabatan');

// 6, M Arifin, 2015150035,RIWAYAT SERTIFIKASI
Route::get('/profile/riwayat_sertifikasi', 'ProfileController@riwayatSertifikasi')->name('riwayat sertifikasi');

// 7, Muhammad Iqbal Adnan, 2015150043,RIWAYAT MENGAJAR
Route::get('/profile/riwayat_mengajar', 'ProfileController@riwayatMengajar')->name('riwayat mengajar');

// 8, Alan Yudha Aditama, 2015150048,RIWAYAT PUBLIKASI
Route::get('/profile/riwayat_publikasi', 'ProfileController@riwayatPublikasi')->name('riwayat publikasi');

// 9, Firmansyah, 2015150060,Gambar 8. Contoh Tampilan Submenu Upload Nilai
Route::get('/nilai/upload', 'NilaiController@uploadNilai')->name('upload nilai');

// 10, Siti Nurlita Romadona, 2015150088,Gambar 9. Tampilan Submenu Daftar Nilai & Gambar 10. Contoh Hasil Tampilan data transkrip mahasiswa
Route::get('/nilai/list', 'NilaiController@listNilai')->name('daftar nilai');

// 11, Feni Yulianti, 2015150104,Gambar 11. Tampilan Detail Nilai Mahasiswa & Gambar 12. Tampilan Detail Histori Nilai
Route::get('/nilai/{id_mahasiswa}', 'NilaiController@detailNilaiMahasiswa')->name('detail nilai mahasiswa');
Route::get('/nilai/{id_mahasiswa}/edit', 'NilaiController@editNilaiMahasiswa')->name('edit nilai mahasiswa');

// 12, Itmam Assyu'by, 2015150105,Gambar 13. Tampilan Berita Acara Upload & Gambar 14. Contoh Tampilan Jadwal Mengajar
Route::get('/nilai/berita_acara', 'NilaiController@beritaAcara')->name('berita acara');
Route::get('/jadwal_mengajar', 'JadwalMengajarController@index')->name('jadwal mengajar');

// 13, Atho Arien Nugroho, 2015150114,Gambar 15. Tampilan Submenu Persetujuan KRS & Gambar 16. Tampilan Submenu Persetujuan KRS
Route::get('/perwalian', 'PerwalianController@index')->name('perwalian');

// 14, Munib Tahta Hidayatillah, 2015150120,Gambar 17. Contoh Tampilan KSM
Route::get('/perwalian/ksm', 'PerwalianController@showKsm')->name('tampilan ksm');

// 15, Avianto, 2015150126,Gambar 18. Contoh Tampilan Detail Validasi KRS
Route::get('/perwalian/validasi_krs', 'PerwalianController@showFormValidasiKrs')->name('validasi krs');

// 16, Muqorrobien Marufi, 2015157039,Gambar 19. Tampilan Detail Validasi - Penambahan Mata Kuliah yang disetujui Dosen Wali
Route::get('/perwalian/tambah_matakuliah', 'PerwalianController@showFormTambahMatakuliah')->name('tambah matakuliah');

// 17, Dwi Purnomo, 2016150033,Gambar 20. Tampilan Submenu Konsultasi & Gambar 21. Contoh Hasil Tampilan Konsultasi
Route::get('/perwalian/konsultasi', 'PerwalianController@showListKonsultasi')->name('list konsultasi');

// 18, Muh Bahrul Ulum, 2017157026,Gambar 22. Tampilan Menu Pencarian Data Mahasiswa & Gambar 23. Contoh Tampilan Pencarian Data Mahasiswa
Route::get('/perwalian/list_mahasiswa', 'PerwalianController@showListMahasiswa')->name('list mahasiswa');

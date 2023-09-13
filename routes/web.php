<?php


use App\Http\Controllers\AkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\AbsenmhsController;
use App\Http\Controllers\SuratIzinController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\TugasAkhirController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\AbsenInstansiController;
use App\Http\Controllers\MdataController;
use App\Http\Controllers\Nilai1Controller;
use App\Http\Controllers\Nilai2Controller;
use App\Models\AbsenInstansi;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::resource('mdata', MdataController::class);

Route::resource('akun', AkunController::class);
Route::resource('info', InfoController::class);
Route::resource('resume',ResumeController::class);
Route::resource('formulir',FormulirController::class);
Route::resource('absenmhs',AbsenmhsController::class, [
    'parameters' => ['absenmhs' => 'absenmhs']
]);
// Route::resource('suratizin', SuratIzinController::class);
Route::put('suratizin/updatestatus/{id_suratizin}', [SuratIzinController::class, 'updatestatus'])->name('suratizin.updatestatus');
Route::resource('suratizin', SuratIzinController::class);
Route::resource('jurnal',JurnalController::class);
Route::resource('tugasakhir',TugasAkhirController::class);
Route::resource('monitoring',MonitoringController::class);

Route::resource('nilai1',Nilai1Controller::class);
Route::resource('nilai2',Nilai2Controller::class);
Route::resource('absensi',AbsenInstansiController::class);


require __DIR__.'/auth.php';

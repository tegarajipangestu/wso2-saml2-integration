<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \WebServices\RumpunJabatanService;
use \WebServices\Rumpun;
use \WebServices\Jabatan;

class ExampleRumpunJabatanController extends Controller
{
    /**
     * Generate web service php classes
     */
    public function index()
    {
    }

    public function queryRumpun(Request $request)
    {
        $id = $request->input('id');
        $nama = $request->input('nama');
        $nomorUrut = $request->input('nomorUrut');
        //var_dump($id);
        //var_dump($nama);
        //var_dump($nomorUrut);
    	$service = new RumpunJabatanService();
		$request = new Rumpun($id, $nama, $nomorUrut);
		$response = $service->QueryRumpun($request);

        if ($response != null) {
    		$listRumpun = $response->getRumpun();

            foreach ($listRumpun as $rumpun) {
                echo 'ID: ' . $rumpun->getID() . '<br />';
                echo 'Nama: ' . $rumpun->getNama() . '<br />';
                echo 'Nomor urut: ' . $rumpun->getNomorUrut() . '<br />';
                echo '<br /><br />';
            }
        }
    }

    public function queryJabatan(Request $request)
    {
        $id = $request->input('id');
        $rumpunID = $request->input('rumpunID');
        $nama = $request->input('nama');
        $kualifikasi = $request->input('kualifikasi');
        $keterangan = $request->input('keterangan');
        $kode = $request->input('kode');
        $nilai = $request->input('nilai');

        $service = new RumpunJabatanService();
        $rumpun = null;
        if ($rumpunID != null) $rumpun = new Rumpun($rumpunID, null, null);
        $request = new Jabatan($id, $rumpun, $nama, $kualifikasi, $keterangan, $kode, $nilai);
        $response = $service->QueryJabatan($request);

        if ($response != null) {
            $listJabatan = $response->getJabatan();

            foreach ($listJabatan as $jabatan) {
                echo 'ID: ' . $jabatan->getID() . '<br />';
                echo 'Nama: ' . $jabatan->getNama() . '<br />';
                echo 'ID rumpun: ' . $jabatan->getRumpun()->getID() . '<br />';
                echo 'Nama rumpun: ' . $jabatan->getRumpun()->getNama() . '<br />';
                echo 'Kualifikasi: ' . $jabatan->getKualifikasi() . '<br />';
                echo 'Keterangan: ' . $jabatan->getKeterangan() . '<br />';
                echo 'Kode: ' . $jabatan->getKode() . '<br />';
                echo 'Nilai: ' . $jabatan->getNilai() . '<br />';
                echo '<br /><br />';
            }
        }
    }
}

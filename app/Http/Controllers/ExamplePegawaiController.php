<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use WebServices\PegawaiService;
use WebServices\Pegawai;
use WebServices\SKPD;

class ExamplePegawaiController extends Controller
{

    public function queryPegawai(Request $request)
    {
    	$nip = $request->input('nip');
    	$nama = $request->input('nama');
    	$golongan = $request->input('golongan');
    	$unitKerja = $request->input('unitKerja');
    	$pangkat = $request->input('pangkat');
    	$service = new PegawaiService();
		$request = new Pegawai($nip, $nama, $golongan, $unitKerja, $pangkat);
		$response = $service->QueryPegawai($request);

        if ($response != null) {
    		$listPegawai = $response->getPegawai();

            foreach ($listPegawai as $pegawai) {
                echo 'NIP: ' . $pegawai->getNIP() . '<br />';
                echo 'Nama: ' . $pegawai->getNama() . '<br />';
                echo 'Golongan: ' . $pegawai->getGolongan() . '<br />';
                echo 'Unit Kerja: ' . $pegawai->getUnitKerja() . '<br />';
                echo 'Pangkat: ' . $pegawai->getPangkat() . '<br />';
                echo '<br /><br />';
            }
        }

    }

    public function queryAtasan(Request $request)
    {
    	$nip = $request->input('nip');
    	$nama = $request->input('nama');
    	$golongan = $request->input('golongan');
    	$unitKerja = $request->input('unitKerja');
    	$pangkat = $request->input('pangkat');
    	$service = new PegawaiService();
		$request = new Pegawai($nip, $nama, $golongan, $unitKerja, $pangkat);
		$response = $service->queryAtasan($request);

        if ($response != null) {
    		$listPegawai = $response->getPegawai();

            foreach ($listPegawai as $pegawai) {
                echo 'NIP: ' . $pegawai->getNIP() . '<br />';
                echo 'Nama: ' . $pegawai->getNama() . '<br />';
                echo 'Golongan: ' . $pegawai->getGolongan() . '<br />';
                echo 'Unit Kerja: ' . $pegawai->getUnitKerja() . '<br />';
                echo 'Pangkat: ' . $pegawai->getPangkat() . '<br />';
                echo '<br /><br />';
            }
        }
    }

    public function querySKPD(Request $request)
    {
    	$id = $request->input('id');
    	$nama = $request->input('nama');
    	$service = new PegawaiService();
		$request = new SKPD($id, $nama);
		$response = $service->querySKPD($request);
		//var_dump($response);
		//die();

        if ($response != null) {
    		$listSKPD = $response["parameters"]->getSKPD();
			//var_dump($listSKPD);
			//die();

            foreach ($listSKPD as $skpd) {
                echo 'ID: ' . $skpd->getID() . '<br />';
                echo 'Nama: ' . $skpd->getNama() . '<br />';
                echo '<br /><br />';
            }
        }
    }

    public function queryPejabatBySKPD(Request $request)
    {
    	$id = $request->input('id');
    	$nama = $request->input('nama');
    	$service = new PegawaiService();
		$request = new SKPD($id, $nama);
		$response = $service->queryPejabatBySKPD($request);

        if ($response != null) {
    		$listPegawai = $response->getPegawai();

            foreach ($listPegawai as $pegawai) {
                echo 'NIP: ' . $pegawai->getNIP() . '<br />';
                echo 'Nama: ' . $pegawai->getNama() . '<br />';
                echo 'Golongan: ' . $pegawai->getGolongan() . '<br />';
                echo 'Unit Kerja: ' . $pegawai->getUnitKerja() . '<br />';
                echo 'Pangkat: ' . $pegawai->getPangkat() . '<br />';
                echo '<br /><br />';
            }
        }
    }
}

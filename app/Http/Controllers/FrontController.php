<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\donasi;

class FrontController extends Controller
{
    public function index() {
    	return view('welcome');
    }

    public function getDonasi() {
    	try {
			$Qdonasi 		= donasi::donasi()
			->orderBy('tanggal', 'desc')
			->orderBy('created_at', 'desc')
			->get();

			$data 	= array();
			$no 	= 0;
			$tot  	= 0;

			foreach($Qdonasi as $donasi) {
				$no++;
				$tot = $tot + $donasi->nominal;
				$row = array();

				$row[] = $no;
				$row[] = date('d M, Y', strtotime($donasi->tanggal));
				if ($donasi->jenis_donatur == 0) {
					$row[] = strtoupper($donasi->donatur);
				}else {
					$row[] = 'ANONYMOUS';
				}
				
				$row[] = 'Rp. '.number_format($donasi->nominal);

				$data[] = $row;

			}

			$output = array(
				'data'	=> $data,
				'tot'	=> 'Rp. '.number_format($tot),
			);

			return response()->json($output);
		} catch (\Exception $e) {
			dd($e->getMessage());
		}  
    }
}

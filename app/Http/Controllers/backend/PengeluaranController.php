<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\pengeluaran;
use Auth;
use DB;

class PengeluaranController extends Controller
{
    public function index() {
    	$data['jsInclude'] = url('/'.'js/backend/pengeluaran.js?version='.mt_rand(1, 100));
    	return view('backend.pengeluaran')->with($data);
    }

    public function getData() {
    	try {
			$Qpengeluaran 		= pengeluaran::pengeluaran()
			->orderBy('id', 'asc')
			->get();

			$data 	= array();
			$no 	= 0;

			foreach($Qpengeluaran as $pengeluaran) {
				$no++;
				$row = array();

				$row[] = $no;
				$row[] = date('d M, Y', strtotime($pengeluaran->tanggal));
				$row[] = 'Rp. '.number_format($pengeluaran->debet);
				$row[] = 'Rp. '.number_format($pengeluaran->kredit);
				$row[] = 'Rp. '.number_format($pengeluaran->saldo);
				$row[] = $pengeluaran->keterangan;
				$row[] = $pengeluaran->create_user;
				$row[] = '
				<button type="button" data="'.base64_encode($pengeluaran->id).'" class="btn btn-danger item-hapus"><i class="fa fa-trash"></i> Hapus</button>';

				$data[] = $row;

			}

			$output = array(
				'data'	=> $data,
			);

			return response()->json($output);
		} catch (\Exception $e) {
			dd($e->getMessage());
		}  
    }

    public function store(Request $request) {
    	try {
    		$QLastSaldo 			= DB::table('tb_pengeluaran')->latest('id')->first();
    		if (!empty($QLastSaldo)) {
    			$saldo 				= $QLastSaldo->saldo;
    		}else {
    			$saldo 				= 0;
    		}

    		$data               	= new pengeluaran;
    		$jenis 					= strip_tags($request->jenis);
    		// 1 = Debit; 0 = Kredit
    		if ($jenis == 1) {
    			$data->debet 		= strip_tags($request->jumlah);
    			$data->kredit 		= 0;
    			$data->saldo 		= $saldo + strip_tags($request->jumlah);
    		}else {
    			$data->debet 		= 0;
    			$data->kredit 		= strip_tags($request->jumlah);
    			$data->saldo 		= $saldo - strip_tags($request->jumlah);
    		}

			$data->keterangan 		= strip_tags($request->keterangan);
			$data->tanggal 			= strip_tags($request->tanggal);
			$data->create_user 		= Auth::user()->name;
			$query = $data->save();

			return redirect()->back()
			->with('response','swalSuccess()');
		}catch (\Exception $e) {
			return redirect()->back()
			->with('response', 'swalError()')
			->with('error_message', $e->getMessage());
		}
    }

    public function destroy(Request $request) {
    	$QLastSaldo 			= DB::table('tb_pengeluaran')->latest('id')->first();
    	$idLast 				= $QLastSaldo->id;

    	if ($idLast != base64_decode($request->id)) {
    		$result = array(
    			'result'	=> 0,
    			'message'	=> 'Anda hanya bisa menghapus data paling akhir',
    		);
    	}else {
    		$data   = pengeluaran::find(base64_decode($request->id));
			$query 	= $data->ForceDelete();

			if ($query) {
				$result = array(
					'result'	=> 1,
					'message'	=> 'Berhasil hapus data',
				);
			}else {
				$result = array(
					'result'	=> 0,
					'message'	=> 'Gagal hapus data',
				);
			}
    	}

    	
		return response()->json($result);
    }
}

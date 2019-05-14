<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\donasi;
use Auth;
use Telegram;

class DonasiController extends Controller
{
    public function index() {
    	$data['jsInclude'] = 'js/backend/donasi.js?version='.mt_rand(1, 100);
    	return view('backend.donasi')->with($data);
    }

    public function getData() {
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
				$row[] = $donasi->create_user;
				$row[] = '<button type="button" data="'.base64_encode($donasi->id).'" nama="'.$donasi->donatur.'" jenis="'.$donasi->jenis_donatur.'" nominal="'.$donasi->nominal.'" tanggal="'.$donasi->tanggal.'" class="btn btn-info item-edit"><i class="fa fa-pencil"></i> Edit</button>
				<button type="button" data="'.base64_encode($donasi->id).'" class="btn btn-danger item-hapus"><i class="fa fa-trash"></i> Hapus</button>';

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

    public function store(Request $request) {
    	try {
			$data               	= new donasi;
			$data->jenis_donatur 	= strip_tags($request->jenis);
			$data->donatur     	 	= strip_tags($request->nama);
			$data->nominal 			= strip_tags($request->jumlah);
			$data->tanggal 			= strip_tags($request->tanggal);
			$data->create_user 		= Auth::user()->name;
			$query = $data->save();

			if ($request->jenis == 1) {
				$nama = 'ANONYMOUS';
			}else {
				$nama = strtoupper($request->nama);
			}

			if ($query) {
				$Qdonasi 		= donasi::groupBy('create_user')
    			->selectRaw('sum(nominal) as tot, create_user')
    			->get();

    			$Qtot 		= donasi::donasi()
    			->sum('nominal');

    			$donasiAdmin = '';
    			foreach($Qdonasi as $donasi) {
					$donasiAdmin .= "Donasi Pada Rekening ".$donasi->create_user." : Rp. ".number_format($donasi->tot)."\n";
				}

				// Send Telegram Message
				$text = "<code>UPDATE DONASI GERABAH</code>\n"
				. "\n"
				. "Alhamdulilah ".$nama." telah mendonasikan sebesar Rp. ".number_format($request->jumlah)."\n"
				. "\n"
				. $donasiAdmin
				. "\n"
				. "\n"
				. "Total Donasi Terkumpul : Rp. ".number_format($Qtot).""
				. "\n"
				. "\n"
				. "Cek Perkembangan GERABAH Melalui Website Resmi Dengan Mengklik Tautan Dibawah :"
				. "\n"
				. "\n"
				. "<a href='https://gerabah.iamhermawan.com'>LINK</a>";

				$send = Telegram::sendMessage([
					'chat_id' => env('TELEGRAM_CHANNEL_ID'),
					'parse_mode' => 'HTML',
					'text' => $text
				]);
			}

			return redirect()->back()
			->with('response','swalSuccess()');
		}catch (\Exception $e) {
			return redirect()->back()
			->with('response', 'swalError()')
			->with('error_message', $e->getMessage());
		}
    }

    public function destroy(Request $request) {
    	$data   = donasi::find(base64_decode($request->id));
		$query 	= $data->Delete();

		return response()->json($query);
    }

    public function update(Request $request) {
    	try {
    		$data 					= donasi::find(base64_decode($request->id));
	    	$data->donatur  		= strip_tags($request->nama);
	    	$data->jenis_donatur	= strip_tags($request->jenis);
	    	$data->nominal 			= strip_tags($request->jumlah);
	    	$data->tanggal 			= strip_tags($request->tanggal);
	    	$data->save();

	    	return redirect()->back()
			->with('response','swalSuccess()');
    	} catch (\Exception $e) {
    		return redirect()->back()
			->with('response', 'swalError()');
    	}
    	
    }
}

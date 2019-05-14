<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\donasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['totalDonasi']        = donasi::donasi()->sum('nominal');

        $Qdonasi                    = donasi::groupBy('create_user')
        ->selectRaw('sum(nominal) as tot, create_user')
        ->get();
        $data['donasiAdmin']        = $Qdonasi;

        $Qdonatur                   = donasi::select(['donatur'])
        ->count();
        $data['donatur']            = $Qdonatur;
        // ->groupBy('donatur')
        // ->get();

        // $jml = 0;
        // foreach($Qdonatur as $donatur) {
        //     $jml++;
        // }
        // $data['donatur']            = $jml;

        $Qchart                     = donasi::groupBy('tanggal')
        ->selectRaw('sum(nominal) as tot, tanggal')
        ->orderBy('tanggal', 'asc')
        ->get();

        $raw = array();

        foreach($Qchart as $chart) {
            array_push($raw, array(
                'tot'       => $chart->tot,
                'tanggal'   => date('d M Y', strtotime($chart->tanggal)),
            ));
        }

        $data['charts']               = $raw;

        return view('backend.home')->with($data);
    }
}

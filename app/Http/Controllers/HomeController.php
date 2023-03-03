<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Montir;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user= new User();
        $montir = new Montir();

        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $transaksi = Transaksi::where('status','Boking')->whereBetween('tgl_boking', [$startOfMonth,$endOfMonth])->count();
        $transaksii = Transaksi::where('status','Cencel')->whereBetween('tgl_boking', [$startOfMonth,$endOfMonth])->count();
        $transaksiii = Transaksi::where('status','Selesai')->whereBetween('tgl_boking', [$startOfMonth,$endOfMonth])->count();
        // $transaksi = Transaksi::where('status','Selesai')->whereBetween('tgl_boking', [$startOfMonth,$endOfMonth])->sum('total');

        //chart
        $chartTransaksi = Transaksi::select(DB::raw("COUNT(*) as count"),
            DB::raw("MONTHNAME(tgl_boking) as month_name"))
                
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("month_name"))
                ->orderBy('id','ASC')
                ->pluck('count', 'month_name');

        $booking = Transaksi::select(DB::raw("COUNT(*) as count"),
            DB::raw("MONTHNAME(tgl_boking) as month_name"))
                ->where('status','Boking')
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("month_name"))
                ->orderBy('id','ASC')
                ->pluck('count', 'month_name');
        
        $cancel = Transaksi::select(DB::raw("COUNT(*) as count"),
        DB::raw("MONTHNAME(created_at) as month_name"))
            ->where('status','Cencel')
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("month_name"))
            ->orderBy('id','ASC')
            ->pluck('count', 'month_name');

        $selesai = Transaksi::select(DB::raw("COUNT(*) as count"),
        DB::raw("MONTHNAME(created_at) as month_name"))
            ->where('status','Selesai')
            ->whereYear('created_at', date('Y M D'))
            ->groupBy(DB::raw("month_name"))
            ->orderBy('id','ASC')
            ->pluck('count', 'month_name');

        $labels = $chartTransaksi->keys();
        $cancels = $cancel->values();
        $bookings = $booking->values();
        $selesais = $selesai->values();
        $p = $chartTransaksi->values();

        return view('home',compact('user','montir','transaksi','transaksii','transaksiii','labels','cancels','bookings','selesais','p'));
    }
}

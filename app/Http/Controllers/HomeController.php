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
        $chartTransaksi = Transaksi::select(DB::raw("COUNT(tgl_boking) as count"),
            DB::raw("MONTHNAME(tgl_boking) as month_name"))
                
                ->whereYear('tgl_boking', date('Y'))
                ->groupBy(DB::raw("month_name"))
                ->orderBy('tgl_boking','ASC')
                ->pluck('count', 'month_name');

        // $booking = Transaksi::select(DB::raw("COUNT(tgl_boking) as count"),
        //     DB::raw("MONTHNAME(tgl_boking) as month_name"))
        //     ->where('status','Boking')
        //     ->whereYear('tgl_boking', date('Y'))
        //     ->groupBy(DB::raw("month_name"))
        //     ->orderBy('tgl_boking','ASC')
        //     ->pluck('count', 'month_name');
        
        $booking = Transaksi::select(\DB::raw("COUNT(*) as count"))
        ->where('status','Boking')
                    ->whereYear('tgl_boking', date('Y'))
                    ->groupBy(\DB::raw("Month(tgl_boking)"))
                    ->pluck('count');
        
        $cancel = Transaksi::select(DB::raw("COUNT(*) as count"),
        DB::raw("MONTHNAME(tgl_boking) as month_name"))
            ->where('status','Cencel')
            ->whereYear('tgl_boking', date('Y'))
            ->groupBy(DB::raw("month_name"))
            ->orderBy('tgl_boking','ASC')
            ->pluck('count', 'month_name');

        $selesai = Transaksi::select(DB::raw("COUNT(*) as count"),
        DB::raw("MONTHNAME(tgl_boking) as month_name"))
            ->where('status','Selesai')
            ->whereYear('tgl_boking', date('Y'))
            ->groupBy(DB::raw("month_name"))
            ->orderBy('tgl_boking','ASC')
            ->pluck('count', 'month_name');

        // test chart 2

        $total = Transaksi::select(DB::raw("CAST(SUM(total) as int) as total"))
            ->GroupBy(DB::raw("Month(tgl_boking)"))
            ->where('status', 'Selesai')
            ->whereYear('tgl_boking', date('Y'))
            ->pluck('total');

        $bulan = Transaksi::select(DB::raw("MONTHNAME(tgl_boking) as bulan"))
            ->GroupBy(DB::raw("MONTHNAME(tgl_boking)"))
            ->where('status', 'Selesai')
            // ->whereYear('tgl_boking', date('Y'))
            ->orderBy('tgl_boking', 'ASC')
            ->pluck('bulan');    

        //close
        $labels = $chartTransaksi->keys();
        $cancels = $cancel->values();
        $bookings = $booking->values();
        $selesais = $selesai->values();
        $p = $chartTransaksi->values();
        $label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];

        

        return view('home',compact('user','montir','transaksi','transaksii','transaksiii','labels','cancels','bookings','selesais','p','label','total','bulan'));
    }
}

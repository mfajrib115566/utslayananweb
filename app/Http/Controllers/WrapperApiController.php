<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function versi()
    {
        $json = Http::get('https://api.myquran.com/api/v1')->json();
        return response()->json($json);
    }

    public function pencarian()
    {
        $json = Http::get('https://api.myquran.com/v1/sholat/kota/cari/kuningan')->json();
        return response()->json($json);
    }

    public function kota()
    {
        $json = Http::get('https://api.myquran.com/v1/sholat/kota/id/1609')->json();
        return response()->json($json);
    }

    public function semuakota()
    {
        $json = Http::get('https://api.myquran.com/v1/sholat/kota/semua')->json();
        return response()->json($json);
    }

    public function jadwalhari()
    {
        $json = Http::get('https://api.myquran.com/v1/sholat/jadwal/1609/2021/06/23')->json();
        return response()->json($json);
    }
}

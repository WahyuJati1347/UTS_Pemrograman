<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
 
class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function DataFakultas()
    {
        $fakultas = DB::table('fakultas')->get();
        return view('DataFakultas', ['fakultas'=>$fakultas]);
    }
}
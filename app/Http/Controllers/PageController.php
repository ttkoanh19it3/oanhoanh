<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phong;
use App\khuktx;
use App\sinhvien;
use App\phieudangky;
use App\canboquanly;
use App\users;
use DB;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
       
        if(Auth::check()){
            view()->share('user',Auth::user());
            $bannerFromDB = DB::table('banner')->get();
            return view('pages.trangchu',compact('bannerFromDB'));
        }
    }
    public function admin_list_cb(){
        $manager = users::where('ltk','quanly')->get();
        return view('pages.admin_list_cb',['manager'=>$manager]);
    }
    public function admin_info_cb(){
        return view('pages.admin_info_cb');
    }
    public function admin_statics(){
        $list_nam = phieudangky::select('nam')->groupBy('nam')->get();
        $list_khu = khuktx::all();
        return view('pages.admin_statics',['list_nam'=>$list_nam,'list_khu'=>$list_khu]);
    }
    public function admin_add_cb(){
        $mscb = canboquanly::max('mscb');
        $mscb = $mscb + 1;
        return view('pages.admin_create_account',['mscb'=>$mscb]);
    }

    public function updateBanner(Request $res){
        if ($res->hasFile('filesTest')) {
            $file = $res->filesTest;
  
            if ( $file->getClientOriginalExtension() == "png" || $file->getClientOriginalExtension() == "jpg" ){
              
                 $file->move('upload', $file->getClientOriginalName());
                 DB::table('banner')->insert(
                    array('imgurl' => $file->getClientOriginalName())
                );
            }
        }
        return redirect()->route('edit.banner');
    }
    public function getUpdateBanner(){
        $banner = DB::table('banner')->get();
        return view('pages.edit_banner',compact('banner'));
    }

    public function deleteBanner($id){
        DB::table('banner')->where('id', $id)->delete();
        return redirect()->route('edit.banner');

    }
    #--------------------------------------------------
    public function editInfo($id)
    {
        $info = DB::find($id);
        return view('professions-edit', compact('info'));
    }

    public function updateInfo(Request $request, $id)
    {
        $info = DB::find($id);
        return view('professions-edit', compact('info'));
    }
    public function deleteInfo($id){
        DB::table('info')->where('id', $id)->delete();
        return redirect()->route('edit.Info');

    }
}
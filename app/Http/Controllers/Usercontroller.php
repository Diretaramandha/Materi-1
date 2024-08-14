<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Imports\UserImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class Usercontroller extends Controller
{
    function view(){
        $data['user'] = User::all();
        return view('welcome',$data);
    }

    function add(){
        
        return view('create');
    }

    function create(Request $request){
        $request->validate([
            'name'=>['required'],
            'email'=>['required','email'],
            'password'=>['required'],
        ]);
        
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        if ($user) {
            Alert::success('Berhasil','Data kamu Berhasil di Tambahkan')
            ->showConfirmButton('Mantap')
            ->autoClose();
        }else {
            Alert::error('Gagal','Data kamu gagal di Tambahkan')
            ->showConfirmButton('Alamak')
            ->autoClose();     
        }

        return redirect('/');

    }

    public function Viewimport(){
        return view('import');
    }
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        $import = Excel::import(new UserImport, $request->file('file'));

        if ($import) {
            Alert::success('Berhasil','Data kamu Berhasil di Tambahkan')
            ->showConfirmButton('Mantap')
            ->autoClose();
        }else {
            Alert::error('Gagal','Data kamu gagal di Tambahkan')
            ->showConfirmButton('Alamak')
            ->autoClose();     
        }

        return redirect('/');
    }

    public function export(){
        return Excel::download(new UserExport, 'users.xlsx');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    public function index(){
        $data = Menu::get();
        return view('menu.index',compact('data'));
    }
    public function cetakMenu(){
        return view('menu.cetak',['data' => Menu::all()]);
    }
    public function create(){
        $menu = null;
        return view('menu.create',compact('menu'));
    }
    public function store(Request $request){
        // Validasi input sebelum menyimpan ke database
        $request->validate([
            'nama_treatment' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);

        if($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'data_file/';
            $file->move($path, $filename);
        }
    
        // Simpan data jika validasi berhail
        DB::table('menu')->insert([
            'nama_treatment' => $request->nama_treatment,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'image' => $path.$filename,
            
        ]);
    
        return redirect()->route('data_menu')->with('success','Menu Treatment berhasil ditambahkan.');
    }
   
    public function edit($id){ 
        // $data = DB::table('pengalaman_kerja')->where('id',$id)->first();
        return view('menu.edit', ['data'=> Menu::where('id', $id)->get()]);
        // $data = Menu::find($id);
        // return view('menu.edit', compact('data'));
    }
    public function update($id, Request $request){
    // Validasi input sebelum menyimpan ke database
    $request->validate([
        'nama_treatment' => 'required',
        'harga' => 'required',
        'deskripsi' => 'required',
        'image' => 'nullable|mimes:png,jpg,jpeg,webp',
    ]);$request->validate([ 
        'nama_treatment' => 'required',
        'harga' => 'required',
        'deskripsi' => 'required',
        'image' => 'nullable|mimes:png,jpg,jpeg,webp',
    ]);

    $menu = Menu::find($id);

    if($request->has('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $filename = time().'.'.$extension;

        $path = 'data_file/';
        $file->move($path, $filename);

        if(File::exists($menu->image)) {
            File::delete($menu->image);
        }

        // $menu->image = $path.'/'.$filename;
    }

    // Simpan data jika validasi berhail
    DB::table('menu')->where('id', $id)->update([
        'nama_treatment' => $request->nama_treatment,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
        'image' => $path.$filename,
    ]); 

    return redirect()->route('data_menu')->with('success','Menu Treatment telah berhasil di update.');
    }
    public function destroy($id){
        DB::table('menu')->where('id', $id)->delete();
        return redirect()->route('data_menu')->with('success' ,"Menu Treatment berhasil di hapus");
    }
    
}

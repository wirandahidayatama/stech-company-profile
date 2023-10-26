<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banner = Banner::orderBy('id','desc')->get();
        // return view('admin.user.index',compact('user'));
        return view('admin.banner.index',
        [
            'banner' => $banner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'judul_headline' => 'required',
            'headline' => 'required',
            'description' => 'required',
            // 'urutan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data['urutan'] = 0;
        //proses upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_Name = time() . '.' . $gambar->getClientOriginalName();

            $storage ='uploads/banners/';
            $gambar->move($storage, $file_Name);
            $data['gambar'] = $storage . $file_Name;
        }else{
            $data['gambar'] = null;
        }

        Banner::create($data);
        Alert::success('Sukses', 'Data Berhasil Ditambah');
        return redirect()->route('banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $banner = Banner::find($id);

        $data = $request->validate([
            'judul_headline' => 'required',
            'headline' => 'required',
            'description' => 'required',
            // 'urutan' => 'required',
            // 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data['urutan'] = 0;
        //proses upload gambar
        if ($request->hasFile('gambar')) {

            if ($banner->gambar != null) {
                unlink(public_path($banner->gambar));
            }

            $gambar = $request->file('gambar');
            $currentDateTime = now()->format('Y-m-d');
            $file_Name = $currentDateTime . '.' . $gambar->getClientOriginalName();

            $storage ='uploads/banners/';
            $gambar->move($storage, $file_Name);
            $data['gambar'] = $storage . $file_Name;
        }else{
            $data['gambar'] = $banner->gambar;
        }

        $banner->update($data);
        Alert::success('Sukses', 'Data Berhasil Di Update');

        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $banner = Banner::find($id);

        if ($banner->gambar != null) {
            unlink(public_path($banner->gambar));
        }

        $banner->delete();
        Alert::success('Sukses', 'Data Berhasil Di Hapus');

        return redirect()->route('banner.index');
    }
}

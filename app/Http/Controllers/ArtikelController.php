<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel =  Artikel::all();
        $response = [
            'success' => true,
            'data' => $artikel,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         {
       $artikel = Artikel :: findOrFail ($id);
        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->foto = $request->foto;  
        $artikel->save();
        $response = [
            'succes' => true,
            'data' => $artikel,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $artikel = Artikel::findOrFail($id);
        $response = [
            'succes' => true,
            'data' => $artikel,
            'message' => 'berhasil'
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
          {
        {
        $artikel = Artikel :: findOrFail ($id);
        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->foto = $request->foto;  
        $artikel->save();
        $response = [
            'succes' => true,
            'data' => $artikel,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
        }

    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $artikel = Artikel :: findOrFail ($id)->delete();
         $response = [
              'succes' => true,
            'data' => $artikel,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
         
    }
    }


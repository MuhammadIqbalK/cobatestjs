<?php

namespace App\Http\Controllers;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class peminjamanAdminController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $listdatapnj = Peminjaman::all();
        if($request->ajax()){
            return datatables()->of($listdatapnj)
             ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->kode_peminjaman.'" data-original-title="Editrwt" class="edit btn btn-info btn-sm editrwt-post"><i class="far fa-edit"></i> Ubah Status</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->kode_peminjaman.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';  
                            $button .= '&nbsp;&nbsp;';
                           
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        
            ->make(true);

        }
        return view('beranda-admin-riwayat');   
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
        $id = $request->kode_peminjaman;
        
        $post   =   Peminjaman::updateOrCreate(['kode_peminjaman' => $id],
                    [   
                        
                        'id_barang' => $request->id_barang,
                        'id' => $request->id_user,
                        'nama_barang' => $request->nama_barang,
                        'nama_peminjam' => $request->nama_peminjam,
                        'jumlah' => $request->jumlah,
                        'status' =>$request->status,
                        'tanggal_kembali' => $request->tanggal_kembali,
                    ]); 

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('kode_peminjaman' => $id);
        $post  = Peminjaman::where($where)->first();
     
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peminjaman::find($id)->delete($id);
  
        return response()->json([
            'success' => 'Record deleted successfully!'
    ]);
    }
}

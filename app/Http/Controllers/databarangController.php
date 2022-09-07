<?php

namespace App\Http\Controllers;

use App\Models\Data_barang;
use Illuminate\Http\Request;

class databarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $listdatabr = Data_barang::all();
        if($request->ajax()){
            return datatables()->of($listdatabr)
             ->addIndexColumn() 
             ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-bs-toggle="tooltip"  data-id="'.$data->id_barang.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id_barang.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';  
                            
                            
                            return $button;
                        })
                        
                        
            ->addColumn('pinjambtn', function($data){
        
                            return '<a href="javascript:void(0)" data-bs-toggle="tooltip"  data-id="'.$data->id_barang.'" data-original-title="pinjam" class="edit btn btn-success btn-sm pinjam-post"><i class="far fa-edit"></i> Pinjam</a>';;
                        })
                        
                        ->rawColumns(['action','pinjambtn'])
                                     
            ->make(true);

        }

        if (auth()->user()->role == 'admin') {
            return view('beranda-admin-inventaris');

        }else if (auth()->user()->role == 'user') {
                return view('beranda-user-inventaris');
            }
        else  {
            return view('/');
        }
        //return view('beranda-admin-inventaris');
  
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
        $id = $request->id_barang;
        
        $post   =   Data_barang::updateOrCreate(['id_barang' => $id],
                    [
                        'nama_barang' => $request->nama_barang,
                        'jumlah' => $request->jumlah,
                        'Deskripsi' => $request->Deskripsi,
                    ]); 

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data_barang  $data_barang
     * @return \Illuminate\Http\Response
     */
    public function show(Data_barang $data_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data_barang  $data_barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id_barang' => $id);
        $post  = Data_barang::where($where)->first();
     
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data_barang  $data_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data_barang $data_barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data_barang  $data_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Data_barang::find($id)->delete($id);
  
        return response()->json([
            'success' => 'Record deleted successfully!'
    ]);
    }
}

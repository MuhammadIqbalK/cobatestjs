<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_perusahaan;

class dataperusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $listdatapt = Data_perusahaan::all();
        if($request->ajax()){
            return datatables()->of($listdatapt)
             ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';  

                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
            ->make(true);

        }
        if (auth()->user()->role == 'admin') {
            return view('beranda-admin');

        }else if (auth()->user()->role == 'user') {
                return view('beranda-user');
            }
        else  {
            return view('/');
        }
        // return view('/');
        
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
          $id = $request->id;
        
        $post   =   Data_perusahaan::updateOrCreate(['id' => $id],
                    [
                        'nama_perusahaan' => $request->nama_perusahaan,
                        'email' => $request->email,
                        'keterangan' => $request->keterangan,
                    ]); 

        return response()->json($post);
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
        $where = array('id' => $id);
        $post  = Data_perusahaan::where($where)->first();
     
        return response()->json($post);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

 Data_perusahaan::find($id)->delete($id);
  
    return response()->json([
        'success' => 'Record deleted successfully!'
]);



        //  $post = Data_perusahaan::where('id',$id)->delete();
     
        // return response()->json($post);
    }
}

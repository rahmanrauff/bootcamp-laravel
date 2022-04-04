<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Province;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $input = $request-> all();
        // $kelamin = $input["kelamin"] ?? "";
        // if ($kelamin == "")
        //     $dataPelanggan = Pelanggan::all();
        // else
        //     $dataPelanggan= Pelanggan::where("kelamin", $kelamin)->get();
       
        
    $dataPelanggan= Pelanggan::select("*");
    if(isset($input["kelamin"])){
        $dataPelanggan->where("kelamin". $input["kelamin"]);
    }
    if(isset($input["src"])){
        $dataPelanggan->where("nama", "like", "%".$input["src"]."%");
    }
        //
        $data= [
            "kelamin" => $input["kelamin"] ?? "",
            "daftarPelanggan"=>$dataPelanggan->paginate(10)
            ];
        return view('pelanggan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            "provinces" => Province::all()
        ];
        return view('pelanggan.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //melakukan validation
    // $validate = $request->validate(
    //     [
    //         'name'=> 'required|min:5|max:100',
    //         'kelamin'=>'required'
    //     ]
    // );

        //
        // $nama = $request->input("nama");
        // $nama = $request->input("alamt");
        // $nama = $request->input("phone");
    $input=$request->all();
       


    //untuk melakukan innsert data ke database
    
        $pelanggan = new Pelanggan();
        $pelanggan->nama = $input['nama'];
        $pelanggan->kelamin = $input['kelamin'];
        $pelanggan->alamat = $input['alamat'];
        $pelanggan->phone = $input['phone'];
        // $pelanggan->phone = $input['phone'];
        $pelanggan->save();
        return 'Pelanggan dengan nama '.$pelanggan->nama. 'Berhasil ditambahkan';
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
        // $data= Pelanggan::find($id);
        $data =[
            //SELECT * From pelanggan where id=$id
            "pelanggan" => Pelanggan::find($id)
        ];
        return view('pelanggan.show',$data);
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
        $data =[
            //SELECT * From pelanggan where id=$id
            "pelanggan" => Pelanggan::find($id),
            "provinces" => Province::all()
        ];
        return view('pelanggan.edit', $data);
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
        $input = $request->all();
        // dd($input);
        $pelanggan = Pelanggan::find($id);
        $pelanggan->nama = $input['nama'];
        $pelanggan->kelamin = $input['kelamin'];
        $pelanggan->phone = $input['phone'];
        $pelanggan->alamat = $input['alamat'];
        //UPDATE pelanggan SET ... WHERE id = $id
        $pelanggan->save();
    return 'Data berhasil dirubah';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //SELECT * FROM pelanggan where id=$id
        $pelanggan = Pelanggan::find($id);
        //DELETE pelanggan where id=$id
        $pelanggan->delete();
        return 'Pelanggan Berhasil dihapus';
    }
}

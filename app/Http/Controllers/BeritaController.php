<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\KategoriBerita;

class BeritaController extends Controller
{
    public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listBerita=Berita::all(); //select*from berita

    //blade
    return view('berita.index', compact('listBerita'));
    //return view(view: 'berita.index')->with('data',$listBerita);
	}

	public function show($id){
		//Eloquent
		//$Berita=Berita::where('id',$id)->first();//select*from berita whereid=$id limit 1
		$Berita=Berita::find($id);
		return view('Berita.show', compact('Berita'));
	}

	public function create(){
		$KategoriBerita=KategoriBerita::pluck('nama','id');
		return view('Berita.create', compact('KategoriBerita'));
	}

	public function store(Request $request){
		$input= $request->all();

		Berita::create($input);

		return redirect(route('berita.index'));
	}
}

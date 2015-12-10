<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Cerita;
use App\Buku;
use Illuminate\Support\Facades\Input;


class MainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array('data'=>Buku::all());
		return view('cover.all')->with($data);
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createstory()
	{
		return view('novel.add');
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storestory()
	{
		$post = new Cerita;
		$post->title = Input::get('title');
		$post->contents = Input::get('contents');

		$post->save();

		return redirect(url('novel'));
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showstory($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editstory($id)
	{
		$data = array('data'=>Cerita::find($id));

		return view('novel.edit')->with($data);
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updatestory($id)
	{
		$post = Cerita::find(Input::get('id'));
		$post->idpengguna = Auth::user()->id;
		$post->title = Input::get('title');
		$post->contents = Input::get('contents');

		$post->save();
		return redirect(url('novel'));
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deletestory($id)
	{
		DB::table('ceritas')->where('id',$id)->delete();
		return redirect('novel');
		//
	}

	public function createcover()
	{
		return view ('cover.add');
	}

	public function kirimcover()
	{
		$post = new Buku;
		// $post->idpengguna = Auth::user()->id;
		$post->title = Input::get('title');
		$post->description = Input::get('description');
		$post->slug = str_slug(input::get('title'));

		if(Input::hasfile('cover')){
			$cover = date("YmdHis")
			.uniqid()
			."."
			.Input::file('cover')->getClientOriginalExtension();

			Input::file('cover')->move(storage_path(),$cover);
			$post->cover = $cover;
		}

		$post->save();

		return redirect(url('cover'));

	}

}

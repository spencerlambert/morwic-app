<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = \Auth::user()->id;
        $his_assets = Asset::where(['user_id'=>$id,'ownership'=> 'his'])->paginate(1);
        $her_assets = Asset::where(['user_id'=>$id,'ownership'=> 'her'])->paginate(1);
        $community_assets = Asset::where(['user_id'=>$id,'ownership'=> 'community'])->paginate(1);
        return view('home',[ 'his_assets' => $his_assets, 'her_assets' => $her_assets, 'community_assets' => $community_assets]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('create');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset = Asset::find($id);

        return view('edit', compact('asset'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
      'image_url'=>'required',
      'accured_date'=>'required',
      'present_value'=> 'numeric',
      'accured_value' => 'numeric',
      'ownership'=> 'required|alpha',
      'purchased_prior_marriage'=> 'required|boolean',

      ]);
      $id = \Auth::user()->id;

      $asset = new Asset([
      'user_id' => $id,
      'image_url' => $request->get('image_url'),
      'accured_date'=>$request->get('accured_date'),
      'present_value'=> $request->get('present_value'),
      'accured_value' => $request->get('accured_value'),
      'ownership'=> $request->get('ownership'),
      'purchased_prior_marriage'=> $request->get('purchased_prior_marriage'),
      ]);
      $asset->save();
      return redirect('/home')->with('success', 'asset has been added');
    }

}

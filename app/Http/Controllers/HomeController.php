<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use DB;

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
        $his_assets = Asset::where(['user_id'=>$id,'ownership'=> 'his'])->orderBy('id', 'Desc')->paginate(1);
        $her_assets = Asset::where(['user_id'=>$id,'ownership'=> 'her'])->orderBy('id', 'Desc')->paginate(1);
        $community_assets = Asset::where(['user_id'=>$id,'ownership'=> 'community'])->orderBy('id', 'Desc')->paginate(1);
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
      //'image_url'=>'required',
      'accured_date'=>'required',
      'present_value'=> 'numeric',
      'accured_value' => 'numeric',
      //'ownership'=> 'required|alpha',
      'purchased_prior_marriage'=> 'required|boolean',
      'property_item_name' => 'required',
      'item_location' => 'required',
      'serial_number' => 'required',
      'make_model' => 'required',
      'upload_image_property_receipts' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

      ]);
      $imageName = time().'.'.request()->upload_image_property_receipts->getClientOriginalExtension();
        request()->upload_image_property_receipts->move(public_path('images'), $imageName);
        
      $id = \Auth::user()->id;
      $asset = new Asset([
      'user_id' => $id,
      //'image_url' => $request->get('image_url'),
      'accured_date'=>$request->get('accured_date'),
      'present_value'=> $request->get('present_value'),
      'accured_value' => $request->get('accured_value'),
      'ownership'=> $request->get('ownership'),
      'purchased_prior_marriage'=> $request->get('purchased_prior_marriage'),
      'property_item_name'=> $request->get('property_item_name'),
      'item_location'=> $request->get('item_location'),
      'serial_number'=> $request->get('serial_number'),
      'make_model'=> $request->get('make_model'),
      'notes'=> $request->get('notes'),
      'upload_image_property_receipts'=> $imageName,
      'other_ownership'=> $request->get('other_ownership'),
      ]);
      $asset->save();

      DB::statement("ALTER TABLE assets MODIFY COLUMN ownership ENUM('his', 'her', 'community','other')");
      DB::statement("ALTER TABLE assets ADD COLUMN other_ownership varchar(199)");
      DB::statement("ALTER TABLE assets DROP image_url ");
      
       
      return redirect('/home')->with('success', 'Asset has been added');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
     
      $request->validate([
      
      'accured_date'=>'required',
      'present_value'=> 'numeric',
      'accured_value' => 'numeric',
      //'ownership'=> 'required|alpha',
      'purchased_prior_marriage'=> 'required|boolean',
      'property_item_name' => 'required',
      'item_location' => 'required',
      'serial_number' => 'required',
      'make_model' => 'required',
      ]);
           
      $asset = Asset::find($id);
      $asset->property_item_name = $request->input('property_item_name');
      $asset->accured_date = $request->input('accured_date');
      $asset->present_value = $request->input('present_value');
      $asset->accured_value = $request->input('accured_value');
      $asset->ownership = $request->input('ownership');
      $asset->purchased_prior_marriage = $request->input('purchased_prior_marriage');
      $asset->item_location = $request->input('item_location');
      $asset->serial_number = $request->input('serial_number');
      $asset->make_model = $request->input('make_model');
      $asset->notes = $request->input('notes');
      $asset->other_ownership = $request->input('other_ownership');
       if($request->has('upload_image_property_receipts')){
        $imageName = time().'.'.request()->upload_image_property_receipts->getClientOriginalExtension();
        request()->upload_image_property_receipts->move(public_path('images'), $imageName);
      //$id = \Auth::user()->id;
     
      $asset->upload_image_property_receipts = $imageName;
    }
      
      $asset->save();
          
      return redirect('/home')->with('success', 'Asset has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $assets = Asset::findOrFail($id);
      $assets->delete();
      return redirect('/home')->with('success', 'Asset has been deleted');
    }

    

}

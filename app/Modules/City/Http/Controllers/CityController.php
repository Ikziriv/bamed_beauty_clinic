<?php

namespace App\Modules\City\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
	Modules\City\City,
	Http\Controllers\Controller
};

class CityController extends Controller
{
	// view.pages.menu.doctor.subdoctor.index
	public function index()
	{
		$data['page_title'] = 'Location';
		$data['city'] = City::all()->toArray();
		return view('pages.doctor.city.index', $data);
	}
	// view.pages.doctor.city.create
	public function create()
	{
		$data['page_title'] = 'Create Location';
		return view('pages.doctor.city.create', $data);
	}
	// post action
	public function store(Request $request)
	{
        $data = $this->validate(request(), [
            'name' => 'required',
            'tlp' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'address' => 'required'
        ]);

        $city = new City();
        $data = array(
            $city->name = $request->input('name'),
            $city->tlp = $request->input('tlp'),
            $city->lat = $request->input('lat'),
            $city->long = $request->input('long'),
            $city->address = $request->input('address')
        );
        $city->save($data);
        return redirect()->back()->with('success','Location has been saved');

	}
	// view.pages.doctor.city.edit
	public function edit($id)
	{
		$data['page_title'] = 'Edit Location';
		$data['city'] = City::findOrFail($id);
		return view('pages.doctor.city.edit', $data);
	}
	// post action
	public function update(Request $request, $id)
	{
        $data = $this->validate(request(), [
            'name' => 'required',
            'tlp' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'address' => 'required'
        ]);

        $city = City::find($id);

        $data = array(
            $city->name = $request->input('name'),
            $city->tlp = $request->input('tlp'),
            $city->lat = $request->input('lat'),
            $city->long = $request->input('long'),
            $city->address = $request->input('address')
        );
        $city->update($data);
        return redirect()->back()->with('success','Location has been updated');
	}
	// delete action
	public function destroy($id)
	{
        $city = City::findOrFail($id);
        $city->delete();

        return redirect()->back()->with('success','Location has been deleted');
	}
}

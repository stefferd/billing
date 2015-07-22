<?php namespace App\Http\Controllers;

use App\Hours;

/**
 * Class TimeController
 * @package Perscriptio\Http\Controllers
 */
class TimeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Hours::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $hour = new Hours();
        $hour->title = Request::input('company') . '-' . Request::input('project');
        $hour->description = Request::input('description');
        $hour->amount = Request::input('amount');
        $hour->user_id = Auth::user()->id;
        $hour->company_id = Request::input('company_id');

        if ($hour->save()) {
            return response()->json(array('success' => true));
        }
        return response()->json(array('succcess' => false));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Miles::find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

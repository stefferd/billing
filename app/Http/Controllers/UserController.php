<?php namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Json
	 */
	public function index()
	{
		$user = User::all();
		return $user;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Json
	 */
	public function create()
	{
		//
	}

	public function login(Request $request) {
		if (Auth::attempt(['email' => $request->input('email'), 'password' => bcrypt($request->input('password'))])) {
			$user = Auth::getUser();
			$response = array(
				'operation' => true,
				'message' => 'Login successfull',
				'user' => array(
					'name' => $user->name,
					'role' => $user->groups
				)
			);
			return response($response, 200);
		}
		$response = array(
			'operation' => false,
			'message' => 'Username and password not correct',
            'input' => $request->input('email')
		);
		return response($response, 400);
	}

	public function logout() {
		Auth::logout();
		$response = array(
			'operation' => true,
			'message' => 'Logout succesfull'
		);
		return response()->json($response);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Json
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Json
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Json
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Json
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Json
	 */
	public function destroy($id)
	{
		//
	}

}

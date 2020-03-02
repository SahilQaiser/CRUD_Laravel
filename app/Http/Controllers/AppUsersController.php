<?php

namespace App\Http\Controllers;

use App\AppUser;
use Illuminate\Http\Request;

class AppUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $appUsers = AppUser::all();
        // return view('users.index');

        $data['appUsers'] = AppUser::orderBy('id','desc')->paginate(10);
        return view('users.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'name'=>'required',
            'age'=>'required',
            'department'=>'required',
            'education_qual'=>'required',
            'gender'=>'required'
        ]);

        $appUser = new AppUser([
            'name' => $request->get('name'),
            'age' => $request->get('age'),
            'department' => $request->get('department'),
            'education_qual' => $request->get('education_qual'),
            'gender' => $request->get('gender')
        ]);
        $appUser->save();
        return redirect('/users')->with('success', 'User saved!');
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
        $user = AppUser::find($id);
        return view('users.edit', compact('user'));
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
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'department'=>'required',
            'education_qual'=>'required',
            'gender'=>'required'
        ]);

        $user = AppUser::find($id);
        $user->name =  $request->get('name');
        $user->age = $request->get('age');
        $user->gender = $request->get('gender');
        $user->education_qual = $request->get('education_qual');
        $user->department = $request->get('department');
        $user->save();

        return redirect('/users')->with('success', 'User updated!');
    }


    public function delete($id)
    {
        $user = AppUser::find($id);
        return view('users.delete', compact('user'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = AppUser::find($id);
        $user->delete();
        return redirect('/users')->with('success', 'User deleted!');
    }
}

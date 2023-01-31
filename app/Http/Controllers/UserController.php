<?php

namespace App\Http\Controllers;

use App\Models\Rols;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        $usersCount = User::all()->count();

        return view(
            'admin_components.users.index',
            [
                'users' => $users,
                'usersCount' =>  $usersCount
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rols::all();
        $usersCount = User::all()->count();
        return view(
            'admin_components.users.create',
            [
                'roles' => $roles,
                'usersCount' =>  $usersCount
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('pass');
        $user->role_id = $request->get('role_id');

        $user->save();

        return redirect('/dashboard/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $usersCount = User::all()->count();
        return view(
            'admin_components.users.show',

            [
                'user' => $user,
                
                'usersCount' =>  $usersCount
            ]
        );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Rols::all();
        $usersCount = User::all()->count();
        return view(
            'admin_components.users.edit',

            [
                'user' => $user,
                'roles' => $roles,
                'usersCount' =>  $usersCount
            ]
        );
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
        // $user = User::find($id);

        // $user->name = $request->get('name');
        // $user->email = $request->get('email');
        // $user->password = $request->get('pass');
        // $user->role_id = $request->get('role_id');

        // $user->save();

        $user = User::where('id', $id)->update(
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => $request->get('pass'),
                'role_id' => $request->get('role_id')
            ]
        );

        return redirect('/dashboard/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/dashboard/users');
    }
}

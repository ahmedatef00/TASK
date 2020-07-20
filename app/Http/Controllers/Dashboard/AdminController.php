<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the Dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('dashboard.users.index', compact('users'));
    }


    /**
     * Show the form for creating a new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.users.create');
    }


    /**
     * Store a newly created User in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $requestPayload = Validator::make($data->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
        ])->validate();

        $requestPayload['password'] = Hash::make($data['password']);
        User::create($requestPayload,);
        session()->flash('status', 'User has been created successfully!');
        return redirect('dashboard/users');
    }

    /**
     * Edit User
     *
     * @param User $user
     * @return void
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }



    /**
     * Update the specified User in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $user)
    {
        $requestPayload = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id, 'id')],
        ])->validate();

        $requestPayload['password'] = Hash::make($request['password']);

        $user->update($requestPayload);
        session()->flash('status', 'User has been updated successfully!');
        return redirect('dashboard/users');
    }


    /**
     * Remove the specified USER from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        
    }
}

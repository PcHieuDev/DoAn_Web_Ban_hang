<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');

        if (!empty($search)) {
            $users = User::where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('address', 'LIKE', '%' . $search . '%')
                ->orWhere('phone', 'LIKE', '%' . $search . '%')
                ->orWhere('email', 'LIKE', '%' . $search . '%')
                ->paginate(2);

            if ($users->isEmpty()) {
                $users = null; // Gán giá trị null để thông báo không tìm thấy
            }
        } else {
            $users = User::paginate(2);
        }

        return view('Admin.user', ['users' => $users, 'search' => $search]);
    }

   /* public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.edituser')->with('users', $user);
    }*/
    // edit user
    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.edituser')->with('users', $user);
    }


    // update user
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name     = $request->input('name');
        $user->email  = $request->input('email');
        $user->level    = $request->input('level');
        $user->address    = $request->input('address');
        $user->phone    = $request->input('phone');
        $user->save();
        return redirect('admin')->with('flash_message', 'User Updated!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin')->with('flash_message', 'User Deleted!');
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('Admin.show')->with('users', $user);
    }
    // store user
    public function store(Request $request)
    {
        $user = new User();
        $user->name     = $request->input('name');

        $user->email  = $request->input('email');
        $user->level    = $request->input('level');
        $user->address    = $request->input('address');
        $user->phone    = $request->input('phone');
        $user->save();
        return redirect('admin')->with('flash_message', 'User Added!');
    }





}



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
    // edit user
    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.edituser')->with('users', $user);
    }
    // update user
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user = User::find($id);
        $user->update($input);
        return redirect('admin')->with('flash_message', 'User Updated!');
    }
    // delete user
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin')->with('flash_message', 'User Deleted!');
    }
    // show info user
    public function show($id)
    {
        $user = User::find($id);
        return view('Admin.show')->with('users', $user);
    }

}



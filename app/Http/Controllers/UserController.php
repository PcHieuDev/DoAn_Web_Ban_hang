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

    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.edituser')->with('users', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect('admin')->with('success', 'User updated successfully');
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

}



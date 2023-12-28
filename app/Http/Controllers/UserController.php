<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(UserFormRequest $request, User $user)
    {
        $validatedData = $request->validated();

        $user->name = $validatedData['name'];
        $user->First_Name = $validatedData['First_Name'];
        $user->Last_Name = $validatedData['Last_Name'];
        $user->status = $validatedData['status'];
        $user->Location = $validatedData['Location'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->gender = $validatedData['gender'];

        // Menghapus foto profil lama jika ada
        if ($request->hasFile('profile_path')) {
            $path = 'uploads/profile_path/' . $user->profile_path;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('profile_path');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/profile_path', $filename);
            $user->profile_path = $filename;
        }

        $user->save();

        return redirect()->route('user.edit', $user->id)
            ->with('success', 'Profil berhasil diperbarui!');
    }
}


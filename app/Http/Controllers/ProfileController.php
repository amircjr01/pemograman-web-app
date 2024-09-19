<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();

        return view('profile', ['profile' => $profile]);
    }
    public function change_avatar(Request $request)
    { $request->validate([
        'avatar' => 'required|file|mimes:png,jpg|max:2048'
    ]);
    if ($request->hasFile('avatar')) {
        // Dapatkan profil dari database
        $profile = Profile::find($request->id);
        // Hapus file avatar lama jika ada
        $exists = Storage::disk('public')->exists('uploads/' . $profile->avatar);
        if ($profile && $profile->avatar && $exists) {
            Storage::disk('public')->delete('uploads/' . $profile->avatar);
        }
        // Simpan file avatar baru
        $fileName = time() . '.' . $request->file('avatar')->getClientOriginalExtension();
        $request->file('avatar')->storeAs('uploads', $fileName, 'public');
        $profile = Profile::find($request->id);
            // Update profil dengan avatar baru
            $profile->update([
                'avatar' => $fileName
            ]);
            return redirect()->back()->with('success', 'File berhasil diupload.');
        } else {
            return redirect()->back()->withErrors(['error' => 'File upload gagal.']);
        }
    }
}
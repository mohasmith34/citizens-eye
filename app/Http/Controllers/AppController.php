<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReportModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function showregister(){
        if(Auth::check()){
            return redirect('/list');
        }
        return view('register');
    }

    public function showlogin(){
        if(Auth::check()){
            return redirect('/list');
        }
        return view('login');
    }



    public function register(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        Auth::login($user);

        return redirect('/list');
    }



    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            
            Auth::login($user);
            return redirect('/list'); 
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }


    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }






    public function report(Request $request){

        $request->validate([
            'description' => 'required|string|max:1000',
            'category' => 'required|string',
            'location' => 'required|string|max:255',
            'images.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
            $path = $image->store('reports', 'public');
            $imagePaths[] = $path;
            }
        }


        ReportModel::create([
            'user_id' => Auth::id(),
            'description' => $request->description,
            'category' => $request->category,
            'location' => $request->location,
            'images' => json_encode($imagePaths),
        ]);

        return redirect('/list');

        
    }


    public function list(){
        $reports = Auth::user()->reports()->where('is_deleted', false)->latest()->paginate(10);
    
        return view('list', compact('reports'));
    }
    

    public function delete($id){
        $report = ReportModel::where('user_id', Auth::id())->findOrFail($id);
        $report->is_deleted = true;
        $report->save();

    return redirect()->back()->with('success', 'Report deleted.');
    }
    

    


}

<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use function Laravel\Prompts\alert;

class HomeController extends Controller
{
    public function home(){

            $profiles = Profile::latest()->simplePaginate(5)
            //->where('name', 'sai')
            ;
        return view("admin.index", compact('profiles'));
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){

        $request -> validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required | numeric',
            'file' => 'required',
        ]);
 
        $name = request('name');
        $email = request('email');
        $phone = request('phone');
        $file = request('file');
        if(request()->hasFile('file')){
            $extension = request('file')->extension();
            $filename = $file.'s profile_pdf'.time().'.'.$extension;
            $request->file->move(public_path('pdfs'), $filename);
        }

        Profile::create([
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "file" => $file,
        ]);

        return redirect()->route('home');
    }

    public function edit($id){
        $profile = Profile::find($id);
        return view('admin.edit', compact('profile'));
    }

    public function update(Request $req){
        $id = request('id');
        $profile = Profile::find($id);

        $req->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'file' => 'required',
        ]);

        $profile ->update([

            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'file' => request('file'),
        ]);

        return redirect()->route('home')->with('message', "data updated successfully");
    }

    public function delete($id){
        $profile = Profile::find($id);
        $profile ->delete();

        return Redirect()->route('home');
    }


}

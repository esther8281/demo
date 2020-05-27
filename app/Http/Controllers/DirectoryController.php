<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Directory;
use App\File;
use Illuminate\Http\Request;
use App\Http\Requests\CreateDirectoryRequest;
use App\Http\Requests\CreateFileRequest;

class DirectoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       // $directories = directories::paginate(1);
      $directories = Directory::all();
       return view('welcome',['directories' => $directories]);
    }

    public function create(CreateDirectoryRequest $request)
    {
      // dd($request->get('name'));
      $directory = new Directory([
        'name' => $request->get('name')
      ]);
      $directory->save();
      return redirect()->back();
    }

    public function show($id)
    {

       // $directories = D::where('is_admin',0)->paginate(1);
      $directory = Directory::find($id);
      $files = $directory->files;
       return view('directory_list',['directory' => $directory,'files' =>$files]);
    }

    public function addFile(Request $request,$id)
    {
      $file= File::create([
      'directory_id' => $id,
      ]);
       if($request->file('avatar')){
        $file->update([
            'avatar' => $request->file('avatar')->store('public/avatar'),
        ]);
       }
      return redirect()->back();
    }
    public function deleteDirectory($id)
    {
     
      $directory = Directory::find($id);
      $directory->files()->delete();
       return redirect()->back();
    }

    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Contracts\Session\Session;
use Symfony\Component\HttpFoundation\File\File;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index()
    {
        $projects =  Project::all();
        return view('project.index-project', compact('projects'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'description' => ['required'],
            'image' => ['required','mimes:jpeg,png,jpg,gif']
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error'=>$validator->errors()->toArray()]);
        } else {

            $data['name'] = $request->name;
            $data['description'] = $request->description;
            $data['link'] = $request->link;
            $data['status'] = 1;

            if ($image = $request->file('image')) {
                $destinationPath = 'image/projects';
                // $destinationPathThumbnail = 'image/projects/thumbnails';
                $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $imageName);
                // $image->move($destinationPathThumbnail, $imageName)->resize(50,50);
                $data['image'] = "$imageName";
            }

            Project::create($data);
            return response()->json(['result' => 'Product Created Successfully']);
        }
    }

    public function edit($id){
        $project = Project::find($id);
        return response()->json($project);
    }

    public function delete()
    {
        $id = request('id');
        $project = Project::find($id);
        $project->delete();
        return response()->json(['status' => 0,'result' => 'Product Deleted Successfully']);

        // $image_path = url('image/projects/' . $project->image);
        // if(File::exists($image_path)) {
        //     File::delete($image_path);
        // }
    }
}

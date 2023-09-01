<?php

namespace App\Http\Controllers;

use App\Models\product_model;
use Illuminate\Http\Request;

class product_controller extends Controller
{
    //display ressource
    public function index()
    {
        return view("index",compact("product_model"));
    }

    //display ressource
    public function create()
    {
        return view("create");
    }

    //Store
    public function store(Request $request)
    {
        $request = ([
            'nomproduit' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'image' => 'required|image|mimes:svg,png,jpeg,jpg,gif|max:2048'
        ]);

        $input = $request->all();

        if($image= $request->file['image'])
        {
            $destinationImage = "../../../../image";
            $profileImage = date('YMDHIS').".". 
            $image = move()
            $input['image'] = "$profileImage";
        }

        product_model->create($input);

        return redirect()->route('index')->with("Success","L'aout s'est fait avec succés");

    }

    //edit
    public function index()
    {

    }

    //destroy
    public function index()
    {

    }

    //Show
    public function index()
    {

    }

    //Update
    public function index()
    {

    }
}

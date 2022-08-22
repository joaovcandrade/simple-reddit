<?php

namespace App\Http\Controllers;

use App\Models\Reddit;
use Illuminate\Http\Request;
use App\Http\Requests\StoresubRedditRequest;
use App\Http\Requests\UpdatesubRedditRequest;
use Illuminate\Support\Facades\Validator;

class RedditController extends Controller
{
   
    public function linkar(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => ['required', 'max:30'],
            'owner' => ['required', 'max:30'],
            'description' => ['required', 'max:255'],
            'url' => ['required', 'max:255'],
        ]);

        if(!$validated->fails()){

            $reddit = new Reddit;
            $reddit->name = $request->name;
            $reddit->owner = $request->owner;
            $reddit->description = $request->description;
            $reddit->url = $request->url;
            $reddit->save();

            return response()->json([
                "message" => "Reddit linkado com sucesso"
            ], 200);
        }

        return response()->json([
            "message" => $validated->errors()->all()
        ], 500);

    }

    
}

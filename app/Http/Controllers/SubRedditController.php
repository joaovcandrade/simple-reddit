<?php

namespace App\Http\Controllers;

use App\Models\SubReddit;
use Illuminate\Http\Request;
use App\Http\Requests\StoresubRedditRequest;
use App\Http\Requests\UpdatesubRedditRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Facade;



class SubRedditController extends Controller
{
    /* public function criar(Request $request){

        $validated = Validator::make($request->all(),[
            'name' => ['required', 'max:30'],
            'owner' => ['required', 'max:30'],
            'description' => ['required', 'max:255'],
        ]);


        if(!$validated->fails()){

            $subReddit = new SubReddit;
            $subReddit->name = $request->name;
            $subReddit->owner = $request->owner;
            $subReddit->description = $request->description;

            $body = [
                'name' => $request->name,
                'owner' => $request->owner,
                'description' => $request->description,
                'url'  => env('SERVER_ADDR')
            ];



            $subReddit->save();



            return response()->json([
                "message" => "subReddit criado com sucesso. ".$response->getBody()
            ], 201);

        }

        return response()->json([
            "message" => $validated->errors()->all()
        ], 500);



    } */

    public function criar(Request $request){

        $subReddit = new SubReddit;

        $subReddit->name = $request->name;
        $subReddit->owner = $request->owner;
        $subReddit->description = $request->description;

        $subReddit->save();

        $request->json([
            "message" => "subReddit criado com sucesso. "
        ], 200);


    }

}

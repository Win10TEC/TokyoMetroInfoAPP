<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\getTrainOpeStatus;

class TrainOpeStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class= new getTrainOpeStatus();
        foreach ((array)$class->getTrainOpeStatusData() as $item){
            $railway = $item["railway"];
            $trainInformationText = $item["trainInformationText"];

            if ($railway === "Marunouchi") {
                return response($trainInformationText);
            }
            elseif ($railway === "Hanzomon") {
                return response($trainInformationText);
            }
            elseif ($railway === "Hibiya") {
                return response($trainInformationText);
            }
            elseif ($railway === "Chiyoda") {
                return response($trainInformationText);
            }
            elseif ($railway === "Ginza") {
                return response($trainInformationText);
            }
            elseif ($railway === "Tozai") {
                return response($trainInformationText);
            }
            elseif ($railway === "Namboku") {
                return response($trainInformationText);
            }
            elseif ($railway === "Fukutoshin") {
                return response($trainInformationText);
            }
            else{
                return response($trainInformationText);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

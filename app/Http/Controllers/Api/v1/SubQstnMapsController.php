<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\SubQstnMap;
use Illuminate\Http\Request;

class SubQstnMapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subqstnmap = SubQstnMap::latest()->paginate(25);

        return $subqstnmap;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $subqstnmap = SubQstnMap::create($request->all());

        return response()->json($subqstnmap, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subqstnmap = SubQstnMap::findOrFail($id);

        return $subqstnmap;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $subqstnmap = SubQstnMap::findOrFail($id);
        $subqstnmap->update($request->all());

        return response()->json($subqstnmap, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubQstnMap::destroy($id);

        return response()->json(null, 204);
    }
}

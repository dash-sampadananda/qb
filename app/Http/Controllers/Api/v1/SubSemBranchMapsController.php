<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\SubSemBranchMap;
use Illuminate\Http\Request;

class SubSemBranchMapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subsembranchmap = SubSemBranchMap::latest()->paginate(25);

        return $subsembranchmap;
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
        
        $subsembranchmap = SubSemBranchMap::create($request->all());

        return response()->json($subsembranchmap, 201);
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
        $subsembranchmap = SubSemBranchMap::findOrFail($id);

        return $subsembranchmap;
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
        
        $subsembranchmap = SubSemBranchMap::findOrFail($id);
        $subsembranchmap->update($request->all());

        return response()->json($subsembranchmap, 200);
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
        SubSemBranchMap::destroy($id);

        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DbTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // BY CONTROLLET AND QURERY builder
        // THE LOOK OF DATA RESULT NOT COOL SO THEY ARE CREATE ELOQUENT ORM
        //here write query
        // select * from table_name
        #->where('active',1) ('name of column'.'= operator',value)
        // $tabledb = DB::table('dbtable')
        //     // ->where('active', '=', true)
        //     ->get(); #true or 1
        // // return part of daat from DB
        // $data = [];
        // foreach ($tabledb as $item) {
        //     $data[] = [
        //         'id' => $item->id,
        //         'first_name' => $item->first_name
        //     ];
        // }
        // #select table
        // return  $data;
        // // return  $tabledb;
        // select * from table_name where ('active'=1)
        // ================================================
        // BY ELOQUENT AND MODAL
        $data = DbTable::all();
        return $data;
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

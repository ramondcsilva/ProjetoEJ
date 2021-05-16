<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use App\Models\Federation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EnterpriseController extends Controller
{

    

    public function listUnique(Request $request)
    {
        $enterprises = Enterprise::get();
        $federation = Federation::get();
        $search = $request->search;
        $select = null;
        return view('home.listenterprises', ['enterprises' => $enterprises, 'federation' => $federation, 'search' => $search, 'select' => $select]);
    }

    public function selectValue(Request $request)
    {
        $enterprises = Enterprise::get();
        $federation = Federation::get();
        $select = $request->selected;
        $search = null;
        return view('home.listenterprises', ['enterprises' => $enterprises, 'federation' => $federation, 'select' => $select, 'search' => $search]);
    }

    public function selectValueLoged(Request $request)
    {
        $enterprises = Enterprise::get();
        $federation = Federation::get();
        $select = $request->selected;

        return view('listenterprises', ['enterprises' => $enterprises, 'federation' => $federation, 'select' => $select]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $enterprises = Enterprise::get();
        $federation = Federation::get();
        $select = $request->selected;
        $search = $request->search;
        return view('home.listenterprises', ['enterprises' => $enterprises, 'federation' => $federation, 'select' => $select, 'search' => $search]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexLoged(Request $request)
    {
        $enterprises = Enterprise::get();
        $federation = Federation::get();
        $select = $request->selected;
        return view('listenterprises', ['enterprises' => $enterprises, 'federation' => $federation, 'select' => $select]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $enterprise = new Enterprise;
        $federations = Federation::get();

        return view('enterprise', ['federations' => $federations,'enterprise' => $enterprise]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enterprise = new Enterprise();
        $enterprise = $enterprise->create( $request->all());

        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function show(Enterprise $enterprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Enterprise $enterprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enterprise $enterprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enterprise $enterprise)
    {
        //
    }
}

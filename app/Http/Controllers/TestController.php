<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TestInterface;

class TestController extends Controller
{
    protected $test;
    public function __construct(TestInterface $test)
    {
        $this->test=$test;
    }
   
    public function index()
    {
        $Tests=$this->test->all();
        return view ('tests.index', compact('Tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'number'=>'required|max:20',
            'email'=>'email',
        ]);
        $this->test->store($request->all());
        return redirect()->route('test.index')->with('success', 'Test created successfully.');
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
        $Test=$this->test->get($id);
        return view('tests.edit', compact('Test'));
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
        $request->validate([
            'name'=>'required',
            'number'=>'required|max:20',
            'email'=>'email',
        ]);
        $this->test->update($id, $request->all());
        return redirect()->route('test.index')->with('success', 'Test updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->test->delete($id);
        return redirect()->route('test.index')->with('success', 'Test deleted successfully.');
    }
}

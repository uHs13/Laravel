<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    private $people = [
        ['id' => 1, 'name' => 'default']
    ];

    private function getPeople(): array
    {
        return $this->people;
    }

    private function sessionPeopleCount(): int
    {
        return count(session('people'));
    }

    public function __construct()
    {

        $people = session('people');

        if (!$people) {
            session([
                'people' => $this->getPeople()
            ]);
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('people')->with('people', session('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $people = session('people');

        $person = [
            'id' => $this->sessionPeopleCount() + 1,
            'name' => $request->name
        ];

        array_push($people, $person);

        session(['people' => $people]);

        return redirect()->route('resources.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $person = session('people')[$id - 1];

        return view('people-details')->with('person', $person);
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

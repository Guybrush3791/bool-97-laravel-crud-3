<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Water;

class MainController extends Controller
{

    public function index() {

        $waters = Water :: all();

        return view('home', compact('waters'));
    }

    public function show($id) {

        $water = Water :: findOrFail($id);

        return view('show', compact('water'));
    }

    public function create() {

        return view('create');
    }
    public function store(Request $request) {

        $data = $request -> validate(
            $this -> getValidationRule()
        );

        $water = Water :: create($data);

        return redirect() -> route('show', $water -> id);
    }

    public function edit($id) {

        $water = Water :: findOrFail($id);

        return view('edit', compact('water'));
    }
    public function update(Request $request, $id) {

        $data = $request -> validate(
            $this -> getValidationRule()
        );

        $water = Water :: findOrFail($id);

        $water -> update($data);

        return redirect() -> route('show', $water -> id);
    }

    public function delete($id) {

        $water = Water :: findOrFail($id);

        $water -> delete();

        return redirect() -> route('index');
    }

    private function getValidationRule() {

        return [
            'code' => 'required|alpha_num|min:10|max:10',
            'name' => 'required|min:3|max:64',
            'price' => 'required|integer|numeric|min:100|max:5000',
            'centilitres' => 'required|integer|numeric|min:25|max:200|multiple_of:25',
            'picture' => 'required|min:3|max:255'
        ];
    }
}

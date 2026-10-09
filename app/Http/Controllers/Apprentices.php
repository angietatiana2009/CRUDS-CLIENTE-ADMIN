<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Apprentices extends Controller
{
    private function fetchDataFromApi($url)
    {
        return Http::get($url)->throw()->object();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');
        $apprentices = $this->fetchDataFromApi($url . '/apprentices');

        return view('apprentices.index', compact('apprentices'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');
        $apprentice = $this->fetchDataFromApi($url . '/apprentices/' . $id);

        return view('apprentices.show', compact('apprentice'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $courses = $this->fetchDataFromApi($url . '/courses');
        $computers = $this->fetchDataFromApi($url . '/computers');
        $apprentice = null;
        $isEditing = false;

        return view('apprentices.form', compact('apprentice', 'courses', 'computers', 'isEditing'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'cell_number' => ['required', 'string', 'max:30'],
            'course_id' => ['required', 'integer', 'min:1'],
            'computer_id' => ['required', 'integer', 'min:1'],
        ]);

        Http::post($url . '/apprentices', $data)->throw();

        return redirect()->route('apprentices.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $apprentice = $this->fetchDataFromApi($url . '/apprentices/' . $id);
        $courses = $this->fetchDataFromApi($url . '/courses');
        $computers = $this->fetchDataFromApi($url . '/computers');
        $isEditing = true;

        return view('apprentices.form', compact('apprentice', 'courses', 'computers', 'isEditing'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'cell_number' => ['required', 'string', 'max:30'],
            'course_id' => ['required', 'integer', 'min:1'],
            'computer_id' => ['required', 'integer', 'min:1'],
        ]);

        Http::put($url . '/apprentices/' . $id, $data)->throw();

        return redirect()->route('apprentices.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/apprentices/' . $id)->throw();

        return redirect()->route('apprentices.index');
    }
}

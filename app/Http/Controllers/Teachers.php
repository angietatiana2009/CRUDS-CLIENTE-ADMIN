<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Teachers extends Controller
{
    private function fetchDataFromApi($url)
    {
        return Http::get($url)->throw()->object();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');
        $teachers = $this->fetchDataFromApi($url . '/teachers');

        return view('teachers.index', compact('teachers'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');
        $teacher = $this->fetchDataFromApi($url . '/teachers/' . $id);

        return view('teachers.show', compact('teacher'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $areas = $this->fetchDataFromApi($url . '/areas');
        $trainingCenters = $this->fetchDataFromApi($url . '/training-centers');
        $teacher = null;
        $isEditing = false;

        return view('teachers.form', compact('teacher', 'areas', 'trainingCenters', 'isEditing'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'area_id' => ['required', 'integer', 'min:1'],
            'training_center_id' => ['required', 'integer', 'min:1'],
        ]);

        Http::post($url . '/teachers', $data)->throw();

        return redirect()->route('teachers.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $teacher = $this->fetchDataFromApi($url . '/teachers/' . $id);
        $areas = $this->fetchDataFromApi($url . '/areas');
        $trainingCenters = $this->fetchDataFromApi($url . '/training-centers');
        $isEditing = true;

        return view('teachers.form', compact('teacher', 'areas', 'trainingCenters', 'isEditing'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'area_id' => ['required', 'integer', 'min:1'],
            'training_center_id' => ['required', 'integer', 'min:1'],
        ]);

        Http::put($url . '/teachers/' . $id, $data)->throw();

        return redirect()->route('teachers.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/teachers/' . $id)->throw();

        return redirect()->route('teachers.index');
    }
}

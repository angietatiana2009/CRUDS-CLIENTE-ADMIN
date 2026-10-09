<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Courses extends Controller
{
    private function fetchDataFromApi($url)
    {
        return Http::get($url)->throw()->object();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');
        $courses = $this->fetchDataFromApi($url . '/courses');

        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');
        $course = $this->fetchDataFromApi($url . '/courses/' . $id);

        return view('courses.show', compact('course'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $areas = $this->fetchDataFromApi($url . '/areas');
        $trainingCenters = $this->fetchDataFromApi($url . '/training-centers');
        $course = null;
        $isEditing = false;

        return view('courses.form', compact('course', 'areas', 'trainingCenters', 'isEditing'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');
        $data = $request->validate([
            'course_number' => ['required', 'string', 'max:100'],
            'day' => ['required', 'string', 'max:50'],
            'area_id' => ['required', 'integer', 'min:1'],
            'training_center_id' => ['required', 'integer', 'min:1'],
        ]);

        Http::post($url . '/courses', $data)->throw();

        return redirect()->route('courses.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $course = $this->fetchDataFromApi($url . '/courses/' . $id);
        $areas = $this->fetchDataFromApi($url . '/areas');
        $trainingCenters = $this->fetchDataFromApi($url . '/training-centers');
        $isEditing = true;

        return view('courses.form', compact('course', 'areas', 'trainingCenters', 'isEditing'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');
        $data = $request->validate([
            'course_number' => ['required', 'string', 'max:100'],
            'day' => ['required', 'string', 'max:50'],
            'area_id' => ['required', 'integer', 'min:1'],
            'training_center_id' => ['required', 'integer', 'min:1'],
        ]);

        Http::put($url . '/courses/' . $id, $data)->throw();

        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/courses/' . $id)->throw();

        return redirect()->route('courses.index');
    }
}

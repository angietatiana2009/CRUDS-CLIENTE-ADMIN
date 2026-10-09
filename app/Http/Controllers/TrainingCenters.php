<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class TrainingCenters extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        return Http::get($url)->throw()->object();
    }

    public function index()   //http://api.codersfree.test/v1/categories?included=posts
    {

        $url = env('URL_SERVER_API');

        $trainingcenters = $this->fetchDataFromApi($url . '/training-centers');
        return view('training_centers.index', compact('trainingcenters'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');

        $trainingcenter = $this->fetchDataFromApi($url . '/training-centers/' . $id);

        return view('training_centers.show', compact('trainingcenter'));
    }

    public function create()
    {
        return view('training_centers.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);

        Http::post($url . '/training-centers', $data)->throw();

        return redirect()->route('training-centers.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $trainingcenter = $this->fetchDataFromApi($url . '/training-centers/' . $id);
        return view('training_centers.edit', compact('trainingcenter'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);

        Http::put($url . '/training-centers/' . $id, $data)->throw();

        return redirect()->route('training-centers.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/training-centers/' . $id)->throw();
        return redirect()->route('training-centers.index');
    }
}
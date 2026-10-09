<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Computers extends Controller
{
        // Método privado para manejar llamadas HTTP repetitivas
        private function fetchDataFromApi($url)
        {
            return Http::get($url)->throw()->object();
    }

    public function index()   //http://api.codersfree.test/v1/categories?included=posts
    {

        $url = env('URL_SERVER_API');

        $computers = $this->fetchDataFromApi($url . '/computers');
        return view('computers.index', compact('computers'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');

        $computer = $this->fetchDataFromApi($url . '/computers/' . $id);

        return view('computers.show', compact('computer'));
    }

    public function create()
    {
        return view('computers.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');
        $data = $request->validate([
            'number' => ['required', 'integer', 'min:1'],
            'brand' => ['required', 'string', 'max:255'],
        ]);

        Http::post($url . '/computers', $data)->throw();

        return redirect()->route('computers.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $computer = $this->fetchDataFromApi($url . '/computers/' . $id);
        return view('computers.edit', compact('computer'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');
        $data = $request->validate([
            'number' => ['required', 'integer', 'min:1'],
            'brand' => ['required', 'string', 'max:255'],
        ]);

        Http::put($url . '/computers/' . $id, $data)->throw();

        return redirect()->route('computers.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/computers/' . $id)->throw();
        return redirect()->route('computers.index');
    }
}
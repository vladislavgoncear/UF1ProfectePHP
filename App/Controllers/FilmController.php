<?php

namespace App\Controllers;

use App\Models\Film;

class FilmController
{
    public function index()
    {
        $films = Film::getAll();
        return view('films/index', ['films' => $films]);
    }

    public function create()
    {
        return view('films/create');
    }

    public function store($data)
    {
        $data = [
            'name' => $_POST['name'],
            'director' => $_POST['director'],
            'year' => $_POST['year'],
            'category' => $_POST['category']
        ];

        Film::create($data);
        header('location: /films');
        exit;
    }

    public function edit($id)
    {
        if ($id === null) {
            header('location: /');
            exit;
        }

        $film = Film::find($id);

        if (!$film) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        return view('films/edit', ['film' => $film]);
    }

    public function update($id, $data)
    {
        Film::update($id, $data);
        header('location: /films');
        exit;
    }

    public function delete($id)
    {
        if ($id === null) {
            header('location: /films');
            exit;
        }

        $film = Film::find($id);
        return view('films/delete', ['film' => $film]);
    }

    public function destroy($id)
    {
        Film::delete($id);
        header('location: /films');
        exit;
    }
}
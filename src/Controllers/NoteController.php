<?php
namespace MG\Notes\Controllers;

use MG\Notes\Notes;

class NoteController
{
    public function __invoke(Notes $note) {
        $response = $note->justDoIt();
        return view('note::index', compact('response'));
    }
}

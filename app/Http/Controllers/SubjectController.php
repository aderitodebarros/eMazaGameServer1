<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    use HelperTrait;

    public function index(Request $request)
    {
        return $this->processSubjects($request);
    }

    public function store(Request $request)
    {
        return response()->json(['error' => 'Do momento nao é possivel adicionar Disciplina'], 403);
    }
    public function show(Request $request, Subject $subject)
    {
        return response()->json(['error' => 'Do momento nao é possivel mostrar detalhes de uma Disciplina'], 403);
    }
    public function update(Request $request, Subject $subject)
    {
        return response()->json(['error' => 'Do momento nao é possivel actualizar de uma Disciplina'], 403);
    }
    public function destroy(Request $request, Subject $subject)
    {
        return response()->json(['error' => 'Do momento nao é possivel remover a Disciplina'], 403);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    use HelperTrait;

    public function index(Request $request)
    {
        return $this->processSubjects($request);
    }

    public function store(Request $request)
    {
        return response()->json(['error' => 'Do momento nao é possivel adicionar perguntas'], 403);
    }
    public function show(Request $request, Question $question)
    {
        return response()->json(['error' => 'Do momento nao é possivel mostrar detalhes de uma perguntas'], 403);
    }
    public function update(Request $request, Question $question)
    {
        return response()->json(['error' => 'Do momento nao é possivel actualizar de uma perguntas'], 403);
    }
    public function destroy(Request $request, Question $question)
    {
        return response()->json(['error' => 'Do momento nao é possivel remover a perguntas'], 403);
    }
};

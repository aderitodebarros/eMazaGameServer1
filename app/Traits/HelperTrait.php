<?php

namespace App\Traits;

use App\Models\Question;
use App\Models\Subject;
use illuminate\Http\Request;

/**
 * Buscar conteudo na DB
 */
trait HelperTrait
{
    public function processSubjects(Request $request)
    {
        //request de dados na base de dados
        //$subject = Subject::all();

        //$subject = Subject::orderBy('created_at', 'desc')->get;

        //
        $orderDirection = $request->query('direction', 'desc');
        $orderColumn = $request->query('column', 'id');
        $totalPerPage = $request->query('per_page', 3);

        $subject = Subject::orderBy($orderColumn, $orderDirection)->paginate($totalPerPage);


        return response()->json(['sucess' => $subject], 200);
    }

    public function processQuestions(Request $request)
    {
        //request de dados na base de dados
        //$subject = Subject::all();

        //$subject = Subject::orderBy('created_at', 'desc')->get;

        //
        $orderDirection = $request->query('direction', 'desc');
        $orderColumn = $request->query('column', 'id');
        $totalPerPage = $request->query('per_page', 3);

        $subject = Question::orderBy($orderColumn, $orderDirection)->paginate($totalPerPage);


        return response()->json(['sucess' => $subject], 200);
    }
};

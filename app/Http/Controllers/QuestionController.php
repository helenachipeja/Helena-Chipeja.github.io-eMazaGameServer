<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getData()
    {
        return response()->json(["Requisição realizada com sucesso..."]);
    }
}

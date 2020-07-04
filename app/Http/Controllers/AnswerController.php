<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestModel;
use App\Models\AnswerModel;

class AnswerController extends Controller
{
    public function index($qid) {
        $quests = QuestModel::find($qid);
        $answers = AnswerModel::find($qid);
        return view('forum.answer',compact('quests', 'answers'));
    }

    public function store(Request $request, $qid) {
        $data = new \App\Models\AnswerModel;
        
        $data->answer_content = $request->get('answer_content');
        $data->quest_id = $qid;

        $data->save($data);
        return redirect()->route('forum.answer', $qid);
    }
}

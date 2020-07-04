<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class AnswerModel 
{
    public static function get_all() {
        $answers = DB::table('answer')->get();
        return $answers;
    }

    public static function save($data) {
        
        $content = $data->answer_content;
        $q_id = $data->quest_id;
        $new_answer = DB::table('answer')->insert(['answer_content' => $content, 
                                            'quest_id' => $q_id, 
                                            'created_at' =>  date('Y-m-d H:i:s'),
                                            'updated_at' => date('Y-m-d H:i:s')]);
        return $new_answer;
    }

    public static function find($id) {
        $find_answer = DB::table('answer')->where('quest_id', '=', $id)->get();
        return $find_answer;
    }


}
?>
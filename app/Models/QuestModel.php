<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class QuestModel 
{
    public static function get_all() {
        $quests = DB::table('quest')->get();
        return $quests;
    }

    public static function save($data) {
        $content = $data->quest_content;
        $q_title = $data->quest_title;
        $new_quest = DB::table('quest')->insert(['quest_title' => $q_title, 
                                        'quest_content' => $content, 
                                        'created_at' =>  date('Y-m-d H:i:s'),
                                        'updated_at' => date('Y-m-d H:i:s')]);
        return $new_quest;
    }

    public static function find($id) {
        $find_quest = DB::table('quest')->where('id', '=', $id)->first();
        return $find_quest;
    }
}
?>
<?php

namespace App\Components;

class showInfo
{
    public function show_data($data)
    {
        echo "<prev>";
        print_r($data);
        echo "</prev>";
    }
    public function searchChildren($data, $id, &$child){
        foreach($data as $item){
            if($item['parent_id'] == $id){
                $child[] = $item['id'];
                $this->searchChildren($data, $item['id'], $child);
            }

        }
    }
}

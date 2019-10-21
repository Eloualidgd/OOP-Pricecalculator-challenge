<?php
declare(strict_types=1);

class GroupLoader
{

    public function loadGroup(): array
    {
        $list = [];
        $json = json_decode(file_get_contents('data/groups.json'), true);
        foreach ($json AS $groupJson) {
            $list[] = new Group($groupJson['id'], $groupJson['name'], $groupJson['variable_discount'], $groupJson['group_id']);
            // object from class
        }
        return $list;

    }

//coge el json y coge osea return y compara
    public function loadById(int $groupId): Group
        //search function is loadById
    {
        $json = json_decode(file_get_contents('data/groups.json'), true);
        foreach ($json AS $groupJson) {
            if ($groupJson['id'] === $groupId) {
                return new Group($groupJson['id'], $groupJson['name'], $groupJson['variable_discount'], $groupJson['group_id']);
                //return een nieuwe  object Customer met wat we nodig hebben dus id,name,group_id


            }
        }

    }
}

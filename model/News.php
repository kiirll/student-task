<?php

include_once (ROOT.'/core/DB.php');
class News
{
    public static function getNewsItemById($id)
    {
        $db = new DB();
        $resutl = $db->query("SELECT id, title, date, short_content from news where id=".$id);
        $resutl->setFetchMode(PDO::FETCH_ASSOC);
        $news = $resutl->fetch();
        return $news;
    }

    public static function getNewsList()
    {
        $db = new DB();
        $list = $db->query("SELECT id, title, date, short_content from news ORDER by date desc limit 10 ");
        $newsList = array();
        $i=0;
        while($row = $list->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newsList;
    }
}
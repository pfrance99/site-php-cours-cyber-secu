<?php

class Article
{
  public static function getOne($id)
  {
    $file = file_get_contents("db/articles.json");
    $file_parsed = json_decode($file, true);
    $params;
    if(isset($file_parsed[$id])) {
      $params = $file_parsed[$id];
    } else {
      $params = [
        'title' => 'Erreur 404',
        'content' => 'Cette route n\'existe pas'
      ];
    }
    return $params;
  }
}

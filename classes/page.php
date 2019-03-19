<?php

include 'models/article.php';

class Page
{

  public function __construct() {
    $this->title = '';
    $this->content = '';
  }

  public function loadPage($pageToLoad)
  {
    $article = Article::getOne($pageToLoad);
    $this->title = $article['title'];
    $this->content = $article['content'];
  }

}

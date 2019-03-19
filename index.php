<?php
  include 'classes/page.php';

  $pageContent = '';
  $page = new Page();
  $articleId = str_replace('/', '', $_SERVER['REDIRECT_URL']);
  $page->loadPage($articleId);
  $pageContent .= file_get_contents('layouts/header.html'); // On ajoute le header
  $pageContent .= '<h3>' . $page->title . '</h3>'; // On ajoute le titre de l'article
  $pageContent .= '<p>' . $page->content . '</p>';  // On ajoute le contenu de l'article
  $pageContent .= file_get_contents('layouts/footer.html'); // On ajoute le footer

  echo $pageContent; // On render la page en html

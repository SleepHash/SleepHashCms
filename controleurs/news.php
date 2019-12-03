<?php
include('models/news.php');
include('vues/navbar.php');
$News = Afficher_News();
include('vues/news.php');
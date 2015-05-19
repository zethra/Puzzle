<?php
 
$pages = 1;

include 'errorPages/header.html';
include 'errorPages/' . rand(1, $pages) . '.html';
include 'errorPages/footer.html';
<?php

require('model/backend.php');

function chapter()
{
    $chapter = getChapter();

    require('view/backend/adminView.php');
}
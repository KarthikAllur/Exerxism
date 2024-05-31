<?php

function language_list(...$lang)
{
    return $lang;
}

function add_to_language_list($lang,$string)
    {
        array_push($lang,$string);
        return $lang;
    }
function prune_language_list($lang)
    {
        array_shift($lang);
        return $lang;
    }
function current_language($lang)
    {
        //return $lang[0];
        return reset($lang);
    }
function language_list_length($lang)
    {
        return sizeof($lang);
        return countof($lang);
    }


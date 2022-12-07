<?php

function isOjectNull(object $object): bool
{
    $arr = (array)$object;
    if (!$arr) {
        return false;
    } else {
        return true;
    }
}

<?php

function validForm()
{
    global $f3;
    $isValid = true;
    if (!validName($f3->get('name'))) {
        $isValid = false;
        $f3->set("errors['name']", "Please enter your name");
    }

    if (!validOptions($f3->get('opt'))) {
        $isValid = false;
        $f3->set("errors['opt']", "Invalid selection");
    }
    return $isValid;
}

function validName($name)
{
    return !empty($name) && ctype_alpha($name);
}

function validOptions($opt)
{
    global $f3;
    //options are optional
    if (empty($opt)) {
        return true;
    }
    //But if there are options, we need to make sure they're valid
    foreach ($opt as $option) {
        if (!in_array($option, $f3->get('options'))) {
            return false;
        }
    }
    //If we're still here, then we have valid option
    return true;
}
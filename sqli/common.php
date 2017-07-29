<?php
if (!empty($_GET))
{
    $_GET  = addslashes_deep($_GET);
}
if (!empty($_POST))
{
    $_POST = addslashes_deep($_POST);
}
if (!empty($_COOKIE))
{
    $_COOKIE   = addslashes_deep($_COOKIE);
}

function addslashes_deep($value)
{
    if (empty($value))
    {
        return $value;
    }
    else
    {
        if (!get_magic_quotes_gpc())
        {
            $value=is_array($value) ? array_map('addslashes_deep', $value) : addslashes($value);
        }
        else
        {
            $value=is_array($value) ? array_map('addslashes_deep', $value) : mystrip_tags($value);
        }
        return $value;
    }
}
?>
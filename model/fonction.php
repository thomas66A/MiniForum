<?php
function getuser()
{
    return ["Thomas","toto@to.fr"];
}
function getuserdescription()
{
    return "Homme";
}

function getVisits()
{
    return 255;
}

function getPage()
{
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = "login";
    }
    return $page;
}

?>
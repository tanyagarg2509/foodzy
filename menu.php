<?php


class menu{
    

function getvegpizza()
{
    include 'config.php';

    $sql='select * from pizzas where ptype="veg";';
    $result=$conn->query($sql);
    if($result->num_rows >0)
    {
        return $result;
    }
}
function getnonvegpizza()
{
    include 'config.php';

    $sql='select * from pizzas where ptype="non-veg";';
    $result=$conn->query($sql);
    if($result->num_rows >0)
    {
       return $result;
    }
}
function getpizzamania()
{
    include 'config.php';

    $sql='select * from pizzas where ptype="pz-mania";';
    $result=$conn->query($sql);
    if($result->num_rows >0)
    {
       return $result;
    }
}
};
?>



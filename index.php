<?php
if(isset( $_POST['button'] )) 
{
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = '...'; // database name

    // try
    // {
    //     $conn = mysqli_connect($host , $user , $pass , $db);
    // }
    // catch (Exception $ex)
    // {
    //     header("refresh: 3; url = error.php");
    // }

    $conn = mysqli_connect($host , $user , $pass , $db);
    // $insert = "insert into ... values('ali' , 3 , 'AnyAddress')";
    // $update = " update ... set name='james' where id=3 ";
    $delete = "delete from ... where name = 'james' ";
    $query = mysqli_query($conn , $delete);
    if ($query)
    {
        echo "Data Deleted";
    }
    else{
        echo "Error in  connection or delete!";
    }
}
?>


<form method='POST'>
        <center>
            <input type='submit' value='Connect' name='button'>
        </center>
</form>
<?php

/**
 * Database Connection Details
 */


$username = "root";
$password = "";
$host = "localhost:3306";
$dbName = "mastersinthestates";
$connect_path = "../../connect.php";
$stylesheet = "../style.css";

//conection:
$link = mysqli_connect($host,$username,$password,$dbName) or die("Error " . mysqli_error($link));

//step 1: List all the tables
$sql = "SHOW TABLES FROM $dbName";
$result = mysqli_query($link,$sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}


/*
 * Basic HTML here
 */



while ($row = mysqli_fetch_row($result)) {



    $path = "admin/{$row[0]}/";
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

   // echo "Table: {$row[0]} <br/>";
    //This is where we print all the fields
    $query = "select *
              from information_schema.columns
              where table_schema = '$dbName'
              and table_name =  '$row[0]'";

    $result0 = mysqli_query($link,$query);
    // echo mysqli_num_rows($result0);

    //Setting up edit String
    $string = "";
    $string.= "<html> \n";
    $string.= "\t <head> \n
                         <LINK href=\"{$stylesheet}\" rel=\"stylesheet\" type=\"text/css\"> \n
                 </head> \n";
    $string.= "<body> \n";
    $string.= "<div id=\"header\">";
    $string.=  "<h1> Table Entry for $row[0] </h1>";
    $string.= "</div>";
    $string.= "<div class=\"container\">";
    $string.= "<form method=\"POST\" action=\"post.php\"> \n";


    //Setting up the post string
    $post = "<?php \n";
    $post .= "require ('$connect_path'); \n";
    $sql_string = "INSERT INTO $row[0] VALUES(";


    while ($row0 = mysqli_fetch_row($result0))
    {
        $string.= "<label>$row0[3]</label> \n";
        $string.= "<input type=\"text\" id=\"$row0[3]\" name=\"$row0[3]\">"."<br> \n";

        $post.= "\${$row0[3]} = mysqli_real_escape_string(\$link,\$_POST['$row0[3]']); \n";
        $sql_string.= "'\${$row0[3]}',";

    }
    $string.= "<input type='submit' name='submit' value='Submit'>";
    $string.= "</form> \n";
    $string.= "</div>  \n";
    $string.= "</body> \n";
    $string.= "</html> \n";

    //Trim the trailing comma
    $sql_string = rtrim($sql_string, ",");
    $sql_string.= ")";

    $post.= "\$query = \" {$sql_string} \";";

    $post.= " \n echo \$query; \n";
    $post .= "\$result = mysqli_query(\$link,\$query); \n";
    $post .= "?>";

    ?>

    <textarea rows="4" cols="50">
        <?php echo $string ?>
    </textarea>



    <?php
    //Write out files
    //Set the filename here
    $fileEdit = "index.php";
    $filePost = "post.php";
    file_put_contents($path.$fileEdit, $string);
    file_put_contents($path.$filePost, $post);


}

mysqli_free_result($result);

//
?>

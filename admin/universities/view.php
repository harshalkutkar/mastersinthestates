<?php
/**
 * Created by PhpStorm.
 * User: harshalkutkar
 * Date: 1/29/15
 * Time: 7:18 PM
 */

require ("../../connect.php");
$id = $_GET['id'];

$query_1 = "SELECT * FROM universities WHERE id=$id";
$result_1 = mysqli_query($link,$query_1) or die(mysqli_error($link));
$uni = mysqli_fetch_assoc($result_1)


?>
<html>
    <head>
    </head>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery-form.js"></script>

    <script>
        function showAdd()
        {
            $.get( "../programs/index.php?uid=<?php echo $id?>", function( data ) {
                $( "#programs" ).html( data );
               // alert( "Load was performed." );
            });
        }
    </script>
<body>

<h1><?php echo $uni['name'] ?></h1>

<h3> Schools </h3>
<?php
            $query_2 = "SELECT * FROM schools WHERE university_id=$id";
            $result_2 = mysqli_query($link,$query_2);

            if (mysqli_num_rows($result_2)==0)
            {
                echo "<i>No Schools found</i>";
            }
            else {
                echo "<table>";
                echo "<tr><th>id</th> <th>NAME</th> <th>TYPE</th> </tr>";
                while ($row = mysqli_fetch_assoc($result_2)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['type'] . "</td>";
                    echo "</tr>";

                }
                echo "</table>";
            }
?>



<h3> Programs </h3>
<?php
$query_3 = "SELECT programs.name AS name,programs.description AS description ,programs.website AS website,schools.name AS school_name,schools.id AS school_id FROM `programs` INNER JOIN schools ON schools.id=programs.school_id WHERE programs.university_id = $id";
$result_3 = mysqli_query($link,$query_3);

if (mysqli_num_rows($result_3)==0)
{
    echo "<i>No Programs found</i>";


}
else {
    echo "<table>";
    echo "<tr> <th>NAME</th> <th>DESC</th>   <th>WEBSITE</th> <th>SCHOOL_ID</th> </tr>";
    while ($row = mysqli_fetch_assoc($result_3)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['website'] . "</td>";
        echo "<td>" . $row['school_name'] . "</td>";
        echo "</tr>";

    }
    echo "</table>";
}
echo "<input type='button' onclick='showAdd()' value='Add Program'/>";
echo "<div id=\"programs\"></div>";
?>


</body>

</html>
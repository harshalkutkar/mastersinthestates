<?php
        require ("../connect.php");
?>
<h3>Admin Portal</h3>

<div class="controls">
        <a href="universities/index.php">Add University</a>

</div>

<table width="100%">
           <tr>
               <th>id</th>
               <th>name</th>
               <th>location</th>
               <th>be</th>
               <th>cs</th>
               <th>acceptance rate</th>
               <th>avg q</th>
               <th>avg gpa</th>
               <th>avg emp</th>
           </tr>


<?php
/**
 * Created by PhpStorm.
 * User: harshalkutkar
 * Date: 1/29/15
 * Time: 6:49 PM
 */

$query = "SELECT * FROM universities ORDER BY name asc";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
//echo mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result))
{
    $id = $row['id'];
    $name = $row['name'];
    $location = $row['location'];
    $be = $row['be'];
    $cs = $row['cs'];
    $acceptance = $row['acceptance'];
    $avg_q = $row['avg_q'];
    $avg_gpa = $row['avg_gpa'];
    $emp_rating = $row['employer_rating'];
    ?>
    <tr>
        <td><?php echo $id ?></td>
        <td><?php echo "<a href='universities/view.php?id=$id'> $name </a>"; ?></td>
        <td><?php echo $location ?></td>
        <td><?php echo $be ?></td>
        <td><?php echo $cs ?></td>
        <td><?php echo $acceptance ?></td>
        <td><?php echo $avg_q?></td>
        <td><?php echo $avg_gpa ?></td>
        <td><?php echo $emp_rating ?></td>
    </tr>

    <?php
}

?>

</table>
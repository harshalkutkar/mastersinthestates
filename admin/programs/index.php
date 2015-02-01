<?php
        require("../../connect.php");
?>
<html>
	 <head> 

                         <LINK href="../style.css" rel="stylesheet" type="text/css"> 

                 </head> 
<body> 
<div id="header"><h3> Table Entry for programs </h3></div>
<div class="container">
    <form method="POST" action="../programs/post.php">
        <?php
                if(!empty($_GET["uid"]))
                {
                    $query =  $query = "SELECT * FROM schools WHERE university_id={$_GET['uid']}";
                }
                else {
                    $query = "SELECT * FROM schools";
                }
                $result = mysqli_query($link,$query);


        ?>
        <label>School</label>
        <select name="school_id">
<?php
while ($row = mysqli_fetch_assoc($result))
{
    $id = $row['id'];
    $name = $row['name'];
    echo  "<option value=\"$id\"> $name </option>";
}
?>
</select>
<br>
<label>university_id</label>

<input type="text" id="university_id" name="university_id" value="<?php if(!empty($_GET["uid"])) echo $_GET['uid'] ?>"><br>
<label>name</label> 
<input type="text" id="name" name="name"><br> 
<label>description</label> 
<input type="text" id="description" name="description"><br> 
<label>website</label> 
<input type="text" id="website" name="website"><br> 
<input type='submit' name='submit' value='Submit'></form> 
</div>  
</body> 
</html> 

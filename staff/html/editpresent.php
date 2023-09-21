<?php
    // Start output buffering
    ob_start();
    
    // Include the header.php file
    include("header.php");
?>

<?php
    // Include the db.php file
    include("../database/db.php");
?>

<?php

    if(isset($_GET['id'])) 
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM studentdata WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
    }
?>
<style>

</style>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <h2 class="text-center mt-3">UPDATE</h2>
                <input type="hidden" name="id" >
                <div class="form-group">
                    <label for="rollno">Roll No:</label>
                    <input type="text" class="form-control" id="rollno" name="rollno" disabled="disabled" value="<?php echo $_GET["id"]; ?>">
                </div>
                <div class="form-group">
                    <label for="date">Choose a DATE:</label>
                    <select class="form-control" id="date" name="date">
                        <option>Select The Date</option>
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "cms");
                        $sql4 = "SELECT * FROM `absent` ORDER BY rollno ASC";
                        $result = mysqli_query($conn, $sql4);
                        $row1 = mysqli_fetch_assoc($result);
                        $key1 = array_keys($row1);
                        for($i = 3; $i < count($row1); $i++){
                            echo "<option value=\"$key1[$i]\">$key1[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name"> Absent</label>
                    <br>
                    <input type="radio" id="present" value="1" name="attend" >Present
                    <input type="radio" id="absent" value="A" name="attend" >Absent
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
<?php
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    $conn = mysqli_connect("localhost", "root", "", "cms");
    $sql = "UPDATE `absent` SET `{$_POST['date']}` = '{$_POST['attend']}'  WHERE `absent`.`rollno` = {$_GET["id"]}";
    mysqli_query($conn, $sql);
    
    // header("Location: absentno.php");
   }
   mysqli_close($conn);
?>
<?php
    include("Footer.php");
?>

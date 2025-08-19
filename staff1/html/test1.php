<?php
    ob_start();
    include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Marks</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Load custom CSS -->
	<style>
		.highlight {
			font-weight: bold;
			background-color: yellow;
		}
    .container{
      margin-top:50px;
    }
    h2{
      margin-top:50px
    }
    header {
        font-size: 25px;
        color: red;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-top: 20px;
        text-align: center;
        font-weight: bold;
        margin-bottom: 15px;
        background: white;
    }
    
    th {
        background-color: black;
        color: white;
    }
    .table{
        margin-top:20px;
        background:white;
    }
    .table table-striped custom-table table-hover {
        border: 1px solid #dee2e6;
    }
    
    tr:hover {
        background:rgb(237, 175, 6);
    }
    
    
    td {
        font-weight: bolder;
        color: black;
    }
    table:not(.table-dark) th {
    color: white;
    }
    input{
        border:1px solid;
    }
    h3{
        color:blue;
        text-decoration:underline;
    }
    .select-wrapper {
  position: relative;
  display: inline-block;
  margin-right:50% ;
}

.custom-select {
  appearance: none;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  cursor: pointer;
  width: 200px;
}

.submit-button {
  padding: 10px 15px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
}

.submit-button:hover {
  background-color: #0069d9;
}
.form-container {
        justify-content: center;
        align-items: center;
        margin-right:50px ;
        margin-right: 20px;
        /* display: flex; */
    }
    /* tr:hover {
        color: #000000;
    } */
	</style>
    <div class="form-container" style="margin-top:20px;justify-content:center">
    <form method="get">
        <div class="select-wrapper">
            <select name="subject" class="custom-select">
            <?php
            $table = $semname . 'teacher';
            $sql = "SELECT * FROM `$table` WHERE `teacher_code` = $teachercode";
            $res = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($res);
            $sub = explode(",", $row['teacher_subject']);
            for ($i = 0; $i < count($sub); $i++) {
                echo '<option value="' . $sub[$i] . '">' . $sub[$i] . '</option>';
            }
            ?>
            </select>
            <button type="submit" class="submit-button">Submit</button>
        </div>
    </form>
    </div>

<div class="container">
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Student Marks</h3>
    </div>
    <?php

    if(isset($_GET['subject'])){
        
        ?>
        
        <div class="card-body">
    <form method="POST" action="test1.php">
        <table class="table table-bordered table-striped custom-table table-hover black-bg-table" >
            <thead style="background-color: #212529; color: #566a7f; text-align: left; font-weight: bolder;">
                <tr>
                    <th style="color: white;font-weight:bold">Roll No.</th>
                    <th style="color: white;font-weight:bold" size='2'>Name</th>
                    <th style="color: white;font-weight:bold">TEST1</th>
                    <!-- <th>Unit 2</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "cms");
                    $table = $semname.$_GET['subject'].'marks';
                    $sql = "SELECT rollno, name, test1, test2 FROM $table ORDER BY LENGTH(rollno), rollno";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<input type='hidden' name='subject' value = ".$_GET['subject']." >";
                        echo "<td style='background: white;color:black;'>" . $row['rollno'] . "</td>";
                        echo "<td style='background: white;color:black;' size='5'>" . $row['name'] . "</td>";
                        echo "<td style='background: white;color:black;'><input type='text' name='unit1[]' size='2'  class='form-control' ></td>";
                        // echo "<td><input type='text' name='unit2[]' size='2'   class='form-control' ></td>";
                        echo "<input type='hidden' name='rollno[]' value='" . $row['rollno'] . "'>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <button type="submit" name="submit" value="Save" class="btn btn-primary">Save</button>
        </form>
    </div>

        <?php
    }


?>
</div>
            </form>
            <?php
               if(isset($_POST['submit'])){
                $con = mysqli_connect("localhost", "root", "", "cms");
            
                $rollno_list = $_POST['rollno'];
                $unit1_list = $_POST['unit1'];
                $sub = $_POST['subject'];
                // $unit2_list = $_POST['unit2'];
            
                for ($i = 0; $i < count($rollno_list); $i++) {
                    $rollno = mysqli_real_escape_string($con, $rollno_list[$i]);
                    $unit1_val = mysqli_real_escape_string($con, $unit1_list[$i]);
                    // $unit2_val = mysqli_real_escape_string($con, $unit2_list[$i]);
            
                    if (!empty($unit1_val))
                     {
                        print_r($_POST);
                        $sql_check = "SELECT rollno FROM marks WHERE rollno='$rollno'";
                        $result_check = mysqli_query($con, $sql_check);
                        $num_rows = mysqli_num_rows($result_check);
                        if($num_rows > 0){
                            $table = $semname.$sub.'marks';
                            $sql_update = "UPDATE $table SET test1='$unit1_val' WHERE rollno='$rollno'";
                            mysqli_query($con, $sql_update);
                            
                        } else {
                            $table = $semname.$sub.'marks';
                            // Insert a new row with the rollno and the new values for unit1 and unit2
                            $sql_insert = "INSERT INTO $table (rollno, test1,) VALUES ('$rollno', '$unit1_val')";
                            mysqli_query($con, $sql_insert);
                        }
                    }
                
                }
    
                mysqli_close($con);
                        if($_SERVER["REQUEST_METHOD"] == "POST")
                            {
                                header("Location: marks.php");
                                ob_end_flush();
                            }
                    }
?>
<?php
    include("Footer.php");
?>     


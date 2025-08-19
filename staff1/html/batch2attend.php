<?php
ob_start();
include("header.php");
?>
<style>
.card {
    width: 90%;
}

.ccc {
    width: 90%;
    margin-right: 50px;
    margin-top: 20px;
    margin: 0 auto;
}

.select-wrapper {
    position: relative;
    display: inline-block;
    margin-right: 50%;
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

.card {
    margin-top: 15px;
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
    margin-right: 50px;
}
</style>
<div class="form-container">
    <form method="post">
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
            <button type="submit" class="submit-button" name="submit1">Submit</button>
        </div>
    </form>
</div>
<h4>Batch2 Attendance</h4>
<div class="card ccc">
    <div class="card-header ">
        <h4 class="card-title">Date and Time Form</h4>
    </div>
    <div class="card-body">
        <form method="post" action="">
            <div class="form-group">
                <label for="date-input">Date:</label>
                <input type="date" id="date-input" name="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="time-input">Time:</label>
                <input type="time" id="time-input" name="time" class="form-control">
            </div>
            <?php
                    if (isset($_POST["submit1"])) {
                      ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Roll No.</th>
                        <th>Name</th>
                        <th>Select</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $table = $semname . $_POST['subject'] . 'bat2attend';
                        $con = mysqli_connect("localhost", "root", "", "cms");
                        $sql = "SELECT * FROM $table";
                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<input type="hidden"  value="'.$_POST['subject'].'" name= "subject">';
                                echo '<td>' . $row['rollno'] . '</td>';
                                echo '<td>' . $row['name'] . '</td>';
                                echo '<td><input type="checkbox" name="' . $row['rollno'] . '" value="' . $row['rollno'] . '" checked></td>';
                                echo '</tr>';
                            }
                        }
                    
                    ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</div>
<?php
                    }
?>
<?php
if(isset($_POST['submit'])){
$table = $semname . $_POST['subject'] . 'bat2attend';
$con = mysqli_connect("localhost", "root", "", "cms");
$sql = "SELECT * FROM $table";
$result = mysqli_query($con, $sql);

if (isset($_POST["submit"])) {
  
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sqlcol = "ALTER TABLE $table ADD `$date` VARCHAR(100) NOT NULL";
    $res = mysqli_query($con, $sqlcol);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (isset($_POST[$row['rollno']])) {
                $sql = "UPDATE $table SET `$date` = '1' WHERE `rollno` = '" . $row['rollno'] . "'";
            } else {
                $sql = "UPDATE $table SET `$date` = '0' WHERE `rollno` = '" . $row['rollno'] . "'";
            }
            mysqli_query($con, $sql);
        }
    }
    header("Location: batch2absent.php");
    ob_end_flush();
}
}
?>
<?php
include("Footer.php");
?>

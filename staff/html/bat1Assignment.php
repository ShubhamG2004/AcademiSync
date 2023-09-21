<?php
include("header.php");
?>

<h4>Batch1 Assignment marks</h4>

<form method="POST" action="">
    <div class="form-group">
        <div class="select-wrapper">
            <select name="subject" class="custom-select form-control">
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
        </div>
    </div>
    <div class="form-group">
        <label for="num_experiments">Number of Experiments:</label>
        <input type="number" name="num_experiments" id="num_experiments" min="1" max="25" required class="form-control">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
    if(isset($_POST["submit"])){
    ?>
    <form method="post" action="batr1Assignment.php">
    <table class="table table-bordered table-striped custom-table table-hover black-bg-table" style="margin-top:50px">
        <thead style="background-color: #212529; color: #566a7f; text-align: left; font-weight: bolder;">
            <tr>
                <th style="color: white;font-weight:bold">Roll No.</th>
                <th style="color: white;font-weight:bold" >Name</th>
                <?php
                if (isset($_POST['num_experiments'])) {
                    $numExperiments = $_POST['num_experiments'];

                    for ($i = 1; $i <= $numExperiments; $i++) {
                        echo "<th style='color: white;font-weight:bold'>$i</th>";
                    }
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $con = mysqli_connect("localhost", "root", "", "cms");
            $sql = "SELECT * FROM bat1marks";
            $result = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td style='background: white;color:black;'>" . $row['rollno'] . "</td>";
                echo "<td style='background: white;color:black;' >" . $row['name'] . "</td>";

                if (isset($_POST['num_experiments'])) {
                    $numExperiments = $_POST['num_experiments'];

                    for ($i = 1; $i <= $numExperiments; $i++) {
                        $expno = 'exp' . $i;
                        if ($row[$expno] > 0 && $row[$expno] != '') {
                            $value = $row[$expno];
                            echo "<td style='background: white;color:black;'><input type='text' name='exp" . $i . "[]' size='2' value='" . $value . "' readonly class='form-control'></td>";
                        } else {
                            echo "<td style='background: white;color:black;'><input type='text' name='exp" . $i . "[]' size='2' class='form-control'></td>";
                        }
                    }
                }

                echo "<input type='hidden' name='rollno[]' value='" . $row['rollno'] . "'>";
                echo "</tr>";
            }
            ?>  
        </tbody>
    </table>
    <button type="submit" name="submit1" value="Save" class="btn btn-primary">Save</button>
</form>
         
<?php
if (isset($_POST['submit1'])) {
    $con = mysqli_connect("localhost", "root", "", "cms");

    foreach ($_POST['rollno'] as $key => $value) {
        $rollno = $value;

        // Check if the data already exists for the roll number
        $sqlCheck = "SELECT * FROM bat1marks WHERE rollno='$rollno'";
       
        $resultCheck = mysqli_query($con, $sqlCheck);
        $dataExists = mysqli_num_rows($resultCheck) > 0;
        if (!$dataExists) {
            for ($i = 1; $i <= $numExperiments; $i++) {
                $expno = 'exp' . $i;
                if (isset($_POST['exp' . $i][$key])) {
                    $exp = $_POST['exp' . $i][$key];
                    $sql = "UPDATE bat1marks SET $expno='$exp' WHERE rollno='$rollno'";
                    mysqli_query($con, $sql);
                }
            }
        }
    }
}}
?>
<?php
    include("Footer.php");
?>    
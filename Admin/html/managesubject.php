<?php
    include("header.php");
?>
<style>
    .card{
        background:white;
    }
    </style>
 <div class="row">
    <div class="col-md-6 mx-auto">
        <div style="border: 1px solid #ccc; border-radius: 4px; padding: 20px;">
            <form action="managesubject.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="selectSemester">Select Semester</label>
                    <select class="form-control" name="semester" style="width: 100%;">
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "cms");
                        $sql = "SELECT id, semname FROM semlist";
                        $result = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['semname'] . "'>" . $row['semname'] . "</option>";
                        }
                        mysqli_close($con);
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="enterCSV">Enter CSV</label>
                    <input type="file" class="form-control-file" name="file" accept=".csv" style="width: 100%;">
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="width: 100%;">Submit</button>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card border-primary">
            <div class="card-body">
                <form method="post">
                <div class="form-group">
            <label for="selectSemester">Select Semester</label>
            <select class="form-control" name="semester">
                <?php
                $con = mysqli_connect("localhost", "root", "", "cms");
                $sql = "SELECT id, semname FROM semlist";
                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['semname'] . "'>" . $row['semname'] ."</option>";
                }
                mysqli_close($con);
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="submit1" style="width: 100%;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php

if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "", "cms");
    $csv = $_FILES['file']['tmp_name'];

    $handle = fopen($csv, "r");
    $i = 0;
    $semname = $_POST['semester'];
    $table = $semname . 'subject';
    while (($row = fgetcsv($handle, 10000, ",")) !== false) {
       
            
            $sql = "INSERT INTO $table VALUES (NULL, '$row[0]', '$row[1]')";
            mysqli_query($con, $sql);
            $subtable = $semname.$row[1];
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno VARCHAR(255),
                student_name VARCHAR(255)
            ) ";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."marks";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno VARCHAR(255),
                name VARCHAR(255),
                test1 VARCHAR(255),
                test2 VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."absent";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno VARCHAR(255),
                name VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."academiccalendar";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255),
                pdf VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."coursecurri";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255),
                pdf VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."bat1attend";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno VARCHAR(255),
                name VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."bat2attend";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno VARCHAR(255) ,
                name VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."bat3attend";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno VARCHAR(255),
                name VARCHAR(255)
            )";
            mysqli_query($con, $sql);
            
            
            $subtable = $semname.$row[1]."bat1marks";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno INT(11),
                name VARCHAR(255),
                exp1 INT,
                exp2 INT,
                exp3 INT,
                exp4 INT,
                exp5 INT,
                exp6 INT,
                exp7 INT,
                exp8 INT,
                exp9 INT,
                exp10 INT,
                exp11 INT,
                exp12 INT,
                exp13 INT,
                exp14 INT,
                exp15 INT,
                exp16 INT,
                exp17 INT,
                exp18 INT,
                exp19 INT,
                exp20 INT,
                exp21 INT
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."bat2marks";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno INT(11),
                name VARCHAR(255),
                exp1 INT,
                exp2 INT,
                exp3 INT,
                exp4 INT,
                exp5 INT,
                exp6 INT,
                exp7 INT,
                exp8 INT,
                exp9 INT,
                exp10 INT,
                exp11 INT,
                exp12 INT,
                exp13 INT,
                exp14 INT,
                exp15 INT,
                exp16 INT,
                exp17 INT,
                exp18 INT,
                exp19 INT,
                exp20 INT,
                exp21 INT
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."bat3marks";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno INT(11),
                name VARCHAR(255),
                exp1 INT,
                exp2 INT,
                exp3 INT,
                exp4 INT,
                exp5 INT,
                exp6 INT,
                exp7 INT,
                exp8 INT,
                exp9 INT,
                exp10 INT,
                exp11 INT,
                exp12 INT,
                exp13 INT,
                exp14 INT,
                exp15 INT,
                exp16 INT,
                exp17 INT,
                exp18 INT,
                exp19 INT,
                exp20 INT,
                exp21 INT
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."batch1";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno VARCHAR(255),
                name VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."batch2";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno VARCHAR(255),
                name VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."batch3";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                rollno VARCHAR(255),
                name VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."lessplan";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255),
                pdf VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."practicalplan";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255),
                pdf VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."teacplan";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255),
                pdf VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."testpaper";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255),
                pdf VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."timetable";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255),
                pdf VARCHAR(255)
            )";
            mysqli_query($con, $sql);

            $subtable = $semname.$row[1]."vismis";
            $sql = "CREATE TABLE $subtable (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255),
                pdf VARCHAR(255)
            )";
            mysqli_query($con, $sql);



        
    }
    fclose($handle);
    
    mysqli_close($con);
}

?>


<?php

if (isset($_POST['submit1'])) {

    ?>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="col-md-10 mx-auto">
                <div class="card-body">
                    <header>Subject List</header>
                    <table class="table table-striped custom-table table-hover" style="background-color: white; border=solid 2px;">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Subject Code</th>
                                <th>Subject Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "cms");
                            $semname = $_POST['semester'];
                            $table = $semname . 'subject';
                            $sql = "SELECT * FROM $table";
                            echo"$table";
                            $result = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>
                                        <a href='deletesubject.php?id=" . $row['id'] . "' onclick='return confirmDelete();'>
                                            <img src='../assets/img/favicon/delete.png' alt='Delete' width='20px'>
                                        </a>
                                      </td>";
                                echo "<td>" . $row['subject_code'] . "</td>";
                                echo "<td>" . $row['subject_name'] . "</td>";
                                echo "</tr>";
                            }
                            mysqli_close($con);
                            ?> 
                            <script>
                                function confirmEdit() {
                                    return confirm("Are you sure you want to edit this record?");
                                }
                                function confirmDelete() {
                                    return confirm("Are you sure you want to delete this record?");
                                }
                            </script>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
}
include("Footer.php");
?>
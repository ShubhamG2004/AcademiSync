<?php
    include("header.php");
?>
<style>
    .card{
        margin-right:50px;
    }
    </style>
 <div class="row">
 <div class="col-md-6 mx-auto">
    <form action="manageteacher.php" method="post" enctype="multipart/form-data">
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
        <div class="form-group">
            <label for="enterCSV">Enter CSV</label>
            <input type="file" class="form-control-file" name="file" accept=".csv">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
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
if (isset($_POST["submit"])) {
    $con = mysqli_connect("localhost", "root", "", "cms");
    $csv = $_FILES['file']['tmp_name'];

    $handle = fopen($csv, "r");
    $i = 0;
    $semname = $_POST['semester'];
    echo"";
    $table = $semname . 'teacher';
     // Construct the table name correctly
    while (($row = fgetcsv($handle, 10000, ",")) !== false) {
        $sql = "INSERT INTO $table VALUES (NULL, '$row[0]', '$row[1]', '$row[2]')";
        mysqli_query($con, $sql);

        
    }
    fclose($handle);
    mysqli_close($con);
}

?>
<?php
    if(isset($_POST["submit1"])){
?>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="col-md-10 mx-auto">
                <header>Teacher List</header>
                <table class="table table-striped custom-table table-hover" style="background-color: white;border=solid 2px;">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Teacher Code</th>
                            <th>Teacher Name</th>
                            <th>Teacher Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "cms");
                        $semname = $_POST['semester'];
                        $table = $semname . 'teacher';
                        $sql = "SELECT * FROM $table ORDER BY teacher_code ASC";
                        $result = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>
                                    <a href='editteacher.php?id=" . $row['id'] . "' onclick='return confirmEdit();'>
                                        <img src='../assets/img/favicon/edit.png' alt='edit' width='20px'>
                                    </a>
                                    <a href='deleteteacher.php?id=" . $row['id'] . "' onclick='return confirmDelete();'>
                                        <img src='../assets/img/favicon/delete.png' alt='Delete' width='20px'>
                                    </a>
                                  </td>";
                            echo "<td>" . $row['teacher_code'] . "</td>";
                            echo "<td>" . $row['teacher_name'] . "</td>";
                            echo "<td>" . $row['teacher_subject'] . "</td>";
                            echo "</tr>";
                        }
                        mysqli_close($con);
                    }
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
<?php

    include("Footer.php");
?>
<?php
include("header.php");
?>
<div class="container">
    <style>
        .form-group {
            margin-bottom: 1rem;
        }

        form {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 1rem;
            margin-top: 2rem;
            background-color: white;
        }

        button[type="submit"] {
            background-color: #007bff;
            border-color: #007bff;
        }

        button[type="submit"]:hover {
            background-color: #0069d9;
            border-color: #0062cc;
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

        .table table-striped custom-table table-hover {
            border: 1px solid #dee2e6;
        }

        tr:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease-in-out;
        }

        td {
            font-weight: bold;
            color: black;
        }

        tr {
            color: black;
        }

        h2 {
            margin-top: 20px;
        }

        <style>.card1 {
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .card-body1 {
            padding: 20px;
        }

        input {
            size="5";
        }

        h2 {
            text-align: center;
        }

        .container {
            margin-top: 30px;
        }

        button {
            margin-top: 10px;
        }

        @media screen and (max-width: 768px) {
            .col-md-6 {
                width: 100%;
            }
        }

        .bttn {
            color: black;
            padding: 8px 15px;
            background: rgb(140, 242, 232);
            border: 1px solid;
            font-weight: bolder;
            border-radius: 10px;
        }
    </style>

    <div class="col-md-6 mx-auto">
        <form action="managestudent.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="selectSemester">Select Semester</label>
                <select class="form-control" name="semester">
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
                <input type="file" class="form-control-file" name="file" accept=".csv">

            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <div class="row">
    <div class="col-md-6 mx-auto" style="border: 1px solid #007bff; padding: 10px;">
        <form method="post">
            <div class="form-group">
                <label for="selectSemester">Select Semester</label>
                <select class="form-control" name="semester" style="width: 100%;">
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
    <div class="btns">
        <button onclick="printCard()" class="bttn">Print Table</button>
        <button onclick="exportToExcel()" class="bttn">Export to Excel</button>
        <!-- <button  class="bttn" style="margin-right:100px"><a href="bat1Assignment.php">ADD Marks</a></button> -->
    </div>
<?php   
if (isset($_POST["submit"])) {
    $con = mysqli_connect("localhost", "root", "", "cms");
    $csv = $_FILES['file']['tmp_name'];

    $semname = $_POST['semester'];
    $table = $semname . 'studentdetail';
    $handle = fopen($csv, "r");
    $i = 0;
    while(($cont = fgetcsv($handle,1000,",")) !== false)
               {
                   if($i==0)
                   {
                    $i++;
                    continue;
                   }
                   else
                   {
                        $query = "INSERT INTO $table VALUES('','$cont[0]','$cont[1]','$cont[2]')";
                   }
                   $i++;
                   $con->query($query);
                   
               }
                    $table1 = $semname.'subject';
                    $sql2 = "SELECT * FROM $table1";
                    $result2 = $con->query($sql2);
   
                    while($row1 = $result2->fetch_assoc())
                     {
                    $table = $semname.'studentdetail';
                           $sql2 = "SELECT * FROM $table";
                           $result = $con->query($sql2);
   
                           while($row = $result->fetch_assoc())
                           {
                              if(str_contains($row['subject'], $row1['subject_name']))
                                {
                                   $table = $semname.$row1['subject_name'];
                                   $que = "INSERT INTO $table VALUES (''," . $row['rollno'] .",'".$row['name']."')";
                                   $con->query($que);

                                   $table1 = $table."absent";
                                   $que1 = "INSERT INTO $table1 VALUES (''," . $row['rollno'] .",'".$row['name']."')";
                                   $con->query($que1);

                                   $table2 = $table."marks";
                                   $que2 = "INSERT INTO $table2 VALUES (''," . $row['rollno'] .",'".$row['name']."',null, NULL)";
                                   $con->query($que2);

                                //    $table3 = $table."marks";
                                //    $que2 = "INSERT INTO $table2 VALUES (''," . $row['rollno'] .",'".$row['name']."')";
                                //    $con->query($que2);

                                }
                           }
                     }

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
                    <header>Student List</header>
                    <table class="table table-striped custom-table table-hover "
                        style="background-color: white;border=solid 2px;">
                        <thead>
                            <tr>
                                <th>Roll No</th>
                                <th>Student Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "cms");
                            $semname = $_POST['semester'];
                            $table = $semname . 'studentdetail';
                            $sql = "SELECT * FROM $table ORDER BY rollno ASC";
                            $result = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                
                                echo "<td>" . $row['rollno'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
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
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "cms");
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $sql = "DELETE FROM studentdetail WHERE id='$id'";
                        mysqli_query($con, $sql);
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            header("Location: studentlist.php");
                            ob_end_flush();
                        }
                    }
                    mysqli_close($con);
    
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/table-to-excel/dist/tableToExcel.min.js"></script>

<script>function printCard() {
        var content = document.querySelector('.card').innerHTML;
        var printWindow = window.open('', '', 'height=500,width=700');
        printWindow.document.write('<html><head><title>Card Contents</title></head><body>');
        printWindow.document.write(content);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
    function exportToExcel() {
        // Create a new workbook
        var workbook = XLSX.utils.book_new();

        // Add a worksheet
        var worksheet = XLSX.utils.table_to_sheet(document.querySelector('.table'));

        // Add the worksheet to the workbook
        XLSX.utils.book_append_sheet(workbook, worksheet, 'Batch1 Assignment Marks');

        // Save the workbook as an Excel file
        XLSX.writeFile(workbook, 'batch1_assignment_marks.xlsx');
    }
</script>

<?php
    }
include("Footer.php");
?>

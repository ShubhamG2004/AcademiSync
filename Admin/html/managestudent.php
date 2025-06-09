<?php
include("header.php");
?>
<div class="container">
    <style>
        /* Main Container Styles */
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
        }

        /* Form Styles */
        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 10px 15px;
            font-size: 16px;
        }

        .form-control-file {
            padding: 10px 0;
        }

        /* Button Styles */
        .btn-primary {
            background-color: #4a6cf7;
            border-color: #4a6cf7;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 500;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #3a5ce4;
            border-color: #3a5ce4;
            transform: translateY(-2px);
        }

        /* Header Styles */
        .table-header {
            font-size: 24px;
            color: #4a6cf7;
            text-align: center;
            font-weight: 600;
            margin: 20px 0;
            padding: 15px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        /* Table Styles */
        .custom-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .custom-table thead {
            background-color: #4a6cf7;
            color: white;
        }

        .custom-table th, 
        .custom-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .custom-table tbody tr:hover {
            background-color: #f8f9fa;
            transform: scale(1.005);
            transition: transform 0.2s ease-in-out;
        }

        /* Action Buttons */
        .bttn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4a6cf7;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: 500;
            text-decoration: none;
            margin-right: 10px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .bttn:hover {
            background-color: #3a5ce4;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            .form-container {
                padding: 15px;
            }
            
            .custom-table {
                display: block;
                overflow-x: auto;
            }
            
            .bttn {
                display: block;
                width: 100%;
                margin-bottom: 10px;
            }
        }

        /* Card Styles */
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
        }
    </style>

    <div class="row">
        <div class="col-md-6 mx-auto form-container">
            <h3>Upload Student Data</h3>
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
                    <label for="enterCSV">Upload CSV File</label>
                    <input type="file" class="form-control-file" name="file" accept=".csv">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mx-auto form-container">
            <h3>View Student List</h3>
            <form method="post">
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
                <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
            </form>
        </div>
    </div>

    <div class="action-buttons" style="margin: 20px 0;">
        <button onclick="printCard()" class="bttn">Print Table</button>
        <button onclick="exportToExcel()" class="bttn">Export to Excel</button>
    </div>

    <?php   
    if (isset($_POST["submit"])) {
        $con = mysqli_connect("localhost", "root", "", "cms");
        $csv = $_FILES['file']['tmp_name'];

        $semname = $_POST['semester'];
        $table = $semname . 'studentdetail';
        $handle = fopen($csv, "r");
        $i = 0;
        while(($cont = fgetcsv($handle,1000,",")) !== false) {
            if($i==0) {
                $i++;
                continue;
            } else {
                $query = "INSERT INTO $table VALUES('','$cont[0]','$cont[1]','$cont[2]')";
            }
            $i++;
            $con->query($query);
        }
        
        $table1 = $semname.'subject';
        $sql2 = "SELECT * FROM $table1";
        $result2 = $con->query($sql2);

        while($row1 = $result2->fetch_assoc()) {
            $table = $semname.'studentdetail';
            $sql2 = "SELECT * FROM $table";
            $result = $con->query($sql2);

            while($row = $result->fetch_assoc()) {
                if(str_contains($row['subject'], $row1['subject_name'])) {
                    $table = $semname.$row1['subject_name'];
                    $que = "INSERT INTO $table VALUES (''," . $row['rollno'] .",'".$row['name']."')";
                    $con->query($que);

                    $table1 = $table."absent";
                    $que1 = "INSERT INTO $table1 VALUES (''," . $row['rollno'] .",'".$row['name']."')";
                    $con->query($que1);

                    $table2 = $table."marks";
                    $que2 = "INSERT INTO $table2 VALUES (''," . $row['rollno'] .",'".$row['name']."',null, NULL)";
                    $con->query($que2);
                }
            }
        }

        mysqli_close($con);
    }
    ?>

    <?php
    if(isset($_POST["submit1"])) {
    ?>
        <div class="card">
            <div class="table-header">Student List</div>
            <div class="table-responsive">
                <table class="custom-table">
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
                    </tbody>
                </table>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/table-to-excel/dist/tableToExcel.min.js"></script>
<script src="https://cdn.sheetjs.com/xlsx-0.19.3/package/dist/xlsx.full.min.js"></script>

<script>
    function printCard() {
        var content = document.querySelector('.card').innerHTML;
        var printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Student List</title>');
        printWindow.document.write('<style>');
        printWindow.document.write(`
            body { font-family: Arial, sans-serif; }
            .table-header {
                font-size: 24px;
                color: #4a6cf7;
                text-align: center;
                font-weight: 600;
                margin: 20px 0;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
            }
            th, td {
                padding: 12px 15px;
                text-align: left;
                border-bottom: 1px solid #e0e0e0;
            }
            th {
                background-color: #4a6cf7;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #f8f9fa;
            }
        `);
        printWindow.document.write('</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(content);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }

    function exportToExcel() {
        const table = document.querySelector('.custom-table');
        TableToExcel.convert(table, {
            name: 'student_list.xlsx',
            sheet: {
                name: 'Student List'
            }
        });
    }
</script>

<?php
include("Footer.php");
?>
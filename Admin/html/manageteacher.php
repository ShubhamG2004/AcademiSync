<?php
include("header.php");
?>
<style>
    /* Main Container Styles */
    .container {
        max-width: 1200px;
        margin: 30px auto;
        padding: 20px;
    }

    /* Card Styles */
    .card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        overflow: hidden;
    }

    .card.border-primary {
        border: 2px solid #4a6cf7 !important;
    }

    .card-body {
        padding: 25px;
    }

    /* Form Styles */
    .form-container {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
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
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #4a6cf7;
        box-shadow: 0 0 0 0.2rem rgba(74, 108, 247, 0.25);
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
    header {
        font-size: 24px;
        color: #4a6cf7;
        text-align: center;
        font-weight: 600;
        margin: 20px 0;
        padding: 15px;
        background-color: #ffffff;
        border-radius: 8px;
    }

    /* Table Styles */
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
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
    }

    /* Action Icons */
    .action-icon {
        width: 20px;
        height: 20px;
        transition: all 0.3s ease;
        margin-right: 10px;
    }

    .action-icon:hover {
        transform: scale(1.2);
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .container {
            padding: 15px;
        }
        
        .form-container, .card {
            padding: 15px;
        }
        
        .custom-table {
            display: block;
            overflow-x: auto;
        }
        
        .action-icon {
            margin-right: 5px;
        }
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="form-container">
                <h3>Upload Teacher Data</h3>
                <form action="manageteacher.php" method="post" enctype="multipart/form-data">
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
    </div>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card border-primary">
                <div class="card-body">
                    <h3>View Teacher List</h3>
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
        </div>
    </div>

    <?php
    if (isset($_POST["submit"])) {
        $con = mysqli_connect("localhost", "root", "", "cms");
        $csv = $_FILES['file']['tmp_name'];

        $handle = fopen($csv, "r");
        $i = 0;
        $semname = $_POST['semester'];
        $table = $semname . 'teacher';
        
        while (($row = fgetcsv($handle, 10000, ",")) !== false) {
            $sql = "INSERT INTO $table VALUES (NULL, '$row[0]', '$row[1]', '$row[2]')";
            mysqli_query($con, $sql);
        }
        
        fclose($handle);
        mysqli_close($con);
    }
    ?>

    <?php
    if (isset($_POST["submit1"])) {
    ?>
        <div class="card">
            <div class="card-body">
                <header>Teacher List</header>
                <div class="table-responsive">
                    <table class="custom-table">
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
                                            <img src='../assets/img/favicon/edit.png' alt='Edit' class='action-icon'>
                                        </a>
                                        <a href='deleteteacher.php?id=" . $row['id'] . "' onclick='return confirmDelete();'>
                                            <img src='../assets/img/favicon/delete.png' alt='Delete' class='action-icon'>
                                        </a>
                                      </td>";
                                echo "<td>" . $row['teacher_code'] . "</td>";
                                echo "<td>" . $row['teacher_name'] . "</td>";
                                echo "<td>" . $row['teacher_subject'] . "</td>";
                                echo "</tr>";
                            }
                            mysqli_close($con);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            function confirmEdit() {
                return confirm("Are you sure you want to edit this record?");
            }
            function confirmDelete() {
                return confirm("Are you sure you want to delete this record?");
            }
        </script>
    <?php
    }
    ?>
</div>

<?php
include("Footer.php");
?>
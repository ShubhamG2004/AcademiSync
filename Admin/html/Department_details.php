<?php
// Hide warnings and notices (but keep fatal errors)
error_reporting(E_ERROR | E_PARSE);
session_start();
?>
<?php
    include("header.php");
?>
<div class="container">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        form {
            border: none;
            border-radius: 10px;
            padding: 2rem;
            margin-top: 2rem;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        button[type="submit"] {
            background-color: #4e73df;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        
        button[type="submit"]:hover {
            background-color: #2e59d9;
            transform: translateY(-1px);
        }
        
        header {
            font-size: 28px;
            color: #4e73df;
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
            text-align: center;
            font-weight: 700;
            margin-bottom: 25px;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .custom-table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .custom-table thead {
            background-color: skyblue;
            color: white;
        }
        
        .custom-table th {
            padding: 15px;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        
        .custom-table td {
            padding: 12px 15px;
            vertical-align: middle;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .custom-table tbody tr:last-child td {
            border-bottom: none;
        }
        
        tr:hover {
            background-color: #f8f9fc;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        
        td {
            font-weight: 500;
            color: #5a5c69;
        }
        
        .add-btn {
            display: inline-block;
            background-color: #4e73df;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .add-btn:hover {
            background-color: #2e59d9;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .action-icons a {
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .action-icons a:hover {
            transform: scale(1.2);
        }
        
        .table-container {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-container">
                    <header>Department Details</header>
                    <a href="addDept.php" class="add-btn">+ Add Department</a>
                    <div class="table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>ID</th>
                                    <th>Department</th>
                                    <th>HOD</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Check if session variables exist before using them
                                $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
                                $pass = isset($_SESSION['pass']) ? $_SESSION['pass'] : '';
                                if (!empty($user)) {
                                    echo "<small class='text-muted'>Logged in as: $user</small>";
                                }
                                
                                $con = @mysqli_connect("localhost", "root", "", "cms");
                                
                                if ($con) {
                                    $sql = "SELECT * FROM department_details";
                                    $result = @mysqli_query($con, $sql);
                                    
                                    if ($result && mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td class='action-icons'>
                                                <a href='edit_department.php?id=" . $row['id'] . "' onclick='return confirmEdit();'>
                                                    <img src='../assets/img/favicon/edit.png' alt='edit' width='20px'>
                                                </a>
                                                <a href='department_details.php?id=" . $row['id'] . "' onclick='return confirmDelete();'>
                                                    <img src='../assets/img/favicon/delete.png' alt='Delete' width='20px'>
                                                </a>
                                            </td>";
                                            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['department']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['HOD']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='5' class='text-center'>No departments found</td></tr>";
                                    }
                                    @mysqli_close($con);
                                } else {
                                    echo "<tr><td colspan='5' class='text-center'>Database connection failed</td></tr>";
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
                        <?php
                            $con = @mysqli_connect("localhost", "root", "", "cms");
                            if ($con && isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $sql = "DELETE FROM department_details WHERE id='$id'";
                                @mysqli_query($con, $sql);
                                echo "<script>window.location.href='department_details.php';</script>";
                            }
                            @mysqli_close($con);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include("Footer.php");
?>
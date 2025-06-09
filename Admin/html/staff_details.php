<?php
    include("header.php");
?>
<div class="container">
    <style>
        body {
            background: linear-gradient(to bottom, rgb(155, 165, 164), rgb(156, 181, 192));
        }

        header {
            font-size: 28px;
            color: #dc3545;
            border-radius: 8px;
            border: 1px solid #dee2e6;
            padding: 10px;
            margin-top: 30px;
            text-align: center;
            font-weight: bold;
            background-color: #fff;
            box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
        }

        a.btn-add {
            display: inline-block;
            margin: 10px 0;
            font-weight: 500;
            color: #fff;
            background-color: #28a745;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
        }

        a.btn-add:hover {
            background-color: #218838;
        }

        .table {
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
        }

        .table th {
            background-color: #343a40;
            color: white;
            vertical-align: middle;
        }

        .table td {
            vertical-align: middle;
            color: #212529;
            font-weight: 500;
        }

        tr:hover {
            transform: scale(1.01);
            transition: transform 0.2s ease-in-out;
            background-color: #f1f1f1;
        }

        .action-icons img {
            margin-right: 8px;
            cursor: pointer;
        }
    </style>

    <div class="row">
        <div class="col-md-12 mx-auto">
            <header>Staff Details</header>
            <a href="addStaff.php" class="btn-add">+ Add Staff</a>
            <div class="table-responsive">
                <table class="table table-striped table-hover custom-table">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>ID</th>
                            <th>Teacher Full Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Education</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $con = mysqli_connect("localhost", "root", "", "cms");
                            $sql = "SELECT * FROM staff_details";
                            $result = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td class='action-icons'>
                                        <a href='editstudent.php?id={$row['id']}' onclick='return confirmEdit();'>
                                            <img src='../assets/img/favicon/edit.png' alt='Edit' width='20px'>
                                        </a>
                                        <a href='staff_details.php?id={$row['id']}' onclick='return confirmDelete();'>
                                            <img src='../assets/img/favicon/delete.png' alt='Delete' width='20px'>
                                        </a>
                                      </td>";
                                echo "<td>{$row['id']}</td>";
                                echo "<td>{$row['teacher_name']}</td>";
                                echo "<td>{$row['email']}</td>";
                                echo "<td>{$row['phone_no']}</td>";
                                echo "<td>{$row['education']}</td>";
                                echo "<td>{$row['designation']}</td>";
                                echo "<td>{$row['department']}</td>";
                                echo "<td><img src='../uploads/{$row['photo']}' alt='Photo' width='40px' height='40px' style='object-fit:cover; border-radius:5px;'></td>";
                                echo "</tr>";
                            }

                            mysqli_close($con);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
            $con = mysqli_connect("localhost", "root", "", "cms");
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "DELETE FROM staff_details WHERE id='$id'";
                mysqli_query($con, $sql);
                echo "<script>window.location.href='staff_details.php';</script>";
            }
            mysqli_close($con);
        ?>
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

<?php include("footer.php"); ?>

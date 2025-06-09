<?php include("header.php"); ?>
<?php include("../database/db.php"); ?>

<style>
    body {
        background: linear-gradient(to bottom, rgb(155, 165, 164), rgb(156, 181, 192));
        padding-top: 30px;
    }

    .form-wrapper {
        background-color: white;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
    }

    h2 {
        font-size: 30px;
        color: #333;
        margin-bottom: 20px;
    }

    label {
        font-weight: 500;
        color: #333;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        padding: 10px 25px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        margin-top: 20px;
    }

    input[type="submit"]:hover {
        background-color: #0069d9;
        cursor: pointer;
    }

    table {
        width: 100%;
    }

    th {
        text-align: left;
        padding-right: 10px;
    }

    .form-section {
        margin-bottom: 15px;
    }

    tr:hover {
        transform: scale(1.01);
        transition: transform 0.2s ease-in-out;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-wrapper">
                <form action="" method="post">
                    <h2 class="text-center">Insert Department</h2>
                    <div class="form-section">
                        <label for="id">ID:</label>
                        <input type="number" name="id" id="id">
                    </div>
                    <div class="form-section">
                        <label for="department">Department:</label>
                        <input type="text" name="department" id="department" required>
                    </div>
                    <div class="form-section">
                        <label for="HOD">HOD:</label>
                        <input type="text" name="HOD" id="HOD" required>
                    </div>
                    <div class="form-section">
                        <label for="description">Description:</label>
                        <input type="text" name="description" id="description" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect("localhost", "root", "", "cms");
    $id = $_POST['id'];
    $department = $_POST['department'];
    $HOD = $_POST['HOD'];
    $description = $_POST['description'];

    $sql = "INSERT INTO department_details (id, department, HOD, description)
            VALUES ('$id', '$department', '$HOD', '$description')";
    mysqli_query($con, $sql);
}
?>

<?php include("footer.php"); ?>

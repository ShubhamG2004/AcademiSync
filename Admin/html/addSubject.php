<?php include("header.php"); ?>
<?php include("../database/db.php"); ?>

<?php
$nameErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["tname"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["tname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<style>
    body {
        background: linear-gradient(to bottom, rgb(155, 165, 164), rgb(156, 181, 192));
        padding-top: 30px;
    }

    .form-container {
        background-color: white;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        margin-top: 20px;
    }

    .error {
        color: red;
    }

    h2 {
        font-size: 28px;
        margin-bottom: 20px;
    }

    input,
    select {
        margin-bottom: 15px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 25px;
        font-size: 16px;
        border-radius: 4px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 form-container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h2 class="text-center">Insert Subject</h2>

                <label>Teacher Name:</label>
                <input type="text" name="tname" class="form-control" required>
                <span class="error"><?php echo $nameErr; ?></span>

                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>

                <label>Phone No:</label>
                <input type="text" name="no" class="form-control" required>

                <label>Education:</label>
                <input type="text" name="education" class="form-control" required>

                <label>Designation:</label>
                <input type="text" name="designation" class="form-control" required>

                <label>Department:</label>
                <input type="text" name="department" class="form-control" required>

                <label>Photo URL:</label>
                <input type="text" name="photo" class="form-control">

                <label>Year:</label>
                <select name="year" class="form-control">
                    <option value="first">First Year</option>
                    <option value="second">Second Year</option>
                    <option value="third">Third Year</option>
                </select>

                <label>Semester (1st Year):</label>
                <select name="sem1" class="form-control">
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                </select>

                <label>Semester (2nd Year):</label>
                <select name="sem2" class="form-control">
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                </select>

                <label>Semester (3rd Year):</label>
                <select name="sem3" class="form-control">
                    <option value="5th">5th</option>
                    <option value="6th">6th</option>
                </select>

                <label>Subjects (1st Sem):</label>
                <select name="sub1" class="form-control">
                    <option value="phy">Physics</option>
                    <option value="chem">Chemistry</option>
                </select>

                <label>Subjects (2nd Sem):</label>
                <select name="sub2" class="form-control">
                    <option value="m1">M1</option>
                    <option value="ITS">ITS</option>
                </select>

                <label>Subjects (3rd Sem):</label>
                <select name="sub3" class="form-control">
                    <option value="cpr">CPR</option>
                    <option value="ds">DS</option>
                </select>

                <br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "") {
    $con = mysqli_connect("localhost", "root", "", "cms");

    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $tname = $_POST['tname'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $education = $_POST['education'];
    $designation = $_POST['designation'];
    $department = $_POST['department'];
    $photo = $_POST['photo'];

    $sql = "INSERT INTO staff_details 
        (id, teacher_name, email, phone_no, education, designation, department, photo) 
        VALUES ('$id', '$tname', '$email', '$no', '$education', '$designation', '$department', '$photo')";

    if (mysqli_query($con, $sql)) {
        echo "<div class='text-center mt-3 text-success'>Data inserted successfully!</div>";
    } else {
        echo "<div class='text-center mt-3 text-danger'>Error: " . mysqli_error($con) . "</div>";
    }
}
?>

<?php include("Footer.php"); ?>

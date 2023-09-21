<?php
    include("header.php");
?>
<style>
    h3{
        color:blue;
        font-weight:bolder;
        text-decoration:underline;
    }
    .form-group {
        margin-bottom: 20px;
    }
    label{
        color:red;
    }
    input{
        color:blue;
    }
    .custom-width {
    width: 350px;
    height:40px; 
    border-radius: 10px;
    border: 2px solid black;/* Adjust the width as per your requirements */
    }
</style>
<div class="container mt-5">
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">Upload Course Curriculam</h3>
        </div>
        <div class="card-body">
        <form action="Corsecurri.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <select name="subject" class="custom-select custom-width">
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
            <div class="form-group">
                <label for="pdf">Select a Course curriculam PDF file to upload:</label><br>
                <input type="file" name="pdf" class="form-control-file" id="pdf">
            </div> 
            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
            <?php
                if(isset($_POST['submit'])){
                    $pdfName = $_FILES['pdf']['name'];
                    $pdfTempName = $_FILES['pdf']['tmp_name'];
                    $pdfSize = $_FILES['pdf']['size'];
                    $pdfType = $_FILES['pdf']['type'];
                    $pdfError = $_FILES['pdf']['error'];
                    $uploadDir = 'pdfs/';
                    if (!is_dir($uploadDir)) {
                        // Create the directory if it doesn't exist
                        mkdir($uploadDir);
                    }
                    $uploadFile =basename($pdfName);

                    // Check if the file is a PDF and does not exceed the allowed size
                    $allowedTypes = array('application/pdf');
                    $maxSize = 5 * 1024 * 1024; // 5MB
                    if (!in_array($pdfType, $allowedTypes) || $pdfSize > $maxSize) {
                        echo "<div class='alert alert-danger mt-3'>Invalid file.</div>";
                        exit();
                    }

                    // Move the uploaded file to the designated folder
                    if (move_uploaded_file($pdfTempName, $uploadDir . $uploadFile)) {
                        // Save the details of the uploaded file in the database
                        $conn = mysqli_connect("localhost", "root", "", "cms");
                        $table = $semname.$_POST['subject'].'academiccalendar';
                        $sql = "INSERT INTO $table (name, pdf) VALUES ('$pdfName', '$uploadFile')";
                        mysqli_query($conn, $sql);
                        mysqli_close($conn);

                        echo "<div class='alert alert-success mt-3'>File uploaded successfully.</div>";
                    } else {
                        echo "<div class='alert alert-danger mt-3'>Error uploading file.</div>";
                    }
                }
            ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Course Curriculam</h3>
        </div>
        <div class="card-body">
        <form action="Corsecurri.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <select name="subject" class="custom-select custom-width">
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
            <button type="submit" name="submit1" class="btn btn-primary">Display</button>
        </form>
            <?php
            if(isset($_POST['submit1'])){
                $uploadDir = 'pdfs/';
                // Retrieve the details of the last uploaded PDF file from the database
                $con = mysqli_connect("localhost", "root", "", "cms");
                $table = $semname.$_POST['subject'].'academiccalendar';
                $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 1";
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $pdfName = $row['name'];
                    $pdfLocation = $uploadDir . $row['pdf'];
                    mysqli_free_result($result);
                    mysqli_close($con);

                    // Display the embedded PDF viewer with the retrieved PDF file
                    echo "<embed src='".$pdfLocation."' type='application/pdf' width='100%' height='600px'>";
                } else {
                    echo "No PDF files found.";
}}
?>
<?php
    include("Footer.php");
?>
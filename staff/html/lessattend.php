<?php
    include("header.php");
?>
<style>
    .card{
        width: 100%;
        margin-top:50px;
        margin-right: 50px;
    }
</style>
<?php
$conn = mysqli_connect("localhost", "root", "", "cms");

// Get attendance data for all students
$sql = "SELECT * FROM `absent` ORDER BY rollno ASC";
$result = mysqli_query($conn, $sql);

// Initialize an empty array to store the students with less than 75% attendance
$less_attendance = array();

// Loop through each student's attendance data
while ($row = mysqli_fetch_assoc($result)) {
    $total_classes = 0;
    $attended_classes = 0;

    // Loop through the attendance data for each date
    foreach ($row as $key => $value) {
        // Check if the key is a date (attendance data starts from the 3rd column)
        if (preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $key)) {
            // Increment the total classes
            $total_classes++;

            // Check if the student attended the class on this date
            if ($value != 'A') {
                $attended_classes++;
            }
        }
    }

    // Calculate the percentage of attendance for this student
    $attendance_percentage = ($attended_classes / $total_classes) * 100;

    // Check if the percentage is less than 75%
    if ($attendance_percentage < 75) {
        // Add this student to the array of students with less than 75% attendance
        $less_attendance[] = array(
            'rollno' => $row['rollno'],
            'name' => $row['name'],
            'percentage' => $attendance_percentage,
        );
    }
}
?>
<div class="card">
    <div class="card-header">
        Students with Less Than 75% Attendance
    </div>
    <div class="card-body">
        <?php
        if (!empty($less_attendance)) {
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th>Roll No.</th><th>Name</th><th>Attendance Percentage</th></tr></thead>";
            echo "<tbody>";
            foreach ($less_attendance as $student) {
                echo "<tr><td>{$student['rollno']}</td><td>{$student['name']}</td><td>" . number_format($student['percentage'], 2) . "%</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "No students have less than 75% attendance.";
        }
        ?>
    </div>
</div>

<?php
    include("Footer.php");
?>
<?php
    include("header.php");
?>
<style>
    .card{
        width:90%;
    }
    h2{
        margin-top:20px;
    }
    <style>
    .card1 {
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ddd;
    }
    
    .card-body1 {
      padding: 20px;
    }
    input{
        size="5";
    }
    h2{
        text-align:center;
    }
    .container{
        margin-top:30px;
    }
    button{
        margin-top:10px;
    }
    
    @media screen and (max-width: 768px) {
      .col-md-6 {
        width: 100%;
      }
    }
    .bttn{
        color:black;
        padding: 8px 15px;
        background:rgb(140, 242, 232);
        border: 1px solid;
        font-weight:bolder;
        border-radius: 10px;
    }
    </style>
    <h4>Batch1 Assignment marks</h4>
    <div class="btns">
        <button onclick="printCard()" class="bttn">Print Table</button>
        <button onclick="exportToExcel()" class="bttn">Export to Excel</button>
        <button  class="bttn" style="margin-right:100px"><a href="batch3attend.php">ADD Attendance</a></button>
</div>
<div class="form-container">
    <form method="post">
        <div class="select-wrapper">
            <select name="subject" class="custom-select">
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
            <button type="submit" class="submit-button" name="submit">Submit</button>
        </div>
    </form>
    </div>
<?php
if(isset($_POST["submit"])){
$conn = mysqli_connect("localhost", "root", "", "cms");
$table = $semname.$_POST['subject'].'bat3attend';
$sql4 = "SELECT * FROM $table ORDER BY rollno ASC";
$result = mysqli_query($conn, $sql4);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
echo '<div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Attendance Report</h4>
            </div>
            <div class="card-body">';
echo '<div style="overflow-x: auto;">
        <table class="table table-bordered" style="width:100%;border-collapse:collapse;border:1px solid #ddd;">
            <thead>
                    <tr style="background-color:#343a40;color:white;border: 1px solid black;font-weight:bolder">
                    <th style="padding:12px;text-align:left;border: 1px solid black;color:white;font-weight:bolder">Action</th>
                    <th style="padding:12px;text-align:left;border: 1px solid black;color:white;font-weight:bolder">Roll No</th>
                    <th style="padding:12px;text-align:left;border: 1px solid black;color:white;font-weight:bolder">Name</th>';

$row1 = mysqli_fetch_assoc($result);
$key1 = array_keys($row1);

for($i = 3; $i < count($row1); $i++){
    echo "<th style='padding:12px;text-align:left;border: 1px solid black;color:white;font-weight:bolder'>$key1[$i]</th>";
}

echo '<th style="padding:12px;text-align:left;border: 1px solid black;color:white;font-weight:bolder">Total</th>
            </tr>
        </thead>
        <tbody>';
$date_format = 'Y-m-d'; 
while ($row = mysqli_fetch_assoc($result)) 
{
    $key = array_keys($row);
    echo "<tr>";
    echo "<td style='border: 1px solid black;'>";
    echo "<a href='editpresent.php?id=" . $row['rollno'] . "'onclick='return confirmEdit();' class=\"editbtn\">";
    echo "Edit<i class='bx bx-edit'></i></a>";
    echo "</td>";
    echo "<td style='padding:12px;text-align:left;color:black;font-weight:bold;border: 1px solid black;'>".$row['rollno']."</td>";
    echo "<td style='padding:12px;text-align:left;color:black;font-weight:bold;border: 1px solid black;'>".$row['name']."</td>";
    $tot = 0;
    for($i = 3; $i < count($row); $i++){
        if($row[$key1[$i]] == '0'){
            echo '<td style="padding:12px;text-align:left;background: #ff9999;color:black;font-weight:bold;border: 1px solid black;">'.$tot.'</td>';
        } 
        else
        {
            $tot++;
            echo '<td style="padding:12px;text-align:left;color:black;font-weight:bold;border: 1px solid black;">'.$tot.'</td>';
        }
    }
    echo '<td style="padding:12px;text-align:left;color:black;font-weight:bold;border: 1px solid black;">'.$tot.'</td></tr>';
}

echo '</tbody></table></div></div></div>';
}
?>
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
  XLSX.writeFile(workbook, 'batch3_assignment_marks.xlsx');
}
</script>
<?php
    include("Footer.php");
?>
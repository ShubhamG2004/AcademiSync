<?php
    include("header.php");
?>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    body{
        background:rgb(140, 242, 232);
    }
    .card {
    margin-top: 30px;
    }    
    #inpdate{
        size="5";
    }
    .editbtn{
        display:flex;
        padding: 2px 4px;
        background: #69c4ff;
        color: white;
        border-radius: 5px;
        font-weight: bolder;
    }
    .editbtn:hover{
        background: white;
        color: #69c4ff;
        box-shadow: 0px 0px 4px  #69c4ff;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        align-items:center;
        align-content: center;
    }

    .card1 {
        border: 1px solid #ccc;
        border-radius: 5px;
        margin: 20px 0;
        background-color: #fff;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        width:100;
    }

    .card1-header {
        padding: 10px 15px;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ccc;
        font-size: 18px;
        font-weight: bold;
    }

    .card1-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    button[type="submit"] {
        background-color: #007bff
    }
    .custom-width {
    width: 350px;
    height:40px; /* Adjust the width as per your requirements */
    }
    .select-wrapper {
  position: relative;
  display: inline-block;
  margin-right:50% ;
}

.custom-select {
  appearance: none;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  cursor: pointer;
  width: 200px;
}
.card{
    margin-top:15px;
}
.submit-button {
  padding: 10px 15px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
}

.submit-button:hover {
  background-color: #0069d9;
}
.form-container {
        justify-content: center;
        align-items: center;
        margin-right:50px ;
    }
    .bu{
        display: flex;
        margin-right: 20px;
    }
    .bttn{
        background-color: greenyellow;
        padding: 10px;
        width: 130px;
        height:50px;
        justify-content: center;
        align-items: center;
        margin-right: 100px;
        display: flex;
        border-radius: 10px;
        gap:5px;
    }
</style>

<div class="container">
  <div class="card1">
    <h5 class="card1-header">Attendance</h5>
    <div class="card1-body">
    <form method="post">
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
        <label for="name">Absent number:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="inpdate">Date:</label>
        <input type="date" class="form-control" id="inpdate" name="inpdate">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

      <?php
        $db = mysqli_connect("localhost", "root", "", "cms");

        if(isset($_POST["submit"])){
            $rollnos = $_POST['name'];
            $date = $_POST['inpdate'];
            $table = $semname.$_POST['subject']."absent";
            $sqlcol = "ALTER TABLE `$table` ADD `$date` VARCHAR(100) NOT NULL";
            
            if(mysqli_query($db, $sqlcol)){
                $arr = explode(",", $rollnos);
                for($i = 0; $i < count($arr); $i++){
                $sql = "UPDATE `$table` SET `$date` = 'A' WHERE `$table`.`rollno` = $arr[$i]";
                mysqli_query($db, $sql);
                // echo $sql;
            }
            }
        }  
        
        ?>
    </div>
  </div>
</div>
<div class="bu">
<button onclick="printCard()" class="bttn">Print Table</button>
<button onclick="ExporttoExcel()" class="bttn">Export to Excel</button>
</div>
<div class="form-container" style="margin-right: 100px;">
    <form method="POST">
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
            <button type="submit" class="submit-button" name="submit1">Submit</button>
        </div>
    </form>
</div>

<?php

$conn = mysqli_connect("localhost", "root", "", "cms");
if(isset($_POST["submit1"])){
    $table = $semname.$_POST['subject']."absent";
$sql4 = "SELECT * FROM `$table` ORDER BY rollno ASC";
$result = mysqli_query($conn, $sql4);

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
        if($row[$key1[$i]] == 'A'){
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
<script src="https://cdn.jsdelivr.net/npm/tableexport@5.2.0/dist/js/tableexport.min.js"></script>
<script>
 function printCard() {
        var card = document.querySelector('.card');
        var printWindow = window.open('', '', 'height=500,width=800');
        printWindow.document.write('<style>th:first-child,td:first-child,th:nth-child(3),td:nth-child(3){display:none}</style>');
        printWindow.document.write(card.innerHTML);
        printWindow.document.write('</body></html>');
        printWindow.print();
        printWindow.close();
    } 
    function ExporttoExcel() {
    var table = document.getElementsByTagName("table")[0];

    // Convert the table data to CSV format
    var csv = [];
    var rows = table.rows;
    for (var i = 0; i < rows.length; i++) {
        var row = [];
        var cells = rows[i].cells;
        for (var j = 0; j < cells.length; j++) {
        row.push(cells[j].textContent.trim());
        }
        csv.push(row.join(","));
    }
    var csvData = new Blob([csv.join("\n")], { type: "text/csv" });
    var url = URL.createObjectURL(csvData);

    var link = document.createElement("a");
    link.setAttribute("download", "attendance-report.csv");
    link.setAttribute("href", url);
    link.click();
}

</script>
<?php
    include("Footer.php");
?>
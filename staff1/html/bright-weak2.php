<?php
    include("header.php");
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
}
  </style>
</head>
<form action="bright-weak2.php" method="POST">
  <div class="container">
    <h2>Test2</h2>
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
            <!-- <button type="submit" class="submit-button">Submit</button> -->
        </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card1">
          <div class="card-body1">
            <h4 class="card-title">Bright student</h4>
            <input type="text" class="form-control form-control-sm" name="bright_student" >
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card1">
          <div class="card-body1">
            <h4 class="card-title">Weak student</h4>
            <input type="text" class="form-control form-control-sm" name="weak_student" >
          </div>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<div class="btns">
        <button onclick="printCard()" class="bttn">Print Table</button>
        <button onclick="exportToExcel()" class="bttn">Export to Excel</button>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $bright_student = $_POST["bright_student"];
    $weak_student = $_POST["weak_student"];

    $con = mysqli_connect("localhost", "root", "", "cms");
    $table = $semname.$_POST['subject'].'marks';
    
    // Query for bright students
    $sql_bright = "SELECT * FROM $table WHERE test2 >= $bright_student";
    $result_bright = mysqli_query($con, $sql_bright);

    // Query for weak students
    $sql_weak = "SELECT * FROM $table WHERE test2 <= $weak_student";
    $result_weak = mysqli_query($con, $sql_weak);

    echo '<div class="container">';
    echo '<div class="card">';
    echo '<div class="card-header">Students Performance</div>';
    echo '<div class="card-body">';
    echo '<div class="row">';

    // Table for bright students
    echo '<div class="col-md-6">';
    echo '<h4>Bright Students</h4>';
    echo '<table class="table">';
    echo '<thead><tr><th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight:bold;">Roll No</th><th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight:bold;">Test 1</th></tr></thead>';
    echo '<tbody>';

    while($row = mysqli_fetch_assoc($result_bright)) {
        echo "<tr><td style='padding: .75rem; vertical-align: top;font-weight:bold;color:black;'>".$row["rollno"]."</td><td style='padding: .75rem; vertical-align: top;font-weight:bold;color:black;'>".$row["test2"]."</td></tr>";
    }

    echo '</tbody></table></div>';

    // Table for weak students
    echo '<div class="col-md-6">';
    echo '<h4>Weak Students</h4>';
    echo '<table class="table">';
    echo '<thead><tr><th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight:bold;">Roll No</th><th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;font-weight:bold;">Test 1</th></tr></thead>';
    echo '<tbody>';

    while($row = mysqli_fetch_assoc($result_weak)) {
        echo "<tr><td style='padding: .75rem; vertical-align: top;font-weight:bold;color:black;'>".$row["rollno"]."</td><td style='padding: .75rem; vertical-align: top;font-weight:bold;color:black;'>".$row["test2"]."</td></tr>";
    }

    echo '</tbody></table></div>';

    echo '</div></div></div></div>';
    mysqli_close($con);
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
    var brightTable = document.getElementById('brightTable');
    var weakTable = document.getElementById('weakTable');
    brightTable.style.border = '1px solid #ccc';
    brightTable.style.borderCollapse = 'collapse';
    brightTable.style.width = '100%';
    brightTable.style.textAlign = 'left';
    brightTable.style.fontSize = '14px';
    brightTable.style.fontFamily = 'Arial, sans-serif';
    weakTable.style.border = '1px solid #ccc';
    weakTable.style.borderCollapse = 'collapse';
    weakTable.style.width = '100%';
    weakTable.style.textAlign = 'left';
    weakTable.style.fontSize = '14px';
    weakTable.style.fontFamily = 'Arial, sans-serif';
    
    var brightFirstRow = brightTable.rows[0];
    var weakFirstRow = weakTable.rows[0];
   
    brightFirstRow.cells[0].style.display = 'none';
    weakFirstRow.cells[0].style.display = 'none';
    
    var wb = XLSX.utils.book_new();
    var brightWs = XLSX.utils.table_to_sheet(brightTable, {sheet:"Bright Students"});
    var weakWs = XLSX.utils.table_to_sheet(weakTable, {sheet:"Weak Students"});
    XLSX.utils.book_append_sheet(wb, brightWs, "Bright Students");
    XLSX.utils.book_append_sheet(wb, weakWs, "Weak Students");
    var wbout = XLSX.write(wb, {bookType:'xlsx',  type: 'binary'});
    function s2ab(s) {
        var buf = new ArrayBuffer(s.length);
        var view = new Uint8Array(buf);
        for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
        return buf;
    }
    saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'bright-weakteat2.xlsx');
}

</script>
<?php
    include("Footer.php");
?>
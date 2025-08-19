<?php
    include("header.php");
?>
<div class="container">
            <style>
                
                .form-group {
                    margin-bottom: 1rem;
                }
                
                form {
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    padding: 1rem;
                    margin-top: 2rem;
                    background-color:white;
                }
                
                button[type="submit"] {
                    background-color: #007bff;
                    border-color: #007bff;
                }
                
                button[type="submit"]:hover {
                    background-color: #0069d9;
                    border-color: #0062cc;
                }
                header{
                    font-size:25px;
                    color:red;
                    border-radius: 5px;
                    border: 1px solid #ccc;
                    margin-top:20px;
                    text-align:center;
                    font-weight:bold;
                    margin-bottom:15px;
                    background:white;
                }
                .table table-striped custom-table table-hover{
                    border: 1px solid #dee2e6;
                }
                tr:hover {
                    transform: scale(1.05);
                    transition: transform 0.2s ease-in-out;
                }
                td{
                    font-weight:bold;
                    color:black;
                }
                tr{
                    color:black;
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
    .submit-button {
  padding: 10px 15px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
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

.submit-button:hover {
  background-color: #0069d9;
}
.form-container {
        justify-content: center;
        align-items: center;
        margin-right:50px ;
    }
            </style>

<div class="form-container">
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
            <button type="submit" class="submit-button" name="submit">Submit</button>
        </div>
    </form>
    </div>
<div class="btns">
        <button onclick="printCard()" class="bttn">Print Table</button>
        <button onclick="exportToExcel()" class="bttn">Export to Excel</button>
        <!-- <button  class="bttn" style="margin-right:100px"><a href="bat1Assignment.php">ADD Marks</a></button> -->
</div>
        <div class="container">
        <div class="row">
        <div class="card">
            <div class="col-md-10 mx-auto">
            <header>Student List</header>
            <table class="table table-striped custom-table table-hover " style="background-color: white;border=solid 2px;">
                <thead>
                <tr>
                    <th>Action</th>
                    <th>Roll No</th>
                    <th>Student Name</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_POST["submit"])){
                    $table = $semname.$_POST['subject'];
                    // echo"$table";
                    $con = mysqli_connect("localhost", "root", "", "cms");
                    $sql = "SELECT * FROM $table ORDER BY rollno ASC";
                    $result = mysqli_query($con, $sql);
                    
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        echo "<tr>";
                        echo "<td>
                        <a href='editstudent.php?id=" . $row['id'] . "'onclick='return confirmEdit();'>
                            <img src='../assets/img/favicon/edit.png' alt='edit' width='20px'>
                            
                        </a>
                        <a href='studentlist.php?id=" . $row['id'] . "'onclick='return confirmDelete();'>
                            <img src='../assets/img/favicon/delete.png' alt='Delete' width='20px'>
                        </a>
                      </td>";
                        echo "<td>" . $row['rollno'] . "</td>";
                        echo "<td>" . $row['student_name'] . "</td>";
                        echo "</tr>";
                    }
                    mysqli_close($con);
                
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
                $con = mysqli_connect("localhost", "root", "", "cms");
                if(isset($_GET['id'])) 
                {
                    $id = $_GET['id'];
                    $sql = "DELETE FROM $table WHERE id='$id'";
                    mysqli_query($con, $sql);
                    if($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                    header("Location: studentlist.php");
                    ob_end_flush();
                    }
                }
                mysqli_close($con);
                }
            ?>
            </div>
        </div>
        </div>
    </div>
    </div>
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
  XLSX.writeFile(workbook, 'student_list.xlsx');
}
</script>

<?php
    include("Footer.php");
?>
<?php
    include("header.php");
?>
<style>
  .card{
    width:1000px;
    margin: 0 auto;
    margin-top:40px;
  }
  body{
    background:rgb(117, 239, 229);
  }
  .card-title
  {
    margin-top:20px;
  }
  label{
    margin-top:20px;
  }
  button{
    margin-top:20px;
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
  </style>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Upload CSV File</h5>
    <form method="post" enctype="multipart/form-data">
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
        </div>
      <div class="form-group">
      <select class="form-control" id="batchSelect" name="batch">
          <option value="batch1">Batch 1</option>
          <option value="batch2">Batch 2</option>
          <option value="batch3">Batch 3</option>
        </select>
        <label for="csvFile">Choose CSV File</label><br>
        <input type="file" class="form-control-file" id="csvFile" accept=".csv" name="csvFile">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</div>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $con = mysqli_connect("localhost", "root", "", "cms");
    
    $batch = $_POST['batch'];
    
    $csv = $_FILES['csvFile']['tmp_name'];

    $handle = fopen($csv, "r");
    $i = 0;
    $table = $semname.$_POST['subject'].'batch1';
    $table1 = $semname.$_POST['subject'].'bat1attend';
    $table2 = $semname.$_POST['subject'].'batch2';
    $table3 = $semname.$_POST['subject'].'bat2attend';
    $table4 = $semname.$_POST['subject'].'batch2';
    $table5 = $semname.$_POST['subject'].'bat2attend';
    while (($row = fgetcsv($handle, 10000, ",")) !== FALSE)
    {
        
        
//         $column1 = $row[0];
//         $column2 = $row[1];
// //$column3 = $row[2];

        if ($batch == 'batch1') {
            $sql = "INSERT INTO $table (`id`, `rollno`, `name`) VALUES (NULL, '$row[0]', '$row[1]')";
            $sql1 = "INSERT INTO $table1 (`id`, `rollno`, `name`) VALUES (NULL, '$row[0]', '$row[1]')";
        } elseif ($batch == 'batch2') {
            $sql = "INSERT INTO $table2 (`id`, `rollno`, `name`) VALUES (NULL, '$row[0]', '$row[1]')";
            $sql1 = "INSERT INTO $table3 (`id`, `rollno`, `name`) VALUES (NULL, '$row[0]', '$row[1]')";
        } elseif ($batch == 'batch3') {
            $sql = "INSERT INTO $table4 (`id`, `rollno`, `name`) VALUES (NULL, '$row[0]', '$row[1]')";
            $sql1 = "INSERT INTO $table5 (`id`, `rollno`, `name`) VALUES (NULL, '$row[0]', '$row[1]')";
        }
        
        mysqli_query($con, $sql);
        mysqli_query($con, $sql1);
    }
    
    fclose($handle);
}
?>
<?php
    include("Footer.php");
?>
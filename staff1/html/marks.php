
<?php
    include("header.php");
?>
<style>
    .container {
        margin-top: 50px;
        padding: 0 15px;
    }
    
    @media (min-width: 576px) {
        .container {
            max-width: 540px;
            margin: 0 auto;
        }
    }
    
    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }
    
    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }
    
    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }
    
    @media print {
        /* Increase font size of Roll No column */
        table td:nth-child(2),
        table th:nth-child(2) {
            font-size: 20px;
        }
        
        /* Decrease font size of Test columns */
        table td:nth-child(4),
        table th:nth-child(4),
        table td:nth-child(5),
        table th:nth-child(5),
        table td:nth-child(6),
        table th:nth-child(6) {
            font-size: 12px;
        }
    }
    
    header {
        font-size: 25px;
        color: red;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-top: 20px;
        text-align: center;
        font-weight: bold;
        margin-bottom: 15px;
        background: white;
    }
    
    .table {
        margin: 30px;
    }
    
    .table table-striped custom-table table-hover {
        border: 1px solid #dee2e6;
    }
    
    tr:hover {
        background:rgb(237, 175, 6);
    }
    
    td {
        font-weight: bold;
        color: black;
    }
    
    tr:hover {
        color: #000000;
    }
    
    .editbtn {
        display: flex;
        padding: 2px 4px;
        background: #69c4ff;
        color: white;
        border-radius: 5px;
        font-weight: bolder;
    }
    
    .editbtn:hover {
        background: white;
        color: #69c4ff;
        box-shadow: 0px 0px 4px #69c4ff;
    }
    .head {
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid;
        padding: 40px;
        border-radius: 10px;
    }
    
    .addbtn {
        padding: 10px 20px;
        background: rgb(255, 127, 127);
        color: white;
        border-radius: 5px;
        font-weight: bolder;
        margin-right: 20px;
        margin-bottom: 10px;
    }
    
    .addbtn:hover {
        background: white;
        color: #69c4ff;
        box-shadow: 0px 0px 4px #69c4ff;
    }
    
    h4 {
        color: rgb(4, 5, 93);
        font-size: 30px;
        text-decoration: underline;
    }
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

    button {
    font-weight: 400;
    color: #fff;
    padding: 14px 22px;
    border: none;
    background: #4070f4;
    border-radius: 6px;
    cursor: pointer;
    }
    button:hover {
    background-color: #265df2;
    }
    .modal-box {
    z-index: 1000;
    background: grey;
    position: fixed;
    left: 60%;
    width: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    section.active .show-modal {
    display: none;
    }
    .overlay {
    position: fixed;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.3);
    opacity: 0;
    pointer-events: none;
    }
    section.active .overlay {
    opacity: 1;
    pointer-events: auto;
    }
    .modal-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 1000px; /* change the value as needed */
    width: 100%;
    padding: 30px 20px;
    border-radius: 24px;
    background-color: #fff;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
    transform: translate(-50%, -50%) scale(1.2);
    }
    section.active .modal-box {
    opacity: 1;
    pointer-events: auto;
    transform: translate(-50%, -50%) scale(1);
    }
    .modal-box i {
    font-size: 70px;
    color: #4070f4;
    }
    .modal-box h2 {
    margin-top: 20px;
    font-size: 25px;
    font-weight: 500;
    color: #333;
    }
    .modal-box h3 {
    font-size: 16px;
    font-weight: 400;
    color: #333;
    text-align: center;
    }
    .modal-box .buttons {
        padding: 10px 20px;
    background: rgb(255, 127, 127);
    color: white;
    border-radius: 5px;
    font-weight: bolder;
    margin-right: 20px;
    margin-bottom: 10px;
    }
    .modal-box button {
    font-size: 14px;
    padding: 6px 12px;
    margin: 0 10px;
    }
    .btns{
        margin-right:500px;
        padding:10px;
        box-shadow:
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
</style>
<div class="container" >
<div class="head">
                <a href="test1.php" class="addbtn">
                        Test1 Mark</a>
                <a href="test2.php" class="addbtn">
                        Test2 Marks</a>
                        
                <!-- <a href="test1.php" class="addbtn">
                        Date</a> -->
            </div>
    <section>
      <div class="modal-box">
        <i class="fa-regular fa-circle-check"></i>
        <h2>Completed</h2>
        <h3>You have sucessfully downloaded all the source code files.</h3>

        <div class="buttons">
       <button class="close-btn">Ok, Close</button></a>
       <a href="test1.php"> <button>Open File</button></a>
        </div>
      </div>
    </section>
    <div class="btns">
        <button class="btn btn-primary btn-sm" onclick="printCard()">Print Table</button>
        <button class="btn btn-success btn-sm" onclick="exportToExcel()">Export to Excel</button>
    </div>

    <div class="form-container">
    <form method="get">
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
            <button type="submit" class="submit-button">Submit</button>
        </div>
    </form>
    </div>
    <div class="card">
    <div class="card-body">
    <center><h1>Marks Report</h1></center>


    <?php 
if(isset($_GET['subject'])){
    ?>

<div style="overflow-x: auto;">
        <table style="border-collapse: collapse; width: 100%; max-width: 100%; margin-bottom: 1rem; background-color: transparent; font-size: 16px;">
            <thead style="background-color: #212529; color: #fff; text-align: left; font-weight: bold;">
                <tr>
                    <th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">Action</th>
                    <th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">Roll No</th>
                    <th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">Name</th>
                    <th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">TEST1</th>
                    <th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">TEST2</th>
                    <th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">Average</th>
                    <th style="padding: .75rem; vertical-align: top; border-top: 1px solid #dee2e6;">Signature</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    error_reporting(E_ERROR | E_PARSE);
                    $con = mysqli_connect("localhost", "root", "", "cms");
                    $table = $semname.$_GET['subject'].'marks';
                    $sql = "SELECT * FROM $table ORDER BY rollno ASC";
                    $result = mysqli_query($con, $sql);
                    
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        echo "<tr style='border-top: 1px solid #dee2e6;'>";
                        echo "<td style='padding: .75rem; vertical-align: top;'>";
                        echo "<a href='editmarks.php?id=" . $row['id'] . "' onclick='return confirmEdit();' style='display: flex; padding: 2px 4px; background: #69c4ff; color: white; border-radius: 5px; font-weight: bold; text-decoration: none;'>Edit<i class='bx bx-edit'></i></a>";
                        echo "</td>";
                        echo "<td style='padding: .75rem; vertical-align: top;'>" . $row['rollno'] . "</td>";
                        echo "<td style='padding: .75rem; vertical-align: top;'>" . $row['name'] . "</td>";
                        if(!empty($row['test1'])==0){
                            $row['test1']=0;
                        }
                        echo "<td style='padding: .75rem; vertical-align: top;'>" . $row['test1'] . "</td>";
                        if(!empty($row['test2'])==0){
                            $row['test2']=0;
                        }
                        echo "<td style='padding: .75rem; vertical-align: top;'>" . $row['test2'] . "</td>";
                        if(empty($row['test1']))
                        {
                            $row['test1']=0;
                        }
                        else if(empty($row['test2']))
                        {
                            $row['test2']=0;
                        }
                        $a=$row['test1'];
                        $b=$row['test2'];
                        $average = ($a+$b) / 2;
                        echo "<td style='padding: .75rem; vertical-align: top;'>" . $average . "</td>";
                        echo "<td style='padding: .75rem; vertical-align: top;'></td>";
                        echo "</tr>";
                    }
                    mysqli_close($con);
                ?>
            </tbody>
        </table>
        </div>

<?php
}


?>
        </div>
    </div>
</div>
<script>
    const section = document.querySelector("section"),
        overlay = document.querySelector(".overlay"),
        showBtn = document.querySelector(".show-modal"),
        closeBtn = document.querySelector(".close-btn");

      showBtn.addEventListener("click", () => section.classList.add("active"));

      overlay.addEventListener("click", () =>
        section.classList.remove("active")
      );

      closeBtn.addEventListener("click", () =>
        section.classList.remove("active")
      );
    function confirmEdit() {
        return confirm("Are you sure you want to edit edit this record?");
    }
    function printCard() {
        var card = document.querySelector('.card');
        var printWindow = window.open('', '', 'height=500,width=800');
        printWindow.document.write('<style>th:first-child,td:first-child,th:nth-child(3),td:nth-child(3){display:none}</style>');
        printWindow.document.write(card.innerHTML);
        printWindow.document.write('</body></html>');
        printWindow.print();
        printWindow.close();
    } 
    function exportToExcel() {
    var table = document.querySelector('table');
    table.style.border = '1px solid #ccc';
    table.style.borderCollapse = 'collapse';
    table.style.width = '100%';
    table.style.textAlign = 'left';
    table.style.fontSize = '14px';
    table.style.fontFamily = 'Arial, sans-serif';
    
   
    var firstRow = table.rows[0];
   
    firstRow.cells[0].style.display = 'none';
    
    var wb = XLSX.utils.table_to_book(table, {sheet:"Sheet1"});
    var wbout = XLSX.write(wb, {bookType:'xlsx',  type: 'binary'});
    function s2ab(s) {
        var buf = new ArrayBuffer(s.length);
        var view = new Uint8Array(buf);
        for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
        return buf;
    }
    saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'MarksReport.xlsx');
}

</script>
<?php
    include("Footer.php");
?>

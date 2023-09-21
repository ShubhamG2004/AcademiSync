<?php
    include("header.php");
?>
<style>
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
<h4>BATCH1 assegnment Marks</h4>
<div class="btns">
        <button onclick="printCard()" class="bttn">Print Table</button>
        <button onclick="exportToExcel()" class="bttn">Export to Excel</button>
        <button  class="bttn" style="margin-right:100px"><a href="bat1Assignment.php">ADD Marks</a></button>
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped custom-table table-hover black-bg-table" style="margin-top:50px">
            <thead style="background-color: #212529; color: #566a7f; text-align: left; font-weight: bolder;">
                <tr>
                    <th style="color: white;font-weight:bold">Roll No.</th>
                    <th style="color: white;font-weight:bold" size='2'>Name</th>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                        <th style="color: white;font-weight:bold"><?php echo $i; ?></th>
                    <?php } ?>
                    <th style="color: white;font-weight:bold">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "cms");
                    $sql = "SELECT * FROM bat3marks";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $total_marks = 0;
                        echo "<tr>";
                        echo "<td style='background: white;color:black;'>" . $row['rollno'] . "</td>";
                        echo "<td style='background: white;color:black;' size='5'>" . $row['name'] . "</td>";
                        for ($i = 1; $i <= 10; $i++) {
                            $expno = 'exp'.$i;
                            if($row[$expno] > 0 && $row[$expno] != ''){
                                $value = $row[$expno];
                                echo "<td style='background: white;color:black;'>".$value."</td>";
                                $total_marks += $value;
                            }
                            else{
                                echo "<td style='background: white;color:black;'></td>";
                            }
                        }
                        echo "<td style='background: white;color:black;'>".$total_marks."</td>";
                        echo "</tr>";
                    }

                ?>
            </tbody>
        </table>
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
  XLSX.writeFile(workbook, 'batch3_assignment_marks.xlsx');
}
</script>

<?php
    include("Footer.php");
?>

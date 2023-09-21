<?php
    include("header.php");
?>
<h4>Batch1 Assignment marks</h4>
<form method="POST" action="">
    <table class="table table-bordered table-striped custom-table table-hover black-bg-table" style="margin-top:50px">
        <thead style="background-color: #212529; color: #566a7f; text-align: left; font-weight: bolder;">
            <tr>
                <th style="color: white;font-weight:bold">Roll No.</th>
                <th style="color: white;font-weight:bold" size='2'>Name</th>
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <th style="color: white;font-weight:bold"><?php echo $i; ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $con = mysqli_connect("localhost", "root", "", "cms");
                $sql = "SELECT * FROM bat2marks";
                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td style='background: white;color:black;'>" . $row['rollno'] . "</td>";
                    echo "<td style='background: white;color:black;' size='5'>" . $row['name'] . "</td>";
                    for ($i = 1; $i <= 10; $i++) {
                        $expno = 'exp'.$i;
                        if($row[$expno] > 0 && $row[$expno] != ''){
                        $value = $row[$expno];
                        echo "<td style='background: white;color:black;'><input type='text' name='exp" . $i . "[]' size='2' value='".$value."' readonly class='form-control' ></td>";
                    }
                    else{
                        echo "<td style='background: white;color:black;'><input type='text' name='exp" . $i . "[]' size='2' class='form-control' ></td>";
                    }
                        
                    }
                    echo "<input type='hidden' name='rollno[]' value='" . $row['rollno'] . "'>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <button type="submit" name="submit" value="Save" class="btn btn-primary">Save</button>
</form>
<?php
if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "", "cms");

    foreach ($_POST['rollno'] as $key => $value) {
        $rollno = $value;
        for ($i = 1; $i <= 10; $i++) {
            $expno = 'exp'.$i;
            $exp = $_POST['exp' . $i][$key];
            if(isset($_POST[$expno])){
                $sql = "UPDATE bat2marks SET exp$i='$exp' WHERE rollno='$rollno'";
            }
            mysqli_query($con, $sql);
        }
    }

    mysqli_close($con);
    echo "Data saved successfully!";
}
?>
<?php
    innclude("Footer.php");
?>
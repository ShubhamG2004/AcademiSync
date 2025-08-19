<?php
  include("header.php");
?>
<div class="container" style="display: flex; flex-direction: column;">
  <?php
    $con = mysqli_connect("localhost", "root", "", "cms");
    $batches = array('batch1', 'batch2', 'batch3');

    foreach ($batches as $batch) {
        $table_html = '';

        $sql = "SELECT * FROM $batch";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            $table_html .= '<div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">' . strtoupper($batch) . '</h5>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Roll No.</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>';

            while ($row = mysqli_fetch_assoc($result)) {
                $table_html .= '<tr>
                                    <td>
                                        <a href="editpra-student.php?id=' . $row['id'] . '" onclick="return confirmEdit();">
                                            <img src="../assets/img/favicon/edit.png" alt="edit" width="20px">
                                        </a>
                                        <a href="studentlist.php?id=' . $row['id'] . '" onclick="return confirmDelete();">
                                            <img src="../assets/img/favicon/delete.png" alt="Delete" width="20px">
                                        </a>
                                    </td>
                                    <td>' . $row['rollno'] . '</td>
                                    <td>' . $row['name'] . '</td>
                                </tr>';
            }

            $table_html .= '</tbody></table>
                        </div>
                    </div>';
        }

        echo $table_html;
    }
  ?>
</div>
<?php
    include("Footer.php");
?>
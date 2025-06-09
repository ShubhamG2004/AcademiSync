<?php
ob_start();
include("header.php");
include("../database/db.php");
?>

<div class="container">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #ecf0f1;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .form-container {
            max-width: 600px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }
        
        .form-container:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--dark-text);
            position: relative;
            padding-bottom: 10px;
        }
        
        .form-header h2 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .form-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 3px;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark-text);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 16px;
            transition: var(--transition);
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 1em;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: var(--transition);
            text-align: center;
            width: 100%;
        }
        
        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        .btn:active {
            transform: translateY(0);
        }
        
        .form-footer {
            text-align: center;
            margin-top: 1.5rem;
            color: #7f8c8d;
            font-size: 14px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
                margin: 1rem;
            }
            
            .form-header h2 {
                font-size: 24px;
            }
        }
        
        /* Animation for form submission */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-container {
            animation: fadeIn 0.5s ease-out;
        }
        
        /* Error message styling */
        .error {
            color: var(--accent-color);
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }
        
        /* Success message */
        .success-message {
            background-color: #2ecc71;
            color: white;
            padding: 10px 15px;
            border-radius: var(--border-radius);
            margin-bottom: 1rem;
            text-align: center;
            display: none; /* Will be shown via JavaScript if needed */
        }
    </style>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="form-container">
                <div class="form-header">
                    <h2>Insert New Semester</h2>
                    <p>Add a new semester to the system</p>
                </div>
                
                <form method="post" id="semesterForm">
                    <div class="form-group">
                        <label for="winter">Season:</label>
                        <select name="winter" id="winter" class="form-control" required>
                            <option value="" disabled selected>Select Season</option>
                            <option value="winter">Winter</option>
                            <option value="summer">Summer</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="year">Year:</label>
                        <input type="number" 
                               name="year" 
                               id="year" 
                               class="form-control" 
                               min="2000" 
                               max="2099" 
                               value="<?php echo date('Y'); ?>" 
                               required>
                    </div>
                    
                    <button type="submit" name="submit" id="submit" class="btn">
                        <i class="fas fa-plus-circle"></i> Create Semester
                    </button>
                    
                    <div class="form-footer">
                        <p>All fields are required</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $con = mysqli_connect("localhost", "root","","cms");
        $winter = $_POST['winter'];
        $year = $_POST['year'];
        $semname = $winter.$year;

        $sql = "INSERT INTO semlist VALUES('','$semname','')";
        mysqli_query($con,$sql);

        $tablename2 = $semname."studentdetail";
        $sql2 = "CREATE TABLE $tablename2 (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            rollno VARCHAR(255),
            name VARCHAR(255),
            subject VARCHAR(1000)
        )";
        mysqli_query($con, $sql2);

        $tablename3 = $semname."teacher";
        $sql3 = "CREATE TABLE $tablename3 (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            teacher_code VARCHAR(255),
            teacher_name VARCHAR(255),
            teacher_subject VARCHAR(255)
        )";
        mysqli_query($con, $sql3);

        $tablename4 = $semname."subject";
        $sql4 = "CREATE TABLE $tablename4 (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            subject_code VARCHAR(255),
            subject_name VARCHAR(255)
        )";
        mysqli_query($con, $sql4);

        header("Location: managesem.php");
        ob_end_flush();
    }
    ?>
</div>

<?php
include("Footer.php");
?>
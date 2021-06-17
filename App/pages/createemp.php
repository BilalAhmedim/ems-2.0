<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include './../modules/includes.php'?>
  <title>Document</title>
</head>
<body class='form'>
  <?php include './../modules/navigation.php'?>

  <div class="form-header">
    <h3>Create Employee</h3>
  </div>
  <div class="form create">
    <form action=<?php echo $_SERVER['SERVER_NAME'] ?> method="post">

      <div class="form-group">
        <label for="empnumber">Employee Number</label>
        <input type="number" id="empnumber" placeholder="Employee Number" name='emp_number' required />
      </div>

      <div class="form-group">
        <label for="name">Employee Name</label>
        <input type="text" id="name" placeholder="Employee Name" name='emp_name' required />
      </div>

      <div class="form-group">
        <label for="salary">Employee Salary</label>
        <input type="number" id="salary" placeholder="Employee Salary" name='emp_salary' required />
      </div>

      <div class="form-group">
        <label for="avatar">Employee Photo</label>
        <input type="file" id="avatar" placeholder="Employee Photo" name='emp_avatar' required />
      </div>

      <input type="submit" value='Submit' name='create_emp_submit'>

    </form>
  </div>

  <div class="error-section close">
    <div class="p-error" data-error='no-data'>
    
    </div>
  </div>

</body>
</html>
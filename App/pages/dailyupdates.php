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
    <h3>Daily Updates</h3>
  </div>
  <div class="form-form">
    <form method="post">
    
    <div class="form-group">
      <label class="select" for="target">Select Employee</label>
      <select name="empno" id="target">
        <option value="0">---Select an Option---</option>
      </select>
    </div>

    <div class="form-group">
      <label for="presence">Presence</label>
      <select name="presence" id="presence">
        <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
    </div>

    <div class="form-group">
      <label for="timein">Time In</label>
      <input type="time" name="timein" id="timein">
    </div>

    <div class="form-group">
      <label for="timeout">Time Out</label>
      <input type="time" name="timeout" id="timeout">
    </div>

    <div class="form-group">
      <label for="advance">Advance</label>
      <input type="number" name="advance" id="advance">
    </div>

    <div class="form-group">
      <label for="advance_recovery">Advance Recovery</label>
      <input type="number" name="advance_recovery" id="advance_recovery">
    </div>

    <div class="form-group">
    <label for="expenses">Expenses</label>
      <input type="number" name="expenses" id=="expenses">
    </div>

    <div class="form-group">
      <input type="submit" name="submit" value="Submit">
    </div>

    </form>
  </div>

  <div class="error-section close">
    <div class="p-error" data-error='no-data'>

    </div>
  </div>

</body>
</html>
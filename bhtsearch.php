<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bht_search.css">
  <title>Search Patient By BHT No</title>
</head>

<body>
  <form action="drug_list.php" method="POST">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <h4 class="mt-5">Search patient by BHT No</h4>
            <div class="form-group">
              <label>Enter patient BHT No</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="ward_details.php" class="btn btn-secondary">Back to Ward</a>
        </div>
      </div>

  </form>
  <br>
  <div class="patient-item">
    <div class="patient-content">
      <div class="patient-info">
        <h3>Patient Name : Test Patient</h3>
        <h3>BHT No : 123456</h3>
      </div>
      <div class="patient-actions">
        <a href="drug_list.php"><button class="btn btn-info">Visit Drug Card</button></a>
      </div>
    </div>
  </div>
  <div class="patient-item">
    <div class="patient-content">
      <div class="patient-info">
        <h3>Patient Name : Test Patient</h3>
        <h3>BHT No : 123456</h3>
      </div>
      <div class="patient-actions">
        <a href="drug_list.php"><button class="btn btn-info">Visit Drug Card</button></a>
      </div>
    </div>
  </div>
  </div>
</body>

</html>
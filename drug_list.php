<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fetch_drug.css">

  <title>Drug List</title>
</head>

<body>
  <div class="container">
    <div class="header">
      <a href="patient_detail.php"><button class="patient-details-btn">Patient Details</button></a>
      <a href="add_eme_drug.php"><button class="add-emergency-btn">Add Emergency Drugs</button></a>
    </div>

    <h2>Drug List</h2>

    <!-- alert notification -->
    <div class="alert alert-danger" role="alert">
      Allergy alert message.
    </div>

    <div class="drug-item">
      <div class="drug-content">
        <div class="drug-info">
          <h3>Panadol</h3>
        </div>
        <div class="drug-actions">
          <a href="add_drug_details.php"><button>Add Drug Details</button></a>
        </div>
      </div>
    </div>
    
    <div class="drug-item">
      <div class="drug-content">
        <div class="drug-info">
          <h3>Panadol</h3>
          <p>Dosage: 500mg</p>
          <p>Frequency: Twice a day</p>
          <p>Next Due: </p>
        </div>
        <div class="drug-actions">
          <a href="#"><button>Mark as given</button></a>
          <a href="edit_drug_details.php"><button>Edit Details</button></a>
          <a href="drug_details.php"><button>More</button></a>
        </div>
      </div>
      <div class="drug-remarks">
        <p>Remarks: Take after food</p>
      </div>
    </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Edit Drug details</title>
</head>
<body>
    <form action="#" method="POST">
        <div class="container">
            <div class="row">
            <div class="col">
                <div class="form-group">
                <h5 class="mt-5">Edit Drug details</h5>
                <p>Drug Name :&nbsp;</p>
                <div class="form-group">
                    <label>Dosage</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Frequency</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Route</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Remarks</label>
                    <input type="text" class="form-control">
                    <button type="button" class="btn btn-primary" style="margin-top: 11px; position: static; display: inline-block; float: right;">Save Details</button>
                    <a class="btn btn-danger" style="margin-top: 11px; position: static; display: inline-block; float: left;" href="drug_list.php">Cancel</a>
                </div>
                </div>
            </div>
            <div class="form-group"></div>
            </div>
        </div>
    </form>
</body>
</html>
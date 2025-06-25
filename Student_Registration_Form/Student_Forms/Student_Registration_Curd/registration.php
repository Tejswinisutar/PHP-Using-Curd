<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="mx-auto" action="data.php">
                    <h3 class="text-center">Registration Form</h3>
                    
                    <div class="mb-3">
                        <label for="inUserName" class="form-label">Enter Name:</label>
                        <input type="text"  name="UserName" id="inUserName">
                    </div>
                    
                    <div class="mb-3">
                        <label for="inEmail" class="form-label">Enter Email:</label>
                        <input type="email"  name="email" id="inEmail">
                    </div>
                    
                    <div class="mb-3">
                        <label for="inPassword" class="form-label">Enter Password:</label>
                        <input type="password"  name="Password" id="inPassword">
                    </div>
                    
                    <button type="submit" >Submit</button>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
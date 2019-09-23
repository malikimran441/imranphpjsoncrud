<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tutorial-boostrap-merubaha-warna">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Tutorial CRUD JSON DATA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style type="text/css">
    .navbar-default {
        background-color: #3b5998;
        font-size: 18px;
        color: #ffffff;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h4>JSON CRUD</h4>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            </div>
        </div>
    </nav>

<div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
                <h3>Add Employee</h3>
              <form action="emp_add.php" method="POST">
                    <div class="form-group">
                        <label for="inputFName">Name</label>
                        <input type="text" class="form-control" required="required" name="name"
                            placeholder="Name">
                        <span class="help-block"></span>
                    </div>
                    
                     <div class="form-group">
                        <label for="inputFName">DOB</label>
                        <input type="text" class="form-control" required="required" name="dob"
                            placeholder="DOB">
                        <span class="help-block"></span>
                    </div>
                    
                                         <div class="form-group">
                        <label for="inputFName">Gender</label>
                        <input type="text" class="form-control" required="required" name="gender"
                            placeholder="Gender">
                        <span class="help-block"></span>
                    </div>
                    
                                         <div class="form-group">
                        <label for="inputFName">Department</label>
                        <input type="text" class="form-control" required="required" name="department"
                            placeholder="Department">
                        <span class="help-block"></span>
                    </div>
                    
                                         <div class="form-group">
                        <label for="inputFName">Manager</label>
                        <input type="text" class="form-control" required="required" name="manager"
                            placeholder="Manager Name">
                        <span class="help-block"></span>
                    </div>
                    
                                         <div class="form-group">
                        <label for="inputFName">Salary</label>
                        <input type="text" class="form-control" required="required" name="salary"
                            placeholder="Salary">
                        <span class="help-block"></span>
                    </div>
                    
                                         <div class="form-group">
                        <label for="inputFName">Join Date</label>
                        <input type="text" class="form-control" required="required" name="join_date"
                            placeholder="Join Date">
                        <span class="help-block"></span>
                    </div>
                    
                      <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="submit">Add Employee</button>
                        <a class="btn btn btn-default" href="index.php">Back</a>
                    </div>
                    
                    </form>
                    </div>
                    </div>
                    </div>




</body>
</html>

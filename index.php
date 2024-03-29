<?php ob_start(); ?>
<?php require_once("init.php"); ?>
<?php //$employees = Employee::find_all_employee(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Employee Management</title>
</head>
<body>
    <!-- employee list table -->
    <section>
        <div class="employee">
            <div class="container">
                <div class="col-md-12">
                  <div class="empf bg-info p-5">
                  <form method="post" action="">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Employee Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Employee Name">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Gender</label>
                      <input type="text" class="form-control" name="gender" placeholder="Gender">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Employee Type</label>
                      <input type="text" class="form-control" name="type" placeholder="Employee Typer">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Depertment</label>
                      <input type="text" class="form-control" name="depertment" placeholder="Depertment">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Salary</label>
                      <input type="tel" class="form-control" name="salary" placeholder="0.0000000">
                    </div>
                    <a href="#" class="btn btn-primary" name="submit">Submit</a>
                    <!-- <button type="submit" class="btn btn-primary" name="submit"></button> -->
                  </form>


                  




                  </div>
                    <div class="emph d-flex align-items-center justify-content-between">
                        <h1 class="fw-bolder">Employee Details</h1>
                        <a href="#" class="btn btn-primary">Add New Employee</a>
                    </div>
                    <table class="table table-striped table-bordered table-hover text-center">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Employee Name</th>
                            <th>Gender</th>
                            <th>Employee Type</th>
                            <th>Depertment</th>
                            <th>Salary</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                        $employees = Employee::find_all_employee();
                        while($row = mysqli_fetch_array($employees)) {
                          $employee_id = $row['id'];
                        }
                        ?>

                        <tr>
                            <td><?php echo $employee_id?></td>
                            <td>kabir</td>
                            <td>Male</td>
                            <td>Full-Time</td>
                            <td>Software Engineer</td>
                            <td>60000</td>
                            <td>
                                <a href="#" class="btn btn-info text-white">Edit</a>
                                <a href="#" class="btn btn-danger text-white">Delete</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>


                  <?php

                  // $result_set = Employee::find_all_employee();
                  // while($row = mysqli_fetch_array($result_set)) {
                  //   echo $row['name'];
                  // }

                  // $found_employee = Employee::find_by_id(2);
                  // $employee = new Employee();
                  // $employee->id         = $found_employee['id'];
                  // $employee->name       = $found_employee['name'];
                  // $employee->gender     = $found_employee['gender'];
                  // $employee->type       = $found_employee['type'];
                  // $employee->depertment = $found_employee['depertment'];
                  // $employee->salary     = $found_employee['salary'];
                  // echo $employee->name;


                  // $employee = new Employee();
                  // $employee->name       = "Paku";
                  // $employee->gender     = "Male";
                  // $employee->type       = "Full-Time";
                  // $employee->depertment = "Software Engineer";
                  // $employee->salary     = "60000";
                  // $employee->create();

                  // $employee = Employee::find_by_id(1);
                  // $employee->name = "LOL";
                  // $employee->update();

                  // $employee = Employee::find_by_id(3);
                  // $employee->delete();


                  ?>



                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
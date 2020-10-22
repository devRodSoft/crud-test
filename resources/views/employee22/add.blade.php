  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>All Employee</title>
  </head>
  <body>
      <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card">
                        <div class="card-header">
                            Add Employee
                        </div>
                        <div class="card-body">
                            <form method="post"></form>
                                @csrf 
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" name="code" class="form-controller" placeholder="Employee Code">
                                </div>
                                <div class="form-group">
                                    <label for="code">Name</label>
                                    <input type="text" name="name" class="form-controller" placeholder="Employee Name">
                                </div>
                                <div class="form-group">
                                    <label for="code">Salary Dollar</label>
                                    <input type="text" name="salaryDollar" class="form-controller" placeholder="Salary Dollar">
                                </div>
                                <div class="form-group">
                                    <label for="code">Salaray Mx</label>
                                    <input type="text" name="salaryMx" class="form-controller" placeholder="Salary Mx">
                                </div>
                                <div class="form-group">
                                    <label for="code">Address</label>
                                    <input type="text" name="address" class="form-controller" placeholder="Employee Address">
                                </div>
                                <div class="form-group">
                                    <label for="code">State</label>
                                    <input type="text" name="state" class="form-controller" placeholder="Employee State">
                                </div>
                                <div class="form-group">
                                    <label for="code">City</label>
                                    <input type="text" name="City" class="form-controller" placeholder="Employee City">
                                </div>
                                <div class="form-group">
                                    <label for="code">Telephone</label>
                                    <input type="text" name="Telephone" class="form-controller" placeholder="Employee Telephone">
                                </div>
                                <div class="form-group">
                                    <label for="code">E-mail</label>
                                    <input type="text" name="E-mail" class="form-controller" placeholder="Employee E-mail">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
  </body>
  </html>
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

      <title>Task Scheduling</title>
    </head>
    <body>
    <div class="container">
    <div class="row">
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
    <div class="col-md-0"></div>
    <div class="col-md-10 text-center">
        <form method="POST" action="">
            @csrf
            <h2>Employee Details</h2><br>
            <div class="form-group">
              <label>Id</label>
              <input type="number" name="e_id" class="form-control" placeholder="Enter Employee_Id">
            </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="e_name" class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
              <label>Email address</label>
              <input type="email" name="e_email" class="form-control" placeholder="Enter Your Email">
            </div>
            <br>
            <div class="form-group">
              <h2>Task Details</h2><br>
              <div class="form-group">
                <label>Monday</label>
                <input type="text" name="t_mon" class="form-control" placeholder="Task done by Monday">
              </div>

              <div class="form-group">
                <label>Tuesday</label>
                <input type="text" name="t_tue" class="form-control" placeholder="Task done by Tuesday">
              </div>

              <div class="form-group">
                <label>Wednesday</label>
                <input type="text" name="t_wed" class="form-control" placeholder="Task done by Wednesday">
              </div>

              <div class="form-group">
                <label>Thursday</label>
                <input type="text" name="t_thu" class="form-control" placeholder="Task done by Thursday">
              </div>

              <div class="form-group">
                <label>Friday</label>
                <input type="text" name="t_fri" class="form-control" placeholder="Task done by Friday">
              </div>
            </div>
<br>
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>


  </div>
</div>
      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    </body>
  </html>

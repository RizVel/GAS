<!DOCTYPE html>
<html lang="en">
<head>
  <base href="GAS">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.ico">
  <link rel="stylesheet" href="assets/event-assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/third-party-plugins/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="assets/event-assets/css/main.css">
  <title>Team Manager</title>
</head>

<body>
  <?php include 'includes/team/navbar.php'; ?>
  <?php include 'includes/team/award-team-member.php'; ?>

  <div class="container-fluid">
    <div class="container border">
      <div class="row justify-content-center">
        <h1>Team Member of the Month</h1>
      </div>
    </div>
  </div>
  <section id="team-month">
    <div class="container-fluid">
      <div class="row">
        <div class="card-deck mx-auto text-center pt-3">
          <div class="card pb-3" id="last-month">
            <img class="card-img-top" src="assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container border">
          <div class="row justify-content-center">
            <h1>Past Three Months</h1>
          </div>
        </div>
        <div class="card-columns text-center pt-3">
          <div class="card" id="last-two-months">
            <img class="card-img-top" src="assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
          <div class="card" id="last-three-months">
            <img class="card-img-top" src="assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
          <div class="card" id="last-four-months">
            <img class="card-img-top" src="assets/images/logo/template.png" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">Employee Name</h3>
              <p class="card-text">Employee Position</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container border">
          <div class="row justify-content-center">
            <h1>Others</h1>
          </div>
        </div>
        <div class="card-columns text-center pt-3" id="others">
        </div>
      </div>
  </section>
  <?php include 'includes/team/scripts.php'; ?>
</body>

</html>
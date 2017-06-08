<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PS Alumni</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,400" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
  <nav class="sticky-top navbar navbar-toggleable-md navbar-inverse bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="assets/logo.png" alt="Product School" class="ml-3"></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">{{Student Name}} <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="main-content d-flex flex-row">

  <div class="user-nav pl-5 pt-4 col-4">
    <h1 class="greeting">Hello {{Student}}</h1>
    <hr class="col-3 ml-1 row justify-content-start"></hr>
    <ul class="nav flex-column">
      <li class="m-2"><a href="index.html">Dashboard</a></li>
      <li class="m-2"><a href="jobs.html">Jobs</a></li>
      <li class="m-2"><a data-toggle="collapse" href="#connect-with-alumni-toggle" aria-expanded="false" aria-controls="connect-with-alumni-toggle">Connect With Alumni</a></li>
        <div class="collapse" id="connect-with-alumni-toggle">
          <ul>
            <li class="m-2"><a class="" href="alumni.html">Find an Alumni</a></li>
            <li class="m-2"><a class="" href="message.html">Messages</a></li>
          </ul>
        </div>
      <li class="m-2"><a data-toggle="collapse" href="#network-toggle" aria-expanded="false" aria-controls="network-toggle">Network</a></li>
        <div class="collapse" id="network-toggle">
          <ul>
            <li class="m-2"><a class="" href="alumni-events.html">Alumni Events</a></li>
            <li class="m-2"><a class="" href="https://www.productschool.com/product-management-events/" target="_blank">Weekly Workshops</a></li>
          </ul>
        </div>
      <li class="m-2"><a data-toggle="collapse" href="#course-materials-toggle" aria-expanded="false" aria-controls="course-materials-toggle">Course Materials</a></li>
        <div class="collapse" id="course-materials-toggle">
          <ul>
            <li class="m-2"><a class="" href="http://learn.productschool.com" target="_blank">Product Management</a></li>
            <li class="m-2"><a class="" href="http://learn.productschool.com" target="_blank">Coding For Managers</a></li>
            <li class="m-2"><a class="" href="http://learn.productschool.com" target="_blank">Data For Manager</a></li>
          </ul>
        </div>
    </ul>
  </div>
  <div class="page-content pl-5 pr-5 col-8">
    <h1 class="pt-4">Dashboard</h1>
    <hr class="col-1 ml-1 row justify-content-start"></hr>
    <div class="d-flex flex-row">
      <div class="slack-integration col-6 p-0 mr-5">
        <img src="assets/mock-slack-channel.png" class="p-0 rounded slack-img card col-12">
      </div>
      <div class="right-section col-5 p-0">
        <div class="latest-job-offer card">
          <h3 class="card-header latest-jobs text-white">Latest Job Offers</h3>
            <div class="card-block">
              <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Zapier</a>
                <a href="#" class="list-group-item list-group-item-action">Facebook</a>
                <a href="#" class="list-group-item list-group-item-action">Google</a>
              </ul>
            </div>
        </div>
        <div class="list-group card mt-3">
          <h3 class="card-header unread-messages text-white">Unread messages</h3>
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Message 1</h5>
              <small>Yesterday</small>
            </div>
            <small>Donec id elit non mi porta.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Message 2</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <small class="text-muted">Donec id elit non mi porta.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Message 3</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <small class="text-muted">Donec id elit non mi porta.</small>
          </a>
        </div>
      </div>
    </div>
  </div>

</div>
</body>

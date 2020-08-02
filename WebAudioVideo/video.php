<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Video Page</title>

    <style>
      main{
        padding: 30px ;
        text-align: center;
        background: #f7f1e3;
      }
      .card{
        color: black;
        height: 450px;
        background: transparent;
        border: black solid 1px;
      }
      h3{
        margin-top: 55px;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="navbar-brand"><h1>Video and Music List</h1></div>
  </nav>
    <main>
          <h3>Video List <img src="vid.png" height="75px"></h3>
          
      <!-- <div class="row"> -->
        <div class="card-deck">
          <div class="card">
            <video controls height="300px">
               <source src="v1.mp4" type="video/mp4">
            </video>
            <div class="card-body">
              <h5 class="card-title">Video 1</h5>
              <p class="card-text">Music Trailer.</p>
            </div>
          </div>

          <div class="card">
              <video controls height="300px">
               <source src="v2.mp4" type="video/mp4">
            </video>
            <div class="card-body">
              <h5 class="card-title">Video 2</h5>
              <p class="card-text">Basketball Court to Ice Hokey Court Timelapse.</p>
            </div>
          </div>

          <div class="card">
            <video controls height="300px">
               <source src="v3.mp4" type="video/mp4">
            </video>
            <div class="card-body">
              <h5 class="card-title">Video 3</h5>
              <p class="card-text">New York Timelapse.</p>
            </div>
          </div>
        </div>
        <br>
        <div class="card-deck">
          <div class="card">
            <video controls height="300px">
               <source src="v4.mp4" type="video/mp4">
            </video>
            <div class="card-body">
              <h5 class="card-title">Video 4</h5>
              <p class="card-text">Short Coding Trailer.</p>
            </div>
          </div>

          <div class="card">
              <video controls height="300px">
               <source src="v5.mp4" type="video/mp4">
            </video>
            <div class="card-body">
              <h5 class="card-title">Video 5</h5>
              <p class="card-text">What iF? Coding was Anime.</p>
            </div>
          </div>

          <div class="card">
            <video controls height="300px">
               <source src="v6.mp4" type="video/mp4">
            </video>
            <div class="card-body">
              <h5 class="card-title">Video 6</h5>
              <p class="card-text">Kok Bisa-Jakarta in Motion.</p>
            </div>
          </div>
        </div>
      <!-- </div> -->
      <h3>All rights to clips and music belong to their respective owners.</h3>
    </main>
    
</body>
</html>
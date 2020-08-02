<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Audio Page</title>

    <style>
      /* .container{
        padding: 30px ;
        text-align: center;
        background-image: url(b1.jpg);
      } */
      main{
        padding: 30px ;
        text-align: center;
        /* background: #f7f1e3; */
      }
      .card{
        color: black;
        background: transparent;
        height: 150px;
        border: black solid 1px;
      }
      audio{
        padding-top: 15px;
        padding-left: 70px;
        padding-right: 10px;
        width: 350px;
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
      <!-- <div class="row"> -->
        <h3>Audio List <img src="music.png" height="75px"></h3>
        <div class="card-deck">
          <div class="card">
            <audio src="m1.mp3" controls></audio>
            <div class="card-body">
              <h5 class="card-title">Music 1</h5>
              <p class="card-text">Beat Music.</p>
            </div>
          </div>

          <div class="card">
            <audio src="m2.mp3" controls></audio>
            <div class="card-body">
              <h5 class="card-title">Music 2</h5>
              <p class="card-text">Scary and Horror Backsound.</p>
            </div>
          </div>

          <div class="card">
            <audio src="m3.mp3" controls></audio>
            <div class="card-body">
              <h5 class="card-title">Music 3</h5>
              <p class="card-text">Hard Rap Music.</p>
            </div>
          </div>
        </div>
        <br>
        <div class="card-deck">
          <div class="card">
            <audio src="m4.mp3" controls></audio>
            <div class="card-body">
              <h5 class="card-title">Music 4</h5>
              <p class="card-text">Skinny Indonesian 24 Rap Battle Capres Jokowi Vs Prabowo.</p>
            </div>
          </div>

          <div class="card">
            <audio src="m5.mp3" controls></audio>
            <div class="card-body">
              <h5 class="card-title">Music 5</h5>
              <p class="card-text">Post Malone, Swae Lee-Sunflower.</p>
            </div>
          </div>

          <div class="card">
            <audio src="m6.mp3" controls></audio>
            <div class="card-body">
              <h5 class="card-title">Music 6</h5>
              <p class="card-text">One Piece Opening 10 We Are.</p>
            </div>
          </div>
        </div>
      <!-- </div> -->
      <h3>All rights to clips and music belong to their respective owners.</h3>
    </main>
</body>
</html>
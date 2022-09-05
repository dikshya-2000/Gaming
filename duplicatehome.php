<?php
include('connection.php');
session_start();
$email= $_SESSION['email'];
$sql= "SELECT * FROM game_registration WHERE email='$email'";
$data= mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($data))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The most powerful gaming tool - Robomotz</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>    
<body>


    <div class="site-wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="duplicatehome.php" style="font-family: Skranji, cursive; color: black;"><img class="myImg" src="robomotz logo-02.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-auto"></div>
                  <div class="navbar-nav">
                    <a class="nav-item nav-link" style="color: black;" href="About Us.html"><strong>About Us</strong></a>
                    <a class="nav-item nav-link" style="color: black;" href="Gallery.html"><strong>Gallery</strong></a>
                    <a class="nav-item nav-link" style="color: black;" href="Products.html"><strong>Products</strong></a>
                    <a class="nav-item nav-link" style="color: black;" href="Games.html"><strong>Games</strong></a>
                    <a class="nav-item nav-link" style="color: black;" href="News & Events.html"><strong>News & Events</strong></a>
                    <a class="nav-item nav-link" style="color: black;" href="Learn.html"><strong>Learn</strong></a>
                    <a class="nav-item nav-link" style="color: black;" href="Videos.html"><strong>Videos</strong></a>
                    <a class="nav-item nav-link" style="color: black;" href="login.php"><img src="person-2x.png"><strong><?php echo $row['name'] ?></strong></a>
                    <!-- <a class="nav-item nav-link" style="color: black;" href="#"><strong>Admin</strong></a> -->
                  </div>
                </div>
              </nav>
        </header>
        <main>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="Assassins Creed 1.jpg" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="Assassins Creed 2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="as 3.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </main>
    </div>

    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="card 1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text text-dark">The War of the Masks is a game to deceive others and win the immortal mask. You can enter yourself either as the deceiver or the loyal. The deceiver will try to hide their true self, but the loyal has to find the deceiver and fight against the person.</p>
                        </div>
                      </div>
                </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="card 2 new.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text text-dark">Halo is a game of alien space battles taking place on various planets. You can enter yourself either as an alien or a human. It represents an example of a science-fiction game and is played in the first person, where that person is a shooter. </p>
                </div>
              </div>
        </div>
<div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="card 3 new.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text text-dark">Dota - Defence of the Ancients is a role-playing strategical multiplayer game. You can play as different characters. The game will take place on a custom map - one side is sentinel and scourge. Destruction of the Ancient will result in a win.</p>
        </div>
      </div>
</div>
</div>

<div class="row my-4">
    <div class="col-md-4 offset-md-2">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="card 4.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-white">The Witcher</h5>
              <p class="card-text text-dark">The Witcher is a role-playing one-player game about finding and killing monsters.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-white">New Launch</li> 
            </ul>
            <div class="card-body">
              <a class="a2" href="Learn.html" class="card-link">Learn more</a>
            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="card 5 new.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-white">Hitman</h5>
              <p class="card-text text-dark">Hitman is a one-player action game about an assassin who kills his attackers to achieve a goal.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-white">New Launch</li> 
            </ul>
            <div class="card-body">
              <a class="a2" href="Learn.html" class="card-link">Learn more</a>
            </div>
          </div>
    </div>
    </div>
    </div>

    
</section>

<section class="section-2">
  <div class="card">
    <div class="card-body text-center">
      <h5 class="card-title text-white">Upcoming Games</h5>
      <p class="card-text text-dark">Assassin's Creed Unity is an adventure cum action game, which tells the story of a young man. Arno sets off on a journey to discover the real powers behind the French Revolution. It is a multiplayer game in which you have to save the falling nation from a struggling fate. It is based on a real-life ancient organization. Encounter with with real-world historical events and figures, while playing as an Assassin Initiate.</p>
      <p class="card-text"><small class="text-muted"><a class="a1" href="Games.html">Embark on a journey into the world of Assassin's Creed</a></small></p>
    </div>
    <span class="parallax"></span>
  </div>
</section>

<section class="section-3 m-4">
  <div class="container">
    <div class="row mt-4 d-flex justify-content-between">
      <div class="col-md-12">
        <h3>
          <h3 style="color:whitesmoke">Contact Us</h3>
        </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form action="contactaction.php" method="POST" class="mt-4">
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First Name" name="firstname">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last Name" name="lastname">
              </div>
            </div>
            <div class="form-row mt-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="Email" name="email">
              </div>
            </div>
            <div class="form-row mt-3">
              <div class="col">
                <label for="" class="text-white">Comment</label>
                <textarea name="comment" id="exampletextareacontrol" rows="5" class="form-control" placeholder="Message"></textarea>
                <button type="submit" class="btn">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>

<footer>
  <div class="flex">
      <small>Copyright &copy; 1998-2021, Robomotz, Inc. All rights reserved.<span style="color:whitesmoke"> <strong> Robomotz</strong></span></small>
  </div>
</footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>
<?php
}
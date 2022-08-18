<?php
function get_CURL($url) {
 $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($curl);
  curl_close($curl);
  
  return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet, statistics&id=UCmjKeGifH_FhPqxy67KPRqw&key=AIzaSyBA0dlfWuLwErEV10zX_8MiuouqAAC-Z00');

$youtubeProfilePic = $result['item'][0]['snippet']['thumbnails']['medium'][url];
$channelName = $result['item'][0]['snippet']['title'];
$subscriberCount = $result['item'][0]['subscriberCount'];

// latest video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBA0dlfWuLwErEV10zX_8MiuouqAAC-Z00&channelId=UCmjKeGifH_FhPqxy67KPRqw&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- My CSS -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="mt-5">
    
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
            <a class="nav-link" href="#about">About</a>
            <a class="nav-link" href="#portofolio">Portfolio</a>
            <a class="nav-link" href="#contact">Contact</a>
          </div>
        </div>
      </div>
    </nav>
    
    
    <!-- Jumbotron -->
    <section id="home">
      <div class="container">
      <div class="bg-light p-5 mb-4">
        <div class="container-fluid py-4 text-center">
          <img src="img/profile2.png" width="300" widht="25%" class="rounded-circle img-thumbnail mb-4">
          <h1 class="display-5 fw-bold">Nabila & ICA</h1>
          <p class="lead">Selamat datang di Sistem Informasi STMIK Royal Kisaran</p>
        </div>
      </div>
    </div>
    </section>
    
    
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row py-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque dignissim enim sit amet venenatis urna cursus. Semper quis lectus nulla at volutpat diam ut venenatis. Sit amet dictum sit amet justo. Netus et malesuada fames ac. Eget gravida cum sociis natoque penatibus.</p>
          </div>
          <div class="col-md-5 text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque dignissim enim sit amet venenatis urna cursus. Semper quis lectus nulla at volutpat diam ut venenatis. Sit amet dictum sit amet justo. Netus et malesuada fames ac. Eget gravida cum sociis natoque penatibus.</p>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- Social Media -->
    <section id="social" class="bg-light">
      <div class="container">
        
        <div class="row py-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>
        
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="<?= $youtubeProfilePic; ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName; ?></h5>
                <p><?= $subscriberCount; ?> Subscribers.</p>
                <div class="g-ytsubscribe" data-channelid="UCmjKeGifH_FhPqxy67KPRqw" data-layout="default" data-count="default"></div>
              </div>
            </div>
            <div class="row py-3">
              <div class="col">
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/<?= $latestVideoId; ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="img/profile1.png" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5>@myunussandi</h5>
                <p>100.000 Followers.</p>
              </div>
            </div>
            <div class="row py-3">
              <div class="col">
                <div class="ig-thumbnail">
                  <img src="img/thumbs/1.png">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/thumbs/2.png">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/thumbs/3.png">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/thumbs/4.png">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/thumbs/5.png">
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
    
    
    <!-- Portfolio -->
    <section id="portofolio" class="pb-4">
      <div class="container">
        <div class="row py-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        
        <div class="row mb-4">
          
          <div class="col-md">
            <div class="card">
              <img src="img/thumbs/1.png" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img src="img/thumbs/2.png" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img src="img/thumbs/3.png" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row mb-4">
          
          <div class="col-md">
            <div class="card">
              <img src="img/thumbs/4.png" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img src="img/thumbs/5.png" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img src="img/thumbs/6.png" class="card-img-top">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
    
    <!-- Contact -->
    <section id="contact" class="bg-light mb-5">
      <div class="container pb-4">
        
        <div class="row text-center py-4">
          <div class="col">
            <h2>Contact</h2>
          </div>
        </div>
        
        <div class="row justify-content-center">
          
          <div class="col-lg-4">
            <div class="card text-bg-primary mb-3 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item"><h1>Location</h1></li>
              <li class="list-group-item">My Campus</li>
              <li class="list-group-item">Jl. Prof.H.M.Yamin No.173, Kabupaten Asahan 21222</li>
              <li class="list-group-item">Sumatera Utara</li>
            </ul>
          </div>
          
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="email" class="form-control" id="nama">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="telp" class="form-label">No Telp</label>
              <input type="email" class="form-control" id="telp">
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3"></textarea>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary">Kirim Pesan!</button>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
    
    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row pt-3">
          <div class="col text-center">
            <p>Copyright 2022.</p>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <!-- Subscibe button -->
    <script src="https://apis.google.com/js/platform.js"></script>
    
  </body>
</html>
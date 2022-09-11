<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Documents</title>
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

              <style>
                  .zoom{
                transition: transform .2s;
                      /* cursor: pointer; */
                }
                .zoom:hover{
                  box-shadow:3px 4px 22px rgb(255, 136, 167);
                  transform: scale(1.15);
                }
                  body{
                      background-image: url("images/bg2.jpg");
                      background-repeat: no-repeat;
                      background-size: cover;
                      height: 70vh;
                  }
                  h1{
                      padding-top: 25px;
                      text-align: center;
                      font-family:Stencil Std, fantasy ;
                      font-size: 500%;
                      color:black;
                  }
                  body {
                      padding-top: 25px;
                    margin: 0;
                    display: flex;
                    justify-content: center;
                    flex-direction: column;
                    align-items: center;
                    min-height: 100vh;
                    font-family: "Roboto Mono", monospace;
                  }

                  button {
                    margin: 50px;
                    font-family: inherit;
                  }

                  .fill {
                    font-size: 20px;
                    font-weight: 200;
                    letter-spacing: 1px;
                    padding: 13px 50px 13px;
                    outline: 0;
                    border: 1px solid black;
                    cursor: pointer;
                    position: relative;
                    background-color: rgba(0, 0, 0, 0);
                  }

                  .fill::after {
                    content: "";
                    background-color: #ffd1dc;
                    width: 100%;
                    z-index: -1;
                    position: absolute;
                    height: 100%;
                    top: 7px;
                    left: 7px;
                    transition: 0.2s;
                  }

                  .fill:hover::after {
                    top: 0px;
                    left: 0px;
                  }
                  h3{
                    color:black;
                  }

              </style>
          </head>
              
          <body>

            <h1 style="font-size:500%;margin-top:10px ;font-family:Times New Roman, Times, serif;">TOLLYWOOD MOVIES</h1>
            <!-- #f1b2b5 -->
            <?php echo "<h3>You Have Logged in as @" . $_SESSION['username'] . "</h3>"; ?>
            <div style="margin-top:-20px;">
            <!-- <button type="button1" class="fill">Main Menu</button> -->

            <button type="button1" class="fill" style=" position: absolute;top: 10px;right: 10px;"><a href="logout.php"><div>Logout</div></a></button>
            </div>

                
                
              <div class="container mb-5" style="margin-top: 50px;margin-bottom:20px;">
            
                <div class="row justify-content-center">
                        
                  <div class="col-sm-3 col-md-3">		
                    <div class="card w-100 bg-light zoom">
                      <img width="200px" height="200px" class="mt-4 mb-2 align-self-center rounded-circle" src="images/icon.jpg" alt="">
                      <div class="card-body text-center">
                        <h4 class="card-title">Genre</h4>
                        <h5 class="card-subtitle text-secondary">Movie suggestions based on the genre</h5>
                        <br>
                        <button class="btn btn-primary"style="margin:10px ;background-color: #ffd1dc;"><a href="genre.php">Click</a></button>
                      </div> 
                    </div>
                  </div>

                        
                  <div class="col-sm-3 col-md-3 ms-2 me-2">		
                    <div class="card w-100 zoom">
                      <img width="200px" height="200px" class="mt-4 mb-2 align-self-center rounded-circle" src="images/icon2.jpg" alt="">
                      <div class="card-body text-center">
                        <h4 class="card-title">Hero</h4>
                        <h5 class="card-subtitle text-secondary">Movie suggestions based on the actor</h5>
                        <br>
                        <button class="btn btn-primary" style="margin:10px;background-color: #ffd1dc;"><a href="hero.php">Click</a></button>
                      </div> 
                    </div>
                  </div>

                        <div class="col-sm-3 col-md-3 ">		
                    <div class="card w-100 bg-light zoom">

                      <img width="200px" height="200px" class="mt-4 mb-2 rounded-circle align-self-center " src="images/icon3.jpg" alt="">
                      <div class="card-body text-center">
                        <h4 class="card-title">Director</h4>
                        <h5 class="card-subtitle text-secondary">Movie suggestions based on the Director</h5>
                        <br>
                                    
                        <button class="btn btn-primary"style="margin:10px;background-color: #ffd1dc;"><a href="director.php">Click</a></button>
                      </div> 

                    </div>
                  </div>	
                </div>
              </div>	
              
                
                <!-- links -->
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
    

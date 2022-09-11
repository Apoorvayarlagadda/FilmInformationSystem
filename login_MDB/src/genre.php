<html>
    <head>

          <title>GENRE</title>
          <style>
                          *{
                    margin: 0;
                    padding: 0;
                    -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                  }

                  h1{
                        font-size: 2.5rem;
                        font-family: 'Montserrat';
                        font-weight: normal;
                        color: #444;
                        text-align: center;
                        margin: 2rem 0;
                      }
                      body{
                        background-image: url("images/bg2.jpg");
                        background-repeat: no-repeat;
                        background-size: cover;
                        height: 70vh;
                      }

                      .wrapper{
                        width: 90%;
                        margin: 0 auto;
                        max-width: 80rem;
                      }

                      .cols1{
                        display: -webkit-box;
                        display: -ms-flexbox;
                        display: flex;
                        -ms-flex-wrap: wrap;
                            flex-wrap: wrap;
                        -webkit-box-pack: center;
                            -ms-flex-pack: center;
                                justify-content: center;
                                grid-column-gap: 50px;
                                padding-top:20px ;
                      }
                      .cols2{
                        display: -webkit-box;
                        display: -ms-flexbox;
                        display: flex;
                        -ms-flex-wrap: wrap;
                            flex-wrap: wrap;
                        -webkit-box-pack: center;
                            -ms-flex-pack: center;
                                justify-content: center;
                                grid-column-gap: 50px;
                                padding-top:30px ;
                      }

                      .col{
                        width: calc(25% - 2rem);
                        margin: 1rem;
                        cursor: pointer;
                      }

                      .container{
                        -webkit-transform-style: preserve-3d;
                                transform-style: preserve-3d;
                        -webkit-perspective: 1000px;
                                perspective: 1000px;
                      }

                      .front,
                      .back{
                        background-size: cover;
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.25);
                        border-radius: 10px;
                        background-position: center;
                        -webkit-transition: -webkit-transform 2s cubic-bezier(0.4, 0.2, 0.2, 1);
                        transition: -webkit-transform 2s cubic-bezier(0.4, 0.2, 0.2, 1);
                        -o-transition: transform 2s cubic-bezier(0.4, 0.2, 0.2, 1);
                        transition: transform 2s cubic-bezier(0.4, 0.2, 0.2, 1);
                        transition: transform 2s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform 2s cubic-bezier(0.4, 0.2, 0.2, 1);
                        -webkit-backface-visibility: hidden;
                                backface-visibility: hidden;
                        text-align: center;
                        min-height: 280px;
                        height: auto;
                        border-radius: 10px;
                        color: #fff;
                        font-size: 1.5rem;
                      }

                      .back{
                        background: #cedce7;
                        background: -webkit-linear-gradient(45deg,  #cedce7 0%,#596a72 100%);
                        background: -o-linear-gradient(45deg,  #cedce7 0%,#596a72 100%);
                        background: linear-gradient(45deg,  #cedce7 0%,#596a72 100%);
                      }

                      .front:after{
                        position: absolute;
                          top: 0;
                          left: 0;
                          z-index: 1;
                          width: 100%;
                          height: 100%;
                          content: '';
                          display: block;
                          opacity: .6;
                          background-color: #000;
                          -webkit-backface-visibility: hidden;
                                  backface-visibility: hidden;
                          border-radius: 10px;
                      }
                      .container:hover .front,
                      .container:hover .back{
                          -webkit-transition: -webkit-transform 2s cubic-bezier(0.4, 0.2, 0.2, 1);
                          transition: -webkit-transform 2s cubic-bezier(0.4, 0.2, 0.2, 1);
                          -o-transition: transform 2s cubic-bezier(0.4, 0.2, 0.2, 1);
                          transition: transform 2s cubic-bezier(0.4, 0.2, 0.2, 1);
                          transition: transform 2s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform 2s cubic-bezier(0.4, 0.2, 0.2, 1);
                      }

                      .back{
                          position: absolute;
                          top: 0;
                          left: 0;
                          width: 100%;
                      }

                      .inner{
                          -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
                                  transform: translateY(-50%) translateZ(60px) scale(0.94);
                          top: 50%;
                          position: absolute;
                          left: 0;
                          width: 100%;
                          padding: 2rem;
                          -webkit-box-sizing: border-box;
                                  box-sizing: border-box;
                          outline: 1px solid transparent;
                          -webkit-perspective: inherit;
                                  perspective: inherit;
                          z-index: 2;
                      }

                      .container .back{
                          -webkit-transform: rotateY(180deg);
                                  transform: rotateY(180deg);
                          -webkit-transform-style: preserve-3d;
                                  transform-style: preserve-3d;
                      }

                      .container .front{
                          -webkit-transform: rotateY(0deg);
                                  transform: rotateY(0deg);
                          -webkit-transform-style: preserve-3d;
                                  transform-style: preserve-3d;
                      }

                      .container:hover .back{
                        -webkit-transform: rotateY(0deg);
                                transform: rotateY(0deg);
                        -webkit-transform-style: preserve-3d;
                                transform-style: preserve-3d;
                      }

                      .container:hover .front{
                        -webkit-transform: rotateY(-180deg);
                                transform: rotateY(-180deg);
                        -webkit-transform-style: preserve-3d;
                                transform-style: preserve-3d;
                      }

                      .front .inner p{
                        font-size: 2rem;
                        margin-bottom: 2rem;
                        position: relative;
                      }

                      .front .inner p:after{
                        content: '';
                        width: 4rem;
                        height: 2px;
                        position: absolute;
                        background: #C6D4DF;
                        display: block;
                        left: 0;
                        right: 0;
                        margin: 0 auto;
                        bottom: -.75rem;
                      }

                      .front .inner span{
                        color: rgba(255,255,255,0.7);
                        font-family: 'Montserrat';
                        font-weight: 300;
                      }

                      @media screen and (max-width: 64rem){
                        .col{
                          width: calc(33.333333% - 2rem);
                        }
                      }

                      @media screen and (max-width: 48rem){
                        .col{
                          width: calc(50% - 2rem);
                        }
                      }

                      @media screen and (max-width: 32rem){
                        .col{
                          width: 100%;
                          margin: 0 0 2rem 0;
                        }
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
                      
                      .h_container{
                    background-color: #cac7c7;
                    border-radius: 20px;
                    box-shadow: 0 2px 8px rgba(0,0,0,.1);
                    display: inline;

                }
               

                table {
                    width: 90%;
                    color: 	black;
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 20px;
                    text-align: left;
                    padding: 5px;

                    }
                    th {
                    font-size:25px;
                    color: 	#202020;
                    padding: 5px;
                    border: 1px solid black;
                    
                    
                    }
                    
                    td{
                      padding: 3px;
                    } 
          </style>  
            <script src="https://kit.fontawesome.com/3929e16ef5.js" crossorigin="anonymous"></script>
            <script src="{% static 'network/functions.js' %}"></script>
            <!-- <link href="genre1.scss" rel="stylesheet/scss" type="text/css">  -->

    </head>

    <body>

      <div class="wrapper">
        <h1>TOLLYWOOD GENRE</h1>

        <div style="margin-top:-20px;">

          <button type="button1" class="fill" style=" position: absolute;top: 10px;left: 10px;"><a href="welcome.php">BACK</a></button>
          
          <button type="button1" class="fill" style=" position: absolute;top: 10px;right: 10px;"><a href="logout.php"><div>Logout</div></a></button>
        
        </div>

        <div class="cols1">


            <div class="col" ontouchstart="this.classList.toggle('hover');">
              <div class="container">
                <div class="front" style="background-image: url(images/genre1.jpg)">
                  <div class="inner">
                    <p>Thriller</p>
                    <span>Telugu Thriller</span>
                  </div>
                </div>
                <div class="back">
                  <div class="inner">
                            <table>
                            <tr>
                                <th style="border-radius: 10px;">Suggested Movies</th>
                                
                            </tr>
                            <?php
                                      $conn = mysqli_connect("localhost", "root", "", "movies_1");
                                      
                                      if ($conn->connect_error) 
                                      {
                                          die("Connection failed: " . $conn->connect_error);
                                      }

                                      $sql = "SELECT Movie_name  FROM movies where Genre='Thriller' ";
                                      $result = $conn->query($sql);

                                      if ($result->num_rows > 0) 
                                      {
                                          while($row = $result->fetch_assoc()) 
                                          {
                                              echo "<tr><td>" . $row["Movie_name"]. "</td><td>" ;
                                          }
                                      echo "</table>";
                                      } 

                                      else 
                                      { 
                                          echo "0 results"; 
                                      }
                                      $conn->close();
                            ?>
                            
                            </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
              <div class="container">
                <div class="front" style="background-image:url(images/genre2.jpg)">
                  <div class="inner">
                    <p>Rom-com</p>
                    <span>Telugu Rom-Com</span>
                  </div>
                </div>
                <div class="back">
                  <div class="inner">

                  <table>
                      <tr>
                          <th style="border-radius: 10px;">Suggested Movies</th>
                      </tr>
                      <?php
                            $conn = mysqli_connect("localhost", "root", "", "movies_1");
                            
                            if ($conn->connect_error) 
                            {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT Movie_name  FROM movies where Genre='Rom-com' ";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) 
                            {
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<tr><td>" . $row["Movie_name"]. "</td><td>" ;
                                }
                            echo "</table>";
                            } 

                            else 
                            { 
                                echo "0 results"; 
                            }
                            $conn->close();
                      ?>
                  </table>


                  </div>
                </div>
              </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
              <div class="container">
                <div class="front" style="background-image: url(images/genre3.jpg)">
                  <div class="inner">
                    <p>Drama</p>
                    <span>Telugu Drama</span>
                  </div>
                </div>
                <div class="back">
                  <div class="inner">
                  
                  <table>
                      <tr>
                          <th style="border-radius: 10px;">Suggested Movies</th>
                      </tr>
                      <?php
                                $conn = mysqli_connect("localhost", "root", "", "movies_1");
                                
                                if ($conn->connect_error) 
                                {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT Movie_name  FROM movies where Genre='Drama' ";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        echo "<tr><td>" . $row["Movie_name"]. "</td><td>" ;
                                    }
                                echo "</table>";
                                } 

                                else 
                                { 
                                    echo "0 results"; 
                                }
                                $conn->close();
                      ?>
                  </table>


                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="cols2">
            <div class="col" ontouchstart="this.classList.toggle('hover');">
              <div class="container">
                <div class="front" style="background-image: url(images/genre4.jpg)">
                  <div class="inner">
                    <p>Action</p>
                    <span>Telugu Action</span>
                  </div>
                </div>
                <div class="back">
                  <div class="inner">
                     

                     <table>
                      <tr>
                          <th style="border-radius: 10px;">Suggested Movies</th>
                      </tr>
                      <?php
                                $conn = mysqli_connect("localhost", "root", "", "movies_1");
                                
                                if ($conn->connect_error) 
                                {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT Movie_name  FROM movies where Genre='Action' ";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        echo "<tr><td>" . $row["Movie_name"]. "</td><td>" ;
                                    }
                                echo "</table>";
                                } 

                                else 
                                { 
                                    echo "0 results"; 
                                }
                                $conn->close();
                      ?>
                  </table>

                  </div>
                </div>
              </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
              <div class="container">
                <div class="front" style="background-image: url(images/genre5.jpg)">
                  <div class="inner">
                    <p>Horror</p>
                    <span>Telugu Horror</span>
                  </div>
                </div>
                <div class="back">
                  <div class="inner">
                      
                      <table>
                      <tr>
                          <th style="border-radius: 10px;">Suggested Movies</th>
                      </tr>
                      <?php
                                $conn = mysqli_connect("localhost", "root", "", "movies_1");
                                
                                if ($conn->connect_error) 
                                {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT Movie_name  FROM movies where Genre='Horror' ";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        echo "<tr><td>" . $row["Movie_name"]. "</td><td>" ;
                                    }
                                echo "</table>";
                                } 

                                else 
                                { 
                                    echo "0 results"; 
                                }
                                $conn->close();
                      ?>
                     </table>

                  </div>
                </div>
              </div>
            </div>
            <div class="col" ontouchstart="this.classList.toggle('hover');">
              <div class="container">
                <div class="front" style="background-image: url(images/genre6.jpg)">
                  <div class="inner">
                    <p>Sports</p>
                    <span>Telugu Sports</span>
                  </div>
                </div>
                <div class="back">
                  <div class="inner">
                      
                      <table>
                      <tr>
                          <th style="border-radius: 10px;">Suggested Movies</th>
                      </tr>
                      <?php
                                $conn = mysqli_connect("localhost", "root", "", "movies_1");
                                
                                if ($conn->connect_error) 
                                {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT Movie_name  FROM movies where Genre='Sports' ";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        echo "<tr><td>" . $row["Movie_name"]. "</td><td>" ;
                                    }
                                echo "</table>";
                                } 

                                else 
                                { 
                                    echo "0 results"; 
                                }
                                $conn->close();
                      ?>
                      </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
    </body>
</html>
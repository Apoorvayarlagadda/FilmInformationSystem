<html>
  
<head>
    <title>InsertionPage</title>
    <style>
        body {
                align-items: center;
                background-image:url("images/bg5.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                display: flex;
                justify-content: center;
                height: 100vh;
                }
                .button-83 {
                appearance: button;
                background-color: transparent;
                background-image: linear-gradient(to bottom, #fff, #f8eedb);
                border: 0 solid #e5e7eb;
                border-radius: .5rem;
                box-sizing: border-box;
                color: #482307;
                column-gap: 1rem;
                cursor: pointer;
                display: flex;
                font-family: ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                font-size: 100%;
                font-weight: 700;
                line-height: 24px;
                margin: 0;
                outline: 2px solid transparent;
                padding: 1rem 1.5rem;
                text-align: center;
                text-transform: none;
                transition: all .1s cubic-bezier(.4, 0, .2, 1);
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                box-shadow: -6px 8px 10px rgba(81,41,10,0.1),0px 2px 2px rgba(81,41,10,0.2);
                }

                .button-83:active {
                background-color: #f3f4f6;
                box-shadow: -1px 2px 5px rgba(81,41,10,0.15),0px 1px 1px rgba(81,41,10,0.15);
                transform: translateY(0.125rem);
                }

                .button-83:focus {
                box-shadow: rgba(72, 35, 7, .46) 0 0 0 4px, -6px 8px 10px rgba(81,41,10,0.1), 0px 2px 2px rgba(81,41,10,0.2);
                }
                .a-box {
                display: inline-block;
                width: 240px;
                text-align: center;
                }

                .img-container {
                    height: 230px;
                    width: 200px;
                    overflow: hidden;
                    border-radius: 0px 0px 20px 20px;
                    display: inline-block;
                }

                .img-container img {
                    transform: skew(0deg, -13deg);
                    height: 250px;
                    margin: -35px 0px 0px -70px;
                }
                img{
                    position :relative;
                    right:-30px;
                    bottom:-10px;
                }
                .inner-skew {
                    display: inline-block;
                    border-radius: 20px;
                    overflow: hidden;
                    padding: 0px;
                    transform: skew(0deg, 13deg);
                    font-size: 0px;
                    margin: 30px 0px 0px 0px;
                    background: #c8c2c2;
                    height: 250px;
                    width: 200px;
                }

                .text-container {
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
                padding: 120px 20px 20px 20px;
                border-radius: 20px;
                background:	#D2B48C;
                margin: -120px 0px 0px 0px;
                line-height: 19px;
                font-size: 14px;
                }

                .text-container h3 {
                margin: 20px 0px 10px 0px;
                color: 		#722F37;
                font-size: 18px;
                }
    </style>
</head>
  
<body>
        <div style="margin-top:-20px;">
        <button type="button" class="button-83" style=" position: absolute;top: 10px;left: 10px;"><a href="adminwelcome.php">Back</a></button>
        <button type="button" class="button-83" style=" position: absolute;top: 10px;right: 130px;"><a href="data.php">Data</a></button>
        <button type="button1" class="button-83" style=" position: absolute;top: 10px;right: 10px;"><a href="logout2.php"><div>Logout</div></a></button>      
        </div>
    <center>
        <?php
  
        $conn = mysqli_connect("localhost", "root", "", "movies_1");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $Movie_ID = $_REQUEST['Movie_ID'];
        $Movie_name = $_REQUEST['Movie_name'];
        $Genre = $_REQUEST['Genre'];
        $Hero = $_REQUEST['Hero'];
        $Director = $_REQUEST['Director'];
          
        $sql = "INSERT INTO movies  VALUES ('$Movie_ID', '$Movie_name', '$Genre','$Hero','$Director')";
          
        if(mysqli_query($conn, $sql)){
            // echo "<h3>Data stored in a database successfully. </h3>"; ?>
            <div class="a-box">
            <div class="img-container">
                <div class="img-inner">
                <div class="inner-skew">
                    <img src="images/icon4.jpg">
                </div>
                </div>
            </div>
            <div class="text-container">
                
                <div>
                <h3>Data stored in a database successfully.</h3>
            </div>
            </div>
        <?php

        } else{
            // echo "";?>
            <div class="a-box">
            <div class="img-container">
                <div class="img-inner">
                <div class="inner-skew">
                    <img src="images/icon4.jpg">
                </div>
                </div>
            </div>
            <div class="text-container">
                
                <div>
                <h3>Sorry !! Data Could Not be Inserted !!</h3>
            </div>
            </div>
            <?php    
        }
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>
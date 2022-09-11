<html>
    <head>
        <title>Data</title>
        <style>
            body{
                background-image:url("images/bg4.jpg");
                background-repeat: no-repeat;
                background-size: 2000px 5000px;
            }
            table {
            border-collapse: collapse;
            width: 70%;
            color: 	#191970;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
            align :centre;
            position:relative;
            top:15px;
            right:-240px;
            border-spacing:10px;
            border-collapse: separate;
            }
            th {
            background-color: #6082B6;
            color: white;
            padding: 10px;
            }
            td{
                padding: 10px;
            }
            /* :nth-child(even) */
            tr 
            {background-color: 	#F0FFFF} 
            h1{
                font-size:60px;
                color:white;
                position:relative;
                top:20px;
            }
            tr{
                size:10px;
            }
            .button {
            align-items: center;
            background-color: #6082B6;
            border: 0;
            border-radius: 100px;
            box-sizing: border-box;
            color: #ffffff;
            cursor: pointer;
            display: inline-flex;
            font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 600;
            justify-content: center;
            line-height: 20px;
            max-width: 480px;
            min-height: 40px;
            min-width: 0px;
            overflow: hidden;
            padding: 0px;
            padding-left: 20px;
            padding-right: 20px;
            text-align: center;
            touch-action: manipulation;
            transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
            user-select: none;
            -webkit-user-select: none;
            vertical-align: middle;
            }

            .button:hover,
            .button:focus { 
            background-color: #6082B6;
            color: #ffffff;
            }

            .button:active {
            background: #6495ED;
            color: rgb(255, 255, 255, .7);
            }

            .button:disabled { 
            cursor: not-allowed;
            background: rgba(0, 0, 0, .08);
            color: rgba(0, 0, 0, .3);
            }
            a{
                color:white;
            }
        </style>
    </head>
    <body>
        
        <div style="margin-top:-20px;">

        
        <h1><center>FILM INFORMATION SYSTEM</center></h1>
        <button type="button" class="button" style=" position: absolute;top: 20px;left: 20px;"><a href="adminwelcome.php">Back</a></button>
        <button type="button1" class="button" style=" position: absolute;top: 20px;right: 20px;"><a href="logout2.php"><div>Logout</div></a></button>      
        </div>

            <table >
                <tr>
                    <th>Movie_ID</th>
                    <th>Movie_name</th>
                    <th>Genre</th>
                    <th>Hero</th>
                    <th>Director</th>
                </tr>
                <?php
                            $conn = mysqli_connect("localhost", "root", "", "movies_1");
                            
                            if ($conn->connect_error) 
                            {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT *  FROM movies";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) 
                            {
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<tr><td>" . $row["Movie_ID"]. "</td><td>". $row["Movie_name"]."</td><td>". $row["Genre"]."</td><td>". $row["Hero"]."</td><td>". $row["Director"]."</td></tr>" ;
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
    </body>
</html>
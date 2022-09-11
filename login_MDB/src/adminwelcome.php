

<html>
    <head>
        <title>
            adminpage
        </title>
        <STYLE>
                body {
                align-items: center;
                background-image:url("images/bg5.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                display: flex;
                justify-content: center;
                height: 100vh;
                }

                form {
                background-color: #D2B48C;
                border-radius: 40px;
                box-sizing: border-box;
                height: 650px;
                padding: 20px;
                width: 420px;
                }

                .title {
                color: #5C4033;
                font-family: sans-serif;
                font-size: 36px;
                font-weight: 600;
                margin-top: 30px;
                }

                .subtitle {
                color: #5C4033;
                font-family: sans-serif;
                font-size: 16px;
                font-weight: 600;
                margin-top: 10px;
                }

                .input-container {
                height: 50px;
                position: relative;
                width: 100%;
                }

                .ic1 {
                margin-top: 40px;
                }

                .ic2 {
                margin-top: 30px;
                }

                .input {
                background-color: #EADDCA;
                border-radius: 12px;
                border: 0;
                box-sizing: border-box;
                color:#4A0404;
                font-size: 18px;
                height: 100%;
                outline: 0;
                padding: 4px 20px 0;
                width: 100%;
                }

                .cut {
                background-color: #15172b;
                border-radius: 10px;
                height: 20px;
                left: 20px;
                position: absolute;
                top: -20px;
                transform: translateY(0);
                transition: transform 200ms;
                width: 85px;
                }

                .cut-short {
                width: 70px;
                }

                .input:focus ~ .cut,
                .input:not(:placeholder-shown) ~ .cut {
                transform: translateY(8px);
                
                }

                .placeholder {
                color: #DAA06D;
                font-family: sans-serif;
                left: 20px;
                line-height: 14px;
                pointer-events: none;
                position: absolute;
                transform-origin: 0 50%;
                transition: transform 200ms, color 200ms;
                top: 20px;
                }

                .input:focus ~ .placeholder,
                .input:not(:placeholder-shown) ~ .placeholder {
                transform: translateY(-30px) translateX(10px) scale(0.75);
                
                }

                .input:not(:placeholder-shown) ~ .placeholder {
                color: #DAA06D;
                }

                .input:focus ~ .placeholder {
                color: #eee;
                }

                .submit {
                background-color: #6F4E37;
                border-radius: 12px;
                border: 0;
                box-sizing: border-box;
                color: #eee;
                cursor: pointer;
                font-size: 18px;
                height: 50px;
                margin-top: 38px;
                // outline: 0;
                text-align: center;
                width: 100%;
                }

                .submit:active {
                background-color: #5C4033;
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

        </STYLE>
    </head>
    <body>
    <div style="margin-top:-20px;">

          <button type="button" class="button-83" style=" position: absolute;top: 20px;right: 130px;"><a href="data.php">Data</a></button>
          <button type="button1" class="button-83" style=" position: absolute;top: 20px;right: 20px;"><a href="logout2.php"><div>Logout</div></a></button>      
    </div>
    <form action="insert.php" method="post">
      <div class="title"><center>Insert Data</center></div>
      <div class="subtitle">Let's add data... </div>
      <div class="input-container ic1">
        <input id="Movie_ID" class="input" type="text"  name="Movie_ID" >
        <div class="cut"></div>
        <label for="Movie_ID" class="placeholder">Movie_ID</label>
      </div>
      <div class="input-container ic2">
      <input id="Movie_name" class="input" type="text"  name="Movie_name" >
        <div class="cut"></div>
        <label for="Movie_name" class="placeholder">Movie_name</label>
      </div>
      <div class="input-container ic2">
      <input id="Genre" class="input" type="text"  name="Genre" >
        <div class="cut"></div>
        <label for="Genre" class="placeholder">Genre</label>
      </div>
      <div class="input-container ic2">
      <input id="Hero" class="input" type="text"  name="Hero" >
        <div class="cut"></div>
        <label for="Hero" class="placeholder">Hero</label>
      </div>
      <div class="input-container ic2">
      <input id="Director" class="input" type="text"  name="Director" >
        <div class="cut"></div>
        <label for="Director" class="placeholder">Director</label>
      </div>
      <button type="text" class="submit">Add Data</button>
    </form>
    </body>
</html>
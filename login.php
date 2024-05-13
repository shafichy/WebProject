<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/loader.css">
    <title>LoginPage</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<Navbar>
       <div class="container mx-auto">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
              <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                  <li>
                    <a href="index.html">Home</a>
                </li>
              
                  <li>
                    <a href="about.html">About Us</a>
                  </li>
                  <li>
                    <a href="login.php">Login</a>
                  </li>
                </ul>
              </div>
              <a class="btn btn-ghost text-xl">MetroPolitan</a>
            </div>
            <div class="navbar-center hidden lg:flex">
              <ul class="menu menu-horizontal px-1">
                <li>
                    <a href="index.html">Home</a>
                </li>
              
                <li>
                    <a href="about.html">About Us</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                  </li>
              </ul>
            </div>
            <div class="navbar-end">
              <a class="btn">Button</a>
            </div>
          </div>
       </div>
    </Navbar>



    <div class="loginform">
             <div class="inputgroup topmarginlarge">
                    <input type="text" id="txtUsername" required>
                    <label for="txtUsername" id="lblUsername">USER NAME</label>
             </div>

             <div class="inputgroup topmarginlarge">
                    <input type="password" id="txtPassword" required>
                    <label for="txtPassword" id="lblPassword">PASSWORD</label>
             </div>
             <div class="divcallforaction topmarginlarge">
                <button class="btnlogin inactivecolor" id="btnLogin">LOGIN</button>
             </div>  
             
             <div class="diverror topmarginlarge" id="diverror">
              <label class="errormessage" id="errormessage">ERROR GOES HERE</label>
             </div>
    </div>
    <div class="lockscreen" id="lockscreen">
       <div class="spinner" id="spinner"></div>
         <lable class="lblwait topmargin" id="lblwait">PLEASE WAIT</lable>
    </div>

         <!-- <script src="js/jquery.js"></script>
        <script src="js/login.js"></script> -->
</body>
</html>
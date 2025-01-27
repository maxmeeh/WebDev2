<!DOCTYPE html>
<html lang="en">
<title>Max Meeh Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="JS/script.js"></script>
<style>
  html,
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Roboto", sans-serif;
  }

  .w3-sidebar {
    z-index: 3;
    width: 250px;
    top: 43px;
    bottom: 0;
    height: inherit;
  }
</style>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1"
        href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
      <a href="login.php" class="w3-bar-item w3-button w3-theme-l1 w3-hover-white">Login</a>
      <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
      <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
      <a href="experience.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Experience </a>
      <a href="goals.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Goals</a>
      <a href="eBayAPI.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Shop</a>


    </div>
  </div>
  <!-- Sidebar -->
  <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
      class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
      <i class="fa fa-remove"></i>
    </a>
    <h4 class="w3-bar-item"><b>Three Favorite Things</b></h4>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">Sports</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">Family</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">Video Games</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#"></a>
  </nav>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
    id="myOverlay"></div>

  <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
  <div class="w3-main" style="margin-left:250px">

    <div class="w3-row w3-padding-64">
      <div class="w3-twothird w3-container">
        <h1 class="w3-text-teal"></h1>
        <p>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4" style="background-color: rgb(15, 156, 11); height:200px; width: 80px(5, 5, 5);">




        <img
          src="data:image/jpeg;base64,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">

      </div>



      <div class="col-sm-4" style=" background-color:rgb(15, 156, 11);">
        <p>
          I have always love playing soccer and going to Minnesota United games. Although in recent times i haven't been
          able to go because of coronavirus, I look forward to going in the future.
          I also love playing video games with my friends and myself. It's a good activity for me cause it allow's me to
          just chill out.

        </p>
        Select Your Favorite Team:
  <select id="browsers" onchange="preferedBrowser()">
    <option value="Packers">Packers</option>
    <option value="Vikings">Vikings</option>
    <option value="Minnesota United">Minnesota United</option>
    <option value="Wild">Wild</option>
    <option value="Timber Wolves">Timber Wolves</option>
  </select>
      
      </div>
      <div class="col-sm-4" style=" background-color: rgb(15, 156, 11);   ">
        


        <img
          src="https://www.resizepixel.com/Image/3c6c8847/Preview/gaming%20photo.png?v=029085a7-fba2-46dd-8900-aaeccab5804a">


      </div>

    </div>
    <div class="row">
      <div class="col-sm-4" style="  background-color: rgb(15, 156, 11);">
       
       
       
        <center> 
        </p>
        <title-center> Favorite Places to travel!!</title-center>
        
        <li>
          North Caroline 



        </li>
        <li>Florida</li>
        <li>
          Chicago
        </li>
        <li>
          Nevada

        </li>
        <li>
        California
        </li>
     




        </center>
        <p>
        </p>
        <title-center> </title-center>
        
        
          



        
        

       
         
     
     
      </div>

      <div class="col-sm-4" style=" background-color: rgb(15, 156, 11);">
        <img
          src="https://www.resizepixel.com/Image/31d68555/Preview/beach%20photo.jpg?v=e9612911-7c61-424d-99b3-ce4d122e703d">

      </div>

      <div class="col-sm-4" style=" background-color: rgb(15, 156, 11);">
       <center>
        Which is the best hobby

       
       
       
       
       
      
         
         
         
          <li>
            <button onclick="sports()">Sports</button>

            <p id="demo"></p>
          </li>
          <li>

            <button onclick="gaming()">Gaming</button>
            <p id="gaming"></p>
  


          </li>
          <li>

            
            <button onclick="traveling()">Traveling</button>
            <p id="traveling"></p>
         
          </li>
          
           




         

          
          
          
         
        </center>
        


      </div>

      <div class="w3-row w3-padding-64">
        <div class="w3-twothird w3-container">
          <h1 class="w3-text-teal"></h1>
          <p></p>
        </div>
        <div class="w3-third w3-container">
         
        </div>
      </div>



    
    
    </div>
  

      <!-- Pagination -->


      <footer id="myFooter">
        <div class="w3-container w3-theme-l2 w3-padding-32">
          <h4>  <title>Bootstrap Example</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <div class="container">
              <h2>Ways to contact me</h2>
              <p>These are all the best ways to contact me in lure of job opportunities</p>            
              <table class="table">
                <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Peter </td>
                    <td>Meeh</td>
                    <td>Petermeeh05@gmail.com</td>
                  </tr>
                  <tr>
                    <td>Max</td>
                    <td>Meeh</td>
                    <td>maxmeeh08@icloud.com</td>
                  </tr>
                  <tr>
                    <td>Jennifer</td>
                    <td>Tollefson</td>
                    <td>Jtollefson@gmail.com</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          
          </head></h4>
        </div>

        <div class="w3-container w3-theme-l1">
          <p>Powered by <a href="https://www.shakopee.k12.mn.us/" target="_blank">Shakopee Schools</a></p>
        </div>
      </footer>

  
  </div>
<!DOCTYPE html>

<html>
    <head>
        <title>HomePage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="general.css"> 
       <link rel="icon" type="image/png" sizes="50x50" href="images/icon.PNG">
       <style>
           #reg p {
    padding:1px;
       color:white;
}
#reg a{
    text-decoration: none;
    color:#003300;
}
#reg a:hover{
    color:#ccffcc;
}
#flex-container{

     display: flex;
     flex-direction: column;
     text-align:center;
     justify-content: center;
  
  width: 20%;
  height: 180px;
  
  padding: 10px;
  background-color: #5d6d4a;
    border-radius: 0.6em;
      opacity: 0.8;
      
        margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
      
      
}

#log-in{
    margin: auto;
     width: 220px;
     height:50px;
     text-align: center;
     border: none;
     border-radius: 0.6em;
        font-family: Papyrus;
        font-size: 20px;

}
#log-in:hover{
            cursor: pointer;
            background-color:#dddddd;
        }
        body{
    margin:0px;
 font-family: Papyrus;
     font-size: 20px;

background: url("images/bimg.png") ;

           
background-repeat: no-repeat ;
 width: 100vw;
  
  background-size: cover;
    
}

       </style>
    </head>
    <body id ="body">
        <header id="header">
 <h1  id="h1">The Gables</h1>
            <img  id ="img-title" src ="images/logo.PNG" alt ="logo" width="300" height="300">
          
          <div
        id="div_top_hypers"
        style="display: flex; justify-content: space-between"
      >
             
          <ul id="ul_top_hypers">
            <li>&#8227; <a href="index.php" class="a_top_hypers">Home</a></li>
            
            
            
          </ul>
    
      
      </div>
          </header>
        <main>
            <div id="flex-container">
                <div>
                    
                    <a href="logIn.php">
            <button id="log-in" type="button"> Log-in</button>
               </a>
                
                        
            
               
                </div>
                <div id="reg">
                    <p>New user ?  <a href="SignUp.php">Sign-up</a></p>
                </div>
            </div>
            
        </main>
        <footer id="foot">
            <h4>@copyRight</h4>
        </footer>
        
    </body>
</html>

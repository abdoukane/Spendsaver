<?php
      
      include_once('include/initialize.php'); 
      
       getHeader();

    $index = $_REQUEST['id'];
    var_dump($index);
    echo"
   
       
    <div class='container'> 
        <div class = 'div1'>
            <h2> ".getAllPosts()[$index]['Title']. "</h2>
           
                <p> ".getAllPosts()[$index]['Content']. "</p>
          
          
             <a href='index.php'>Back to main page</a>  
        </div>          d
        </div>

        


    
</body>

</head>
</html>

    ";

   

    
      ?>


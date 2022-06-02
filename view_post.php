<?php
      
      include_once('include/initialize.php'); 
      $index = $_REQUEST['id'];
       getHeader();
    $post = getPost($index);
   // var_dump($index);
    echo"
   
       
    <div class='container'> 
        <div class = 'div1'>
            <h2> ".$post['Title']. "</h2>
           
                <p> ".$post['Content']. "</p>

                <p> ".$post['DatePosted']. "</p>

                

                
          
          
             <a href='index.php'>Back to main page</a>  
        </div>          
        </div>

        


    
</body>

</head>
</html>

    ";

   

    
      ?>


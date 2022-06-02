       <?php
      
       include_once('include/initialize.php'); 
       

        getHeader();

   

       $getContent = getAllPosts();
       //var_dump($getContent);


       ?>
            <div class='container'> 
                <div class = 'div1'><h2> Welcome</h2>
                    <p> Thanks for coming to my site. I'll explain a bit about myself, and then you can read some blog posts ive written.</p>
                    
                    <p> I'm a student at WashU in St. Louis. I'm currently a computer science and economics joint major, with a minor in psychology. I enjoy boxing, playing pickup 
                        and watching basketball. I love mwatching movies and TV shows, a show I recently just finished is Top Boy. I would like to work in the Tech industry after college and someday hope to start my own business, although I'm not sure what for yet.  </p>
                   
                    <h3> <p class = 'emphasis'> here's some more information about me!--> </p></h3>
                </div>
            <?php
            foreach($getContent as $index){
    
            echo"
                 <div class = 'div2'>
                 <h2>  <a href ='view_post.php?id=$index[Title]'>$index[Title]</a></h2>    
                </div>";
    
            }
            ?>
        

            
        </body>

    </head>
</html>
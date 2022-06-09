<html>
    <head>
        <title> Spendsaver </title> 
         <link rel='stylesheet' href='main.css'>
        <body>
            <?php
        include_once('include/initialize.php'); 
      $getExpenses= getExpenses();
      var_dump($getExpenses);
?>
        <div class = 'header' > 
            <h1 class = 'title'>Spendsaver </h1>
        </div>

        <div class= 'container'>
            <div class = 'form'>
                <h1 class = 'formtext'> FORM GOES HERE </h1>
            </div>  

            <div class = 'expenselist'>
                <?php
                echo"
            <h1 class = 'expenses'> $getExpenses[Amount]</h1>
            ";
            ?>
            </div>

            <div class = 'possiblemeters'>
            <h1 class = 'meters'> METERS </h1>
            </div>

        </div>  

        <div class = 'footer'>
            <h1 class= 'end'> Icons for different pages should be here!</h1>


        
        </body>

    </head>
</html> 
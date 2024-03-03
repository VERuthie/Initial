
<!DOCTYPE html>
<html lang ="en">
            <head>
                <title> Payag ni Jose</title>
                <meta charset="utf-8"> 
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
            </head>
    <body>
            <header> <h1> Hello </h></header>
            <main>
           
             <?php
                echo "Thank you for your submission!"
                $firstName =$_POST['first_name'];

                if(isset($firstName)) {echo '<p><b> First Name: </b>' . $firstName . '</.p>';}


             ?>

            </main>




    </body>

</html>

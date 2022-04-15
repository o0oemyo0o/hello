<html>
    <head>
        <title>hello</title>
    </head>
    <body>
        <h2>Please input your name:</h2>
        <br>
        <form method='post'>
            <input type="text" name="name" id="name"   />
            &emsp13;
            <button type="submit" >Submit Name</button>
            <br>
        </form>
        
        <?php
            
           if(isset ($_POST['name'])){
               $name=$_POST['name'];

               if($name=="Eman"||$name==" Nabaa" ||$name== "Malak" ||$name=="Walaa" ||$name=="Futoon"||$name=="Alanoud" ||$name=="Noor" )
                {
                    $message='My Frind';
                }
                else
                {
                    $message=$name;
                }
                echo "<h3>Hello $message</h3>";
            
           }
           else
           {
            echo "<h3>Hello </h3>";
           }
           
        ?>
    </body>   
</html>
<?php
include __DIR__ . "/data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP-OOP-2</title>
</head>
<body>
    <div class="container">
            <?php foreach ($objects as $object) { ?>
                <div class="card">
                    <div class="text_box">
                        <?php echo "<p>". get_class($object) ."</p>"?>
                        <?php echo "<p>Name: ". $object->name ."</p>"?>
                        <?php echo "<p>Price: ". $object->price ."</p>"?>
                        <?php 

                        if(get_class($object)=="Food"){
                             echo 
                             "<p>Contain protein: ". $object->protein ."</p>".
                             "<p>Contain ready-cooked: ". $object->ready_cooked ."</p>";
                        }
                        elseif(get_class($object)=="Dog_kennel"){
                            echo 
                            "<p>Dimensions: ". $object->dimensions ."</p>" .
                            "<p>Materials: ". $object->composition ."</p>" ;
                        }
                        elseif(get_class($object)=="Game"){
                            echo 
                            "<p>Destination: ". $object->destination ."</p>";
                        }

                        ?>
                    </div>
                    <div class="img_box">
                        <?php echo "<img src='". $object->img ."' alt='item_img' </img>"?>
                    </div>


                </div>
               <?php } ?>
        </div>

    </div>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel= "stylesheet" href="style.css" />
<head>
<body>    

    <div class="flex container">

        <div class="header">
                <?php include 'logo.inc.php' ?>
                <?php include 'menu.inc.php' ?>
        </div>
        
        <div class="about_me">

          <h1>  <?php echo $p ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php echo '<img src="/img/7JkafDU5pBQ.jpg">'; ?>
                </div>    

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                          echo 'город Электросталь';   ?>
                    </p>

                    <p> Мне
                    <?php echo $age;    ?>
                    лет </p> 
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">

                    <?php include 'knowledge.inc.php'; ?>
                    <?php
                    echo $a, ' ', $b, ' ', $c;
                    ?> <br>

                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>
                     <?php    
                        echo $d;
                    ?>
                    
            </div> 
            
            <div class="arnicle">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae asperiores dolore explicabo. Animi est quibusdam molestias!
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium total quia?
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</head>
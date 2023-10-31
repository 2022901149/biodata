<!doctype html>
<html lang="en"> 
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biodata</title>
    <link rel="stylesheet" href="styles-desktop.css" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="styles-mobile.css" media="screen and (max-width: 768px)">
</head>
<body>
<?php require('action.php'); ?>
    <div class="container">
        <header>
        <div class="image-container">
        <img src="<?php echo $images ?>" alt="<?php echo $name ?>" width="300" height="300" class="round-image">
        <p>&nbsp;</p>
        <h1><?php echo $name ?></h1>
        &nbsp;
    </div>
            
        </header>
        <section class="info">
            &nbsp;
        <h1>About Me</h1>
            <p>Email: <?php echo $email ?></p>
            <p>Phone: <?php echo $phone ?></p>
            <p>IC: <?php echo $ic ?></p>
            <p>Father's Name: <?php echo $father ?></p>
            <p>Mother's Name: <?php echo $mother ?></p>
            <p>Gender: <?php echo $gender ?></p>
            <p>Hobby: <?php echo $hobby ?></p>
            <p>Age: <?php echo $age ?></p>
            <p>Address: <?php echo $address ?></p>

        </section>
        
    </div>
</body>

</html>
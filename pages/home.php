<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class-assesment</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
<div class="home-bg">
        <header class="container">
            <div class="row">
                <nav class="navbar navbar-expand-sm">
                    <a href="" class="navbar-brands">
                        <img src="assets/img/logo.png" alt="" width="50px" height="50px">
                    </a>
                    <ul class="navbar-nav ms-auto">

                  
                    <?php 
                    $menus = $menu->menu();
                    foreach($menus as $item)
                    {
                        echo "<li class =\nav-item active\">
                        <a class=\"nav-link\" href=\"#\">{$item[0]} </a></li>";
                    }

                    ?>
                       
               
                                
                    </ul>
                </nav>
            </div>
        </header>
        

    
        
    
    
    
</body>
</html>
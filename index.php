<?php
    $result = "";

    if(isset($_POST['f_num'])){
        $f_num = $_POST['f_num'];
        $s_num = $_POST['s_num'];
        $operator = $_POST['operator'];
        $result = "";


        if($f_num && $s_num){
            switch ($operator){
                case '+':
                    $result = $f_num+$s_num;
                    break;
                case '-':
                    $result = $f_num-$s_num;
                    break;
                case '*':
                    $result = $f_num*$s_num;
                    break;
                case '/':
                    $result = $f_num/$s_num;
                    break;
                case '%':
                    $result = $f_num%$s_num;
                }
        }else {
            $result = "First Number and Second Number Can't Not Found";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator Projects--</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

</head>

<body>

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-header">
                    <h1>
                        Basic Calculator with PHP
                    </h1>
                </div>
                <div class="card">
                        <div class="card-body">
                            <h6 class=""> Result IS:  
                                <?php 
                                    if ($result == "") {
                                        echo "Not Calculated Yet!";
                                    } else {
                                        echo $result;
                                    }
                                ?>
                            </h6>
                            <form action="" method="post">
                                <div class="form-outline mb-3">
                                    <input type="number" id="typeNumber" name="f_num" class="form-control" />
                                    <label class="form-label" for="typeNumber">Number input</label>
                                </div>
                                <div class="form-outline mb-3">
                                    <input type="number" id="typeNumber2" name="s_num" class="form-control" />
                                    <label class="form-label" for="typeNumber2">Number input</label>
                                </div>
                                <select class="select" name="operator" id="">
                                    <option value="">----Choise----</option>
                                    <option value="+"> + </option>
                                    <option value="-">-</option>
                                    <option value="/">/</option>
                                    <option value="*">*</option>
                                    <option value="%">%</option>
                                </select>
                                <div class="card-footer text-muted">
                                    <input type="submit" class="btn btn-primary" class="btn btn-primary"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js">
        </script>
</body>

</html>
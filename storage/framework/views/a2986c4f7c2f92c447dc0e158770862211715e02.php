<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #dad9d9;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .serch{
                 margin-top: 40px;
            }
                
            input[type=text] {
                 width: 100%;
                 padding: 12px 20px;
                 margin: 8px 0;
                 box-sizing: border-box;
                 border: none;
                 background-color: white;
                 height: 60px;
                 font-size: 20px;
                 padding: 20px;

            
 
            }
            .user
            {
                background-color: #ffffff;
                margin-top:5px;
                margin-bottom: 20px;
                 padding: 20px;
                 border-radius: 5px;
            }
            .h{
                
                margin-top: 1px;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
         <div class="row">
             <div class="col-md-12 serch">
                 <h2><strong>Search</strong></h2>
                 <span style="font-weight:bold;"><input id="myInput" type="text" class="form-control" placeholder="Search name / designation / department"></span>
            </div>  
        </div>
        </div>
        <div class="container">
         <div class="row" id="myTable">
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="col-md-6">
             <div class=" user " >
                 <h1><strong><?php echo e($row->name); ?></strong></h1>
                 <h3 class="h"><strong><?php echo e($row->des_name); ?></strong></h3>
                 <h3 class="h"><strong><?php echo e($row->dip_name); ?></strong></h3>
            </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
        </div>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\cyberpark\park\resources\views/welcome.blade.php ENDPATH**/ ?>
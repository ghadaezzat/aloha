<html>
<head>
<?php include_once 'header.php';?>
<?php include_once 'price.php';?>
</head>
<body>
<div class="container">
    <div class="row">


        <div class="col-lg-12" >
            
            
            <div class="col-lg-8 offset-lg-2">
                            </div>
            <div class="col-lg-6 offset-lg-3 col-md-12 offset-md-0 img-rounded inner-bg">
                
  
                <div class="col-lg-12">
                    <h1 class="pacif">
                    &Rrightarrow; Pricing Calculator! <br />

                    <small class="sans" style="font-size: 17px;">
                        Meeting rooms provided by Aloha <br /> Call us now #: 0102 884 2799                     </small>
                </h1>
                    <br />
                    
                    <form action="calculator.php" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="3771f5ccd9ec2d8cb55a0e3601b77eaf" style="display:none;" />
                        <div class="form-group">
                            <label for="persons">Number of persons:</label>
                            <input type="number" name="persons" id="persons" value="<?php echo $persons;?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="hours">Number of hours:</label>
                            <input type="number" name="hours" id="hours" value="<?php echo $hours;?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Go!</button>
                        </div>
                        
                        </form>
                    <p class="text-justify">
                    <h5>Facilities included in price: </h5>
                        <i class="fa fa-check"></i> Air-conditioned
                        <i class="fa fa-check"></i> Projector
                        <i class="fa fa-check"></i> White-Board
                        <i class="fa fa-check"></i> Wheel chairs
                        <i class="fa fa-check"></i> Tables
                        <i class="fa fa-check"></i> Wi-Fi
                        
                    </p>
                
                  
                </div>
                
                <div class="col-lg-12">
                   <h4>Price:<?php echo $persons*$hours*12.5;?></h4>
                   <h4> Persons:<?php echo $persons;?></h4>
                   <h4> Hours:<?php echo $hours; ?></h4>
                   <h4> Hourly rate:<?php echo $person_rate;?></h4>                       
                    <p class="text-center">
                        <a href="index.php"><< Back to main site.</a>
                    </p>
                </div>
                
                

              
            </div>




        </div>

    </div>
</div>        <!-- INNER -->




      <script src="assets/js/jquery-3.3.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/style.js"></script>
                    </body>
                    </html>
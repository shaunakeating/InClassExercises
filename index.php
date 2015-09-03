<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap PHP Page</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      


  
    
        <div class="container">
              <h1>Hello, world!</h1>
          <div class="row">
            
            <div class="col-sm-4">
            <a href="google.com" target="_blank" class="btn btn-danger inline"><i class="glyphicon glyphicon-arrow-right"></i> Go</a>
            <a href="google.com" target="_blank" class="btn btn-success inline"><i class="glyphicon glyphicon-arrow-right"></i> Go  <span class="badge">6</span></a>
           </div>
           
           <div class="col-sm-8">
             <div class="progress">
              <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
          </div>
           
          </div>
        </div>
        
            <div class="container">    

</div>


<!-- SCRIPT CITY -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(".progress-bar").animate({width:"75%"}, 2000)
    </script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
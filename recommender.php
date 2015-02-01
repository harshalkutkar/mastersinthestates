<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Masters in The States</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Jquery UI CSS -->
    <link href="js/jquery-ui/jquery-ui.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Jquery  form -->
    <script src="js/jquery-form.js"></script>
</head>

<body id="page-top" class="index">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" style="background: #000">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">MastersInTheStates</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">Team</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">

    </div>
</header>

<section id="recommender">

    <div class="container">
    <form id="jsonForm" method="post" action="getRecommendation.php">
        <table width="100%" border="0" cellpadding="3" cellspacing="3">
  <tr>
  
    <td width="28%">GRE Quant Score
    </td>
    <td width="13%"><input type="text" id="gre_q" name="gre_q" readonly style="border:0; color:#f6931f; font-weight:bold;"/></td>
    <td width="59%">
      
  	  
      <div id="slider-range-max"></div>
  </td>
  </tr>
    <tr>
  
    <td width="28%">GRE Verbal Score
    </td>
    <td width="13%"><input type="text" id="gre_v" name="gre_v" readonly style="border:0; color:#f6931f; font-weight:bold;"/></td>
    <td width="59%">
      
  	  
      <div id="slider2"></div>
  </td>
  </tr>
  <tr>
  
    <td width="28%">GRE Analytical Score
    </td>
    <td width="13%"><input type="text" id="gre_a"  name="gre_a"  readonly style="border:0; color:#f6931f; font-weight:bold;"/></td>
    <td width="59%">
      
  	  
      <div id="slider3"></div>
  </td>
  </tr>
  <tr>
  
   <tr>
  
    <td width="28%">TOEFL Score
    </td>
    <td width="13%"><input type="text" id="toefl" name="toefl" readonly style="border:0; color:#f6931f; font-weight:bold;"/></td>
    <td width="59%">
      
  	  
      <div id="slider4"></div>
  </td>
  </tr>
  <tr>
  
  <tr>
  
    <td width="28%">GPA (Scale of 4.0)
    </td>
    <td width="13%"><input type="text" id="gpa" name="gpa" readonly style="border:0; color:#f6931f; font-weight:bold;"/></td>
    <td width="59%">
      
  	  
      <div id="slider5"></div>
  </td>
  </tr>
  <tr>
  
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Discipline</td>
    <td>&nbsp;</td>
    <td><label for="discipline"></label>
      <select name="discipline" id="discipline">
        <option value="comp">Computer Science</option>
        <option value="it">Information Technology</option>
        <option value="etc">Electronics &amp; Telecommunication</option>
        <option value="mech">Mechanical Engineering</option>
      </select></td>
  </tr>
  <tr>
    <td><input type="submit" name="submit" id="submit" value="Submit"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
      </table>
  </form>
    </div>
    <div id="ajaxLoader" class="container">
    
    	<img src="img/ajax.GIF" width="43" height="43">
    Fetching Results...</div>
    <div id="results" class="container">
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Harsh Alkutkar 2014</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- jQueryui -->
<script src="js/jquery-ui/jquery-ui.js"></script>



<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

<!-- Slider Jquery -->
<!-- Slider Script -->
<script type="text/javascript">
    $(function() {
        $( "#slider-range-max" ).slider({
            range: "max",
            min: 130,
            max: 170,
            value: 150,
            slide: function( event, ui ) {
                $( "#gre_q" ).val( ui.value );
            }
        });
        $( "#gre_q" ).val( $( "#slider-range-max" ).slider( "value" ) );

	

        $( "#slider2" ).slider({
            range: "max",
            min: 130,
            max: 170,
            value: 150,
            slide: function( event, ui ) {
                $( "#gre_v" ).val( ui.value );
            }
        });
        $( "#gre_v" ).val( $( "#slider2" ).slider( "value" ) );
		
		
		$(function() {
   			 var valMap = [1.0, 1.5, 2, 2.5, 3.0, 3.5, 4.0, 4.5, 5.0, 5.5, 6.0];
   			 $("#slider3").slider({
				min: 0,
				max: valMap.length - 1,
				value: 3,
				slide: function(event, ui) {                        
					$("#gre_a").val(valMap[ui.value]);                
        }       
    });
            $( "#gre_a" ).val( $( "#slider3" ).slider( "value" ) );
    //$("#amount").val(valMap[ui.value]);
	
	
        $( "#slider4" ).slider({
            range: "max",
            min: 0,
            max: 120,
            value: 110,
            slide: function( event, ui ) {
                $( "#toefl" ).val( ui.value );
            }
        });
        $( "#toefl" ).val( $( "#slider4" ).slider( "value" ) );
		
		 $( "#slider5" ).slider({
            range: "max",
            min: 2.0,
			step: 0.1,
            max: 4.0,
            value: 3.5,
            slide: function( event, ui ) {
                $( "#gpa" ).val( ui.value );
            }
        });
        $( "#gpa" ).val( $( "#slider5" ).slider( "value" ) );
		
		<!-- Jquery form -->
		$( "#ajaxLoader" ).hide();
		// bind form using ajaxForm 
			$('#jsonForm').ajaxForm({ 
				// dataType identifies the expected content type of the server response 
				dataType:  'json', 
		 
				// success identifies the function to invoke when the server response 
				// has been received 
				beforeSubmit:  showRequest,  // pre-submit callback 
				success:   processJson 
			}); 
			function processJson(data) { 
					$( "#ajaxLoader" ).hide();
					// 'data' is the json object returned from the server 
					$( "#results" ).append("<ul>");
                    for(var i=0;i<data.length;i++)
                    {
                        $( "#results" ).append("<li>"+data[i]+"</li>");
						console.log(data[i]);

                    }
			}
			function showRequest(data)
			{
				$( "#ajaxLoader" ).show();
			}
	
		
})
    });
	
	
	
			
	
</script>


</body>

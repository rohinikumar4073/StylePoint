

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Shopping World</title>

   <!--CSS -->
		<link href="./css/shopping.css" rel="stylesheet" type="text/css">
		<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- JavaScript -->
	<!-- Todo: Move this scripts to end of the file so that we can increase the performance -->
   		<script type="text/javascript" src="./JS/jquery.js"></script>
    	<script type="text/javascript" src="./JS/jquery.paulund_modal_box.js"></script>

    <!-- Customised functions -->
    <script>
        $(document).ready(function () {

            window.localStorage.setItem("Gender", "male");
            $("#gend").click(function () {
                var className = $("#gend").attr('class');

                if (className == "male") {

                    $("#gend").attr('class', 'female');
                    window.localStorage.setItem("Gender", "female");

                } else {
                    $("#gend").attr('class', 'male');
                    window.localStorage.setItem("Gender", "male");
                }
            });


        });


	     function Validate()
	       {
	          var e = document.getElementById("ddlView");
	          var strUser = e.options[e.selectedIndex].value;
	          var strUser1 = e.options[e.selectedIndex].text;

	          window.localStorage.setItem("ocassion", strUser1);

	          if(strUser!=0)
	            {
	        	  var gender = window.localStorage.getItem("Gender");
	        	  if(gender=="male"){
	        		if(strUser!=3 &&  strUser!=2 ) {
		           		  return false;

	        		}

	        	  }else{

	        		  if(strUser!=1 &&  strUser!=2 ) {
		           		  return false;

		        		}

	        	  }

	           	    window.location.href = "showMan.php?gender="+gender+"&selection="+strUser;
	           		  return false;

	            }
	          else{
	            $('.paulund_modal').paulund_modal_box();
	          }
	       }
    </script>
  </head>
  <!-- End of Head -->

<body class="shopping_firstpage">
 <div class="main_title">
   <header><img src="images/Page_Title.png" width="250" height="51"></header>
     </div>
	  <div class="main_div">
	    <div class="containerhome">
	    <?php
		$con=mysqli_connect("localhost:3306","root","vasitha","stylepoint");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

$result = mysqli_query($con,"Select Name from occassions");
$x=1;
  ?>


	      <form class="form-signin">
	        <ul>
	          <li class="clothes-select">
	            <label>Clothes for Ocassion :</label>
	              <span class="input selectParent">
	                <select name="occasion" id="ddlView">
	              	  <option value="0" > Select </option>
	              	  <?php
					  while($row = mysqli_fetch_array($result))
					    {

  ?><option value=<?php echo $x;    $x=$x+1; ?>><?php echo $row[0];?></option>
	                <?php
					  }
?></select><?php
					mysqli_close($con);
		?>
	              </span>
	          </li>

	          <li class="gen">
	            <label>Gender :</label>
	  			<div class="gender">
				  <span class="male" id="gend"> </span>
			    </div>
			  </li>

	          <li>
	            <div class="submit paulund_modal">
	              <input class="btn btn-lg btn-primary btn-block " type="button" onclick="Validate()" value="Start" />
	            </div>
	          </li>
	        </ul>
	      </form>
	    </div>
	    <!-- /container -->
      </div> <!-- /main-div -->

	<footer>
	  Copyright © 2013 Infosys Limited
	</footer>

  <!-- End of Body -->

</body>
</html>
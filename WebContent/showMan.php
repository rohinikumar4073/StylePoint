<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Style Point</title>
<link rel="Stylesheet" type="text/css" href="css/jpicker-1.1.6.min.css" />
<link rel="Stylesheet" type="text/css" href="css/jPicker.css" />
<link href="./css/shopping.css" rel="stylesheet" type="text/css">
<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./JS/jquery.js"></script>
<script type="text/javascript" src="./JS/Raphel.js"></script>
<script src="./JS/jpicker-1.1.6.js" type="text/javascript"></script>
<script src="./JS/men_formal.js"></script>
<script>

$( document ).ready(function(){
$("#done").click(function(){

	  $( ".Multiple" ).each(function( index ) {

var color=$(this).val();
color="#".concat(color);
var idattr=$(this).attr("id");
idattr=".".concat(idattr);
$(idattr).attr("fill",color);
});



	});



			$('.Multiple').jPicker();




});



</script>
</head>

<body  class="shopping_secondpage">
<div class="parent_div">
<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="sticky container">
    <div class="navbar-header"> <a href="./shopping.php"> <img style="float:left" width="250" height="51" src="images/Logo2.png"></a> <span class="navbar-brand">Occassion :</span>
      <label style="font-size: 14pt;font-family: arial;padding-left: 120px;font-weight: normal;" id="lblocassion" class="navbar-brand">Informal</label>
      <span class="navbar-brand price">Price: $</span>
      <span id="price" class="navbar-brand price" style="
    padding-left: 80px;
">100</span></div>
  </div>
  <!-- /.container -->
</div>
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" align="left">
  <div class="well sidebar-nav">
    <div class="user-select">
      <label class="lab">Customize</label>
    </div>
     <div id="male">
         <div class="manshirt">
      <label  id="lab">Top</label>
      <ul>
        <li class="shirtmanclass">
          <input  id="shirtman" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Shirt </span> </li>
        <li class="innershirtmanclass">
          <input  id="innershirtman" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Inner shirt</span> </li>
        <li class="tiemanclass">
          <input  id="tieman" style="display:none"class="Multiple" type="text" value="ffffff" />
          Tie </li>
        <li class="buttonmanclass">
          <input  id="buttonman" style="display:none"class="Multiple" type="text" value="ffffff" />
          Buttons </li>
      </ul>
    </div>
    <div class="pantsman">
      <label  id="lab">Bottom</label>
      <ul>
        <li class="trousersmanclass">
          <input  id="trousersman" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Color</span> </li>
        <li class="beltmanclass">
          <input  id="beltman" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Belt</span> </li>
        <li  class="bucklemanclass">
          <input  id="buckleman" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Buckle</span> </li>
      </ul>
    </div>
    <div class="shoesman" >
      <label  id="lab">Shoes</label>
      <ul>
        <li  class="shoesmanclass">
          <input  id="shoesman" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Color</span> </li>
      </ul>
    </div>
     </div>


  <!--/.well -->



<div id="female" style="    position: relative;
    left: -30px;display:none" >
         <div class="ladiesshirt">
      <label   id="lab">Top</label>
      <ul>
        <li class="shirtladiesclass">
          <input  id="shirtladies" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span> Shirt </span> </li>
        <li class="jacketladiesclass">
          <input  id="jacketladies" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Jacket </span> </li>
        <li class="innerladiesclass">
          <input  id="innershirtladies" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Teashirt</span> </li>
        <li  class="tieladiesclass">
          <input  id="tieladies" style="display:none"class="Multiple" type="text" value="ffffff" />
          Tie </li>
        <li class="buttonladiesclass">
          <input  id="buttonladies" style="display:none"class="Multiple" type="text" value="ffffff" />
          Buttons </li>
      </ul>
    </div>
     <div class="pantsladies">
      <label   id="lab">Bottom</label>
      <ul>
        <li class="trousersladiesclass">
          <input  id="trousersladies" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Color</span> </li>

        <li class="beltladiesclass">
          <input  id="beltladies" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Belt</span> </li>
        <li class="buckleladiesclass">
          <input  id="buckleladies" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Buckle</span> </li>
      </ul>
    </div>
    <div class="shoesladies" >
      <label   id="lab">Shoes</label>
      <ul>
        <li class="shoesladiesclass">
          <input  id="shoesladies" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Color</span> </li>
          <li class="shoestyleladiesclass">
          <input  id="shoestyleladies" style="display:none"class="Multiple" type="text" value="ffffff" />
          <span>Extras</span> </li>
      </ul>
    </div>
</div>
</div>
   <div class="cartbutton">
      <input class="btn btn-lg btn-primary btn-block " type="button" id="done"value="Done">
      <?php

	  $gender= $_REQUEST['gender'];
	  $selection= $_REQUEST['selection'];



?>
    </div>
  </div>
<!--  <div class="main_title">
	   <header><img src="./images/Page_Title.png" width="250" height="51"></header>
	 </div>
	  -->
`
<div class="main_div_2">
  <div id="rsr" style="fill:#f00"></div>
</div>

<script>
<?php
		$con=mysqli_connect("localhost:3306","root","vasitha","stylepoint");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		  $query= "Select code ,price from apparal where gender='".$gender."' and ocassion=".$selection;
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
?>
var price=<?php echo $row[1] ?>;
$("#price").html(price);

<?php
if(strcmp($gender,'male')==0 && $selection==3){

?>

function renderMenFormal() {
<?php  echo $row[0];
mysqli_close($con);
?>
    path3004.node.setAttribute("class", "shirtman");
    path3010.node.setAttribute("class", "buttonman");
    path3780.node.setAttribute("class", "buttonman");
    path3782.node.setAttribute("class", "hand-border");
    path3784.node.setAttribute("class", "shirtman");
    path3786.node.setAttribute("class", "innershirtman");
    path3788.node.setAttribute("class", "tieman");
    path3790.node.setAttribute("class", "shirtman");
    path3792.node.setAttribute("class", "shirtman");
    path3794.node.setAttribute("class", "shirtman");
    path3796.node.setAttribute("class", "buttonman");
    path3798.node.setAttribute("class", "handsman");
    path3800.node.setAttribute("class", "handsman");
    path3802.node.setAttribute("class", "trousersman");
    path3804.node.setAttribute("class", "buckleman");
    path3806.node.setAttribute("class", "beltman");
    path3808.node.setAttribute("class", "shoesman");
    path3810.node.setAttribute("class", "shoesman");
    path3812.node.setAttribute("class", "faceman");
    path3814.node.setAttribute("class", "neckman");
    $("svg").css("left","100px");

}
<?php  }else if(strcmp($gender,'male')==0 && $selection==2){?>

function renderMeninformal()
{

<?php  echo $row[0];
mysqli_close($con);
?>



$("svg").css("top","200px");
$("svg").css("left","300px");
$(".innershirtmanclass").css("display","none");
$(".beltmanclass").css("display","none");
$(".tiemanclass").css("display","none");
$(".buttonmanclass").css("display","none");
$(".bucklemanclass").css("display","none");


}
<?php } else if(strcmp($gender,'female')==0 && $selection==1){?>


function renderFemaleFormal(){

<?php  echo $row[0];
mysqli_close($con);
?>



var rsrGroups = [];
$("svg").css("top","200px");
$("svg").css("left","200px");
$("#male").hide();
$("#female").show();
$(".jacketladiesclass").css("display","none");
$(".innerladiesclass").css("display","none");
$(".tieladiesclass").css("display","none");
$(".buttonladiesclass").css("display","none");

}
<?php } else if(strcmp($gender,'female')==0 && $selection==2){?>
function renderFemaleInFormal()
{

<?php  echo $row[0];
mysqli_close($con);
?>

var rsrGroups = [];
$("svg").css("top","200px");
$("svg").css("left","200px");
$("#male").hide();
$("#female").show();
$(".tieladiesclass").css("display","none");
$(".buttonladiesclass").css("display","none");
$(".shirtladiesclass").css("display","none");
$(".beltladiesclass").css("display","none");
$(".buckleladiesclass").css("display","none");
$(".shoestyleladiesclass").css("display","none");




	 }
<?php }


?>
	 var stringValue = window.localStorage.getItem("ocassion");
	 var ocassionvaalue = document.getElementById("lblocassion");
	 ocassionvaalue.innerHTML = stringValue;
	 var gender = window.localStorage.getItem("Gender");
	 if (gender == "male" && stringValue == "Party wear") {
	     renderMenFormal();
	 }

	 else if (gender == "male" && stringValue == "Informal")
	 {
	     renderMeninformal();
	 } else if (gender == "female" && stringValue == "Informal")
	 {
		 renderFemaleInFormal();
	 }else if (gender == "female" && stringValue == "Formal")
	 {
		 renderFemaleFormal();
	 }else if (gender == "female" && stringValue == "Party wear")
	 {
		 renderFemalePartywear();
}
</script>
</body>
</html>
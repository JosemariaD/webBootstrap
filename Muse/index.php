<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="jquery-1.11.1.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.js" language="javascript"></script>
<style type="text/css">
@font-face {
    font-family: 'Imprima-Regular';
    src:url(fonts/Imprima-Regular.ttf) format('truetype');
}
@font-face {
	font-family: 'Audiowide-Regular';
    src:url(fonts/Audiowide-Regular.ttf) format('truetype');
}
.menu
{
	float:right;
}
.menu ul
{
	list-style-type:none;
	display: -webkit-flex;
   display: flex;
   -webkit-flex-direction:row;
   flex-direction:row;
}
.menu ul li
{
	float:left;
	//width:auto;
	height:90px;
	//padding:28px 20px;
	margin:0px;
	font-family:'Audiowide-Regular';
	font-size:14px;
	//text-align:center;
}
.menu ul li a
{
	color:#fff;
	text-align:center;
	padding:1.6em 1em;
	text-decoration:none;
	vertical-align:middle;
	position:relative;
	display:block;
	line-height:1.8285734;
	-moz-box-sizing:border-box;
	font-size:1.1em;
	background-color:transparent;
	//background:#FF80C0;
	
}
.menu ul li a:focus
{
	outline:thin dotted;
}
.menu ul li:hover
{
	outline:0;
	animation:menu 15s ease-in-out;
	animation-iteration-count: infinite;
	-webkit-animation:menu 15s 1s ease-in-out;
	-webkit-animation-iteration-count: infinite;

}
.mid
{
	width:360px;
	float:left;
	margin-right:20px;
	box-sizing:border-box;
}
.team
{
	float:left;
	width:550px;
	height:auto;
	background-color:#fff;
	box-sizing:border-box;
	padding:15px;
	margin-top:20px;
}
.team-left
{
	margin-left:30px;
}
.team img
{
	float:left;
	margin-right:10px;
	margin-bottom:130px;
}
.team p
{
	font-family:'Imprima-Regular';
	line-height:2em;
	font-size:16px;
}
.team a
{
	font-size:18px;
	text-decoration:none;
	color:#000;
}
.team a:hover
{
	color:#00CACA;
}
.team h3
{
	font-family:'Audiowide-Regular';
	color:#00CACA;
}
.footer
{
	margin:auto;
	width:550px;
	padding:20px;
	box-sizing:border-box;
	text-align:center;
}
.footer ul
{
	list-style-type:none;
	margin-bottom:20px;
}
.footer ul li
{
	float:left;
	margin-left:40px;
}
.footer ul li a
{
	color:#fff;
	text-decoration:none;
	font-family:'Audiowide-Regular';
	font-size:17px;
}
.footer ul li a:hover
{
	color:#000;
}
.footer h1
{
	margin-bottom:30px;
	color:#fff;
	font-family:'Audiowide-Regular';
}
.footer p
{
	color:#fff;
	margin-top:30px; 
	font-size:15px;
}
@keyframes menu
{
	0%{background-color:#FF0080;}
	25%{background-color:#0F9;}
	50%{background-color:#F0F;}
	100%{background-color:#03F;}
}

@-webkit-keyframes menu
{
	0%{background-color:#FF0080;}
	25%{background-color:#0F9;}
	50%{background-color:#F0F;}
	100%{background-color:#03F;}
}
.rowio
{
	background: url(images/bac.png);
	width:auto;
	height:auto;
	float:right;
	margin-top:400px;
}
.audio
{
	padding:7px;
	font-size:19px;
	box-sizing:border-box;
	width:100%; 
	background-color:#00DFDF; 
	color:#fff; 
	font-family:'Audiowide-Regular'
}
.audio:hover
{
	color:#00DFDF;
	background-color:#fff;
}
@media only screen and (max-width: 1200px){
.title h1 a
{
	font-size:45px
}
.team
{
	
	width:450px;
	padding:10px;
}
	.mid
{
	width:270px;
	margin-right:25px;
	box-sizing:border-box;
}
}
@media only screen and (max-width: 990px){
.team
{
	width:300px;
	padding:5px;
}
.mid
{
	width:200px;
	margin-right:20px;
}
.rowio
{
	margin-top:44%;
}	
.col
{
	height:auto
}	
}
@media only screen and (max-width: 850px){
.title h1 a
{
	font-size:35px
}
.team
{
	display:block;
	width:100%;
	padding:10px;
	margin:10px 0px;
}
.team-left
{
	margin:10px 0px;
}
}
@media only screen and (max-width: 750px){
.title h1 a
{
	font-size:35px
}
.team
{
	display:block;
	width:100%;
	padding:10px;
	margin:10px 0px;
}
.team-left
{
	margin:10px 0px;
}
.menu ul li a
{
	padding:1em 0.5;
	line-height:1;
	font-size:1em;	
}
.menu ul li
{
}
.mid
{
	display:block;
	width:100%;
	margin:5px;
}
.mid img
{
	width:100%;
}
.rowio
{
	margin-top:50%;
}	
.col
{
	height:auto
}	
}

@media only screen and (max-width: 600px){
.team
{
	display:block;
	width:100%;
	padding:10px;
	margin:10px 0px;
}
.team-left
{
	margin:10px 0px;
}
/*.menu ul li a
{
	padding:0.5em 0.5em;
	line-height:1;
	font-size:1em;	
}*/
.mid img
{
	width:100%;
}
.mid
{
	display:block;
	width:100%;
	margin:5px;
	
}
.rowio
{
	margin-top:60%;
}	
.col
{
	height:auto
}	
}
@media only screen and (max-width: 500px){
.title
{
	margin-bottom:30px;
}
.rowio
{
	margin-top:80%;
}	
.col
{
	height:auto
}	
</style>

</head>

<body>
    <div class="container-fluid col" style="background-image:url(images/back.jpg); height:800px; background-size:cover;">
        <div class="container" style="height:100px;">
        	<div class="col-sm-5 col-xs-6 title">
                <h1 style="font-size:55px; color:#fff; font-family: 'Audiowide-Regular';">
                		<a href="index.php" style="color:#fff; text-decoration:none;">Music Club</a>
                </h1>
                
            </div>
            <div class="col-sm-7 col-xs-6">
                <div class="menu">
                    <ul>
                    <li style="background-color:#FF0080;"><a href="index.php"> <span class="glyphicon glyphicon-home"></span> <br />Home</a></li>
                        <li style="background-color:#11C2D7;"><a href="album.php"><span class="glyphicon glyphicon-picture"></span> <br />Album</a></li>
                        <li style="background-color:#D9D900;"><a href="blog.php"><span class="glyphicon glyphicon-tag"></span> <br />Blog</a></li>
                        <li style="background-color:#782C69;"><a href="event.php"><span class="glyphicon glyphicon-calendar"></span> <br />Event</a></li>
                        <li style="background-color:#FCAD1B;"><a href="mail.php"><span class="glyphicon glyphicon-envelope"></span> <br />Mail</a></li>
                    </ul>
                </div>
            </div>
            <div class="rowio">
            <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/1.png" alt="1" title="1" id="wows1_0"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/2.png" alt="http://wowslider.com/" title="2" id="wows1_1"/></a></li>
		<li><img src="data1/images/3.png" alt="3" title="3" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="1"><span><img src="data1/tooltips/1.png" alt="1"/>1</span></a>
		<a href="#" title="2"><span><img src="data1/tooltips/2.png" alt="2"/>2</span></a>
		<a href="#" title="3"><span><img src="data1/tooltips/3.png" alt="3"/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">wowslider.net</a> by WOWSlider.com v8.6</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
            </div>
        </div>
    </div>
    <div class="container-fluid content" style="background-color:#000; height:auto;">
    	<div class="container">
    	<div class="row" style="margin-top:50px;">
        	<div class="col-sm-7">
            <h2 style="color:#00D5D5;font-family: 'Audiowide-Regular';">Welcome</h2>
            <p style="line-height:1.6em; color:#fff; font-family:'Imprima-Regular'; font-size:16px; padding-top:10px;">
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text , and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to
            </p>
            </div>
            <div class="col-sm-5" style="color:#fff;font-size:34px; vertical-align:middle; text-align:center">
            	<div class="row" >
                	<div class="col-lg-6" style="background-color:#00D5D5; padding:40px;">
                    		<img src="images/ic.png" alt="" >
                       
                     </div>
                    <div class="col-lg-6" style="background-color:#00B9B9; padding:40px;">
                    	<img src="images/ic1.png" alt="" >
                    </div>
                </div>
                <div class="row">
                	<div class="col-lg-6" style="padding:40px; background:#6CFFFF;">
                    <img src="images/ic2.png" alt="" >
                    </div>
                    <div class="col-lg-6" style="background-color:#009797; padding:40px;">
                    <img src="images/ic3.png" alt="" >
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin:auto; margin-top:30px; margin-bottom:70px;">
        	<div class="mid">
            	<a href="#" style="text-decoration:none;"><img src="images/1.jpg" class="img-responsive" alt="" />
                <div class="audio">
                My Album <span class="glyphicon glyphicon-circle-arrow-right" style="float:right; margin-top:5px;"></span>
                </div>
                </a>
            </div>
            <div class="mid">
            <a href="#" style="text-decoration:none;"><img src="images/2.jpg" class="img-responsive" alt="" />
            <div class="audio">
                My Album <span class="glyphicon glyphicon-circle-arrow-right" style="float:right; margin-top:5px;"></span>
             </div>
            </a>
            </div>
            <div class="mid">
            <a href="#" style="text-decoration:none;"><img src="images/4.jpg" class="img-responsive" alt="" />
            <div class="audio">
                My Album <span class="glyphicon glyphicon-circle-arrow-right" style="float:right; margin-top:5px;"></span>
                </div>
            </a>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid" style="background-image:url(images/back1.jpg); height:auto; background-size:cover; background-position:left;">
    	<div class="container" style="margin-bottom:60px;">
        <h1 style="color:#fff; font-family:'Audiowide-Regular'; margin-top:50px;"> Team</h1>	
   	    <div class="team">
            	
                <img src="images/te.jpg" alt="te" width="80" class="img-responsive img-circle " />
                <h3> It is a long established fact that </h3>
                	<p class="text-muted">
                    	Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse
                      <p>
                     <a href="#"> <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
                      </p>
                    </p>
               
        </div>
        <div class="team team-left">
            	
                		<img src="images/te1.jpg" alt="te" width="80" class="img-circle img-responsive " />
                	 <h3> It is a long established fact that </h3>
                	<p class="text-muted">
                    	Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse.
                        <p>
                      <a href="#"><span class="glyphicon glyphicon-circle-arrow-right"></span></a>
                      </p>
                    </p>
             </div>
            <div class="clearfix"></div>
            <div class="team">
            	 <img src="images/te2.jpg" alt="te" width="80" class="img-responsive img-circle " />
                <h3> It is a long established fact that </h3>
                	<p class="text-muted">
                    	Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse
                      <p>
                     <a href="#"> <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
                      </p>
                    </p>
            </div>
            <div class="team team-left">
            	 <img src="images/te3.jpg" alt="te" width="80" class="img-responsive img-circle " />
                <h3> It is a long established fact that </h3>
                	<p class="text-muted">
                    	Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse
                      <p>
                     <a href="#"> <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
                      </p>
                    </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container-fluid" style="height:auto; padding-bottom:40px; padding-top:60px; background-color:#000">
    	<div class="container">
        	<div class="row">
            		<div class="col-sm-6">
                    	<h2 style="font-family:'Audiowide-Regular'; color:#009F9F; margin:0px;">
                        	Kasertas lertyasea deeraeser
                        </h2>
                        <p style="line-height:2em; color:#fff; font-size:14px; font-family:'Imprima-Regular'; margin-top:18px;">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                        </p>
                    </div>
                    <div class="col-sm-6">
                    <img src="images/3.jpg" class="img-responsive" />
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="height:230px; background-color:#00CACA">
    	<div class="footer">
        	<h1>
            Music Club
            </h1>
            
            <ul>
            	<li style="margin-left:5px;"><a href="#">Home</a></li>
                <li><a href="#">Album</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Mail</a></li>
            </ul>
            <div class="clearfix"></div>
            <p>
           &copy; 2017 Music Club All rights reserved | Design by <a href="#">W3layouts</a>
            </p>
            
        </div>
    </div>
    
</body>
</html>
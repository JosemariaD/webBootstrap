<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
<style type="text/css">
.minor
{
	background:#0F0;
	width:200px;
	height:200px;
	padding:10px;
	position:relative;
	-webkit-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
	animation-direction:alternate;
	animation-name:minor;
	animation-duration:4s;
	-o-animation-iteration-count: infinite;
	-webkit-animation-name:minor;
	-webkit-animation-duration:4s;
	-o-animation-name:minor;
	-o-animation-duration:4s;
	-webkit-animation-direction:alternate;
}
@keyframes minor{
	0%   {background-color: red; left:0px; top:0px;}
    25%  {background-color: yellow; left:200px; top:0px;}
    50%  {background-color: blue; left:200px; top:200px;}
    75%  {background-color: green; left:0px; top:200px;}
    100% {background-color: red; left:0px; top:0px;}
}
@-webkit-keyframes minor{
	0%   {background-color: red; left:0px; top:0px;}
    25%  {background-color: yellow; left:200px; top:0px;}
    50%  {background-color: blue; left:200px; top:200px;}
    75%  {background-color: green; left:0px; top:200px;}
    100% {background-color: red; left:0px; top:0px;}
}
body{
	//direction:rtl;
}
.flex-container {
   display: -webkit-flex;
   display: flex;
    width: 400px;
    height: 250px;
    background-color: lightgrey;
	box-sizing:border-box;
	padding:10px
}

.flex-item {
    background-color: cornflowerblue;
    width: 100px;
    height: 100px;
    margin: 10px;
	padding:10px;
	box-sizing:border-box;
}
.first
{
	-webkit-order:-1;
	order:-1;
}

</style>
</head>

<body>
<!--<div class="minor">
Css Animation
</div>-->

<div class="flex-container">
  <div class="flex-item">flex item 1</div>
  <div class="flex-item">flex item 2</div>
  <div class="flex-item">flex item 3</div>  
  <div class="flex-item">flex item 4</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<style type="text/css">
	
*{
	margin:0;
	padding: 0;
	box-sizing: border-box;
}

body{
	
	flex-direction: column;
	
}

footer{
	position: relative;
	width: 100%;
	height: auto;
	padding: 50px 100px;
	background:#111;
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
}

footer .container{
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	flex-direction: row;
}
footer .container .sec{
	margin-right: 30px;
}
footer .container .sec.aboutus{
	width: 40%;


}
footer .container  h2{
	position: relative;
	color: #fff;
	font-weight: 500;
	margin-bottom: 15px;
}
footer .container  h2:before{
	content: '';
	position: absolute;
	bottom: -5px;
	left: 0;
	width: 50px;
	height: 2px;
	background:#f00;
}
footer  p{
	color:#999;
 }
.sci{
	margin-top: 20px;
	display: flex;
}
.sci li{
	list-style: none;
}
.sci li a{
	display: inline-block;
	width: 40px;height: 40px;
	background:#222;
	display: flex;
	justify-content: center;
	align-items: center;
	margin-right: 10px;
	text-decoration: none;
	border-radius: 4px; 
}
.sci li a:hover{
	background:#f00;
}
.sci li a .fa{
	color: white;
	font-size: 20px;	

}
.quickLinks{
	position: relative;
	width: 25%;
}
.quickLinks ul li{
	list-style: none;
}
.quickLinks ul li a {
	color: #999;
	text-decoration: none;
	margin-bottom: 10px;
	display: inline-block; 
}
.quickLinks ul li a:hover{
	color: #fff;
}

.contact{
	width: calc(35%-60px);
	margin-right: 0 !important;
}

.contact .info{
	position: relative;
}
.contact .info li{
	display: flex;
	margin-bottom: 16px;
}
.contact .info li span:nth-child(1){
	color:#fff;
	font-size: 20px;
	margin-right: 10px;
}
.contact .info li span{
	color: #999;
}
.contact .info li  a{
	color: #999;
	text-decoration: none;
}
.contact .info li span:hover{
	color: #fff;
}
.contact .info li  a:hover{
	color: #fff;
}

.copyright{
	width: 100%;
	background:#181818;
	padding: 8px 100px;
	text-align: center;
	color: #999;

}

@media(max-width: 991px){
	footer{
		padding: 40px;
	}
	footer .container{
		flex-direction: column; 
	}
	footer .container .sec{
		margin-right: 0;
		margin-bottom: 40px;
	}
	footer .container .sec .aboutus,.quickLinks,.contact{

	}

	.copyright{
		padding: 8px 40px;
	}
}
</style>
<body>
	<footer>
		<div class="container">
			<div class="sec aboutus">
				<h2>About-us</h2>
				<p> Our web application provides a platform for farmers to sell their product online & it will reduce the role of middlemen who are hindering the trading in the agriculture sector. These e-Market platforms are free of cost and can be accessed from anywhere and made available in understandable language to farmers.</p>
				<ul class="sci">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
			</ul>
			</div>

			<div class="sec quickLinks">
				<h2>Quick Links</h2>
				<ul>
				  <li><a href="User_Home_Page.php">Home </a></li>
		          <li><a href="About-us-user.php">About-us</a></li>
		          <li><a href="User_FAQ.php">FAQ</a></li>
                  <li><a href="#">Privarcy policy</a></li>
			</ul>
				
			</div>
			<div class="sec contact">
				<h2>Contact Info</h2>
				<ul class="info">
					
					<li>
						<span><i class="fa fa-phone" aria-hidden="true"></i></span>
						<p><a href="#">9370934335</a></p> 
					</li>
					<li>
						<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
						<span>support@emarketplace.com</span>
					</li>
				</ul>
			</div>
		
		</div>
	</footer>
	<div class="copyright">
		<p>copyright  <i class="fa fa-copyright" aria-hidden="true"></i> 2021 Vipul belhekar. All Rights Reserved.</p>
	</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>F U S I O N - P A N A C H E</title>
	<link rel="icon" href="./media/logo.png" type="image/gif" sizes="100x100">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
		h1{
			font-family: Satisfy;
			font-size:50px;
			text-align:center;
			color:black;
			padding:1%;
		}
		#gallery{
			-webkit-column-count:4;
			-moz-column-count:4;
			column-count:4;

			-webkit-column-gap:20px;
			-moz-column-gap:20px;
			column-gap:20px;
		}
		@media (max-width:1200px){
			#gallery{
				-webkit-column-count:3;
				-moz-column-count:3;
				column-count:3;

				-webkit-column-gap:20px;
				-moz-column-gap:20px;
				column-gap:20px;
			}
		}
		@media (max-width:800px){
			#gallery{
				-webkit-column-count:2;
				-moz-column-count:2;
				column-count:2;

				-webkit-column-gap:20px;
				-moz-column-gap:20px;
				column-gap:20px;
			}
		}
		@media (max-width:600px){
			#gallery{
				-webkit-column-count:1;
				-moz-column-count:1;
				column-count:1;
			}  
		}
		.card{
			width:100%;
			height:auto;
			margin: 4% auto;
			box-shadow:-3px 5px 15px #000;
			cursor: pointer;
			-webkit-transition: all 0.2s;
			transition: all 0.2s;
		}
		.modal-img,.model-vid{
			width:100%;
			height:auto;
		}
		.modal-body{
			padding:0px;
		}
		img {
			pointer-events: none;
		}
		button {
			margin-left: 40%;
			margin-bottom: 5%;
		}

		.button {
			border-radius: 50px;
			background-color: #C70039;
			border: none;
			color: #FFFFFF;
			text-align: center;
			font-size: 1.5vw;
			padding: 5px;
			width: 8%;
			transition: all 0.5s;
			cursor: pointer;
			margin: 5px;
			margin-left: 46%;
		}

		.button:active {
			outline: none;
		}

		.button span {
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
		}

		.button span:after {
			content: '\00bb';
			position: absolute;
			opacity: 0;
			top: 0;
			right: -20px;
			transition: 0.5s;
		}

		.button:hover span {
			padding-right: 25px;
		}

		.button:hover span:after {
			opacity: 1;
			right: 0;
		}

		footer {
			text-align: center;
			padding-top: 2%;
		}
	</style>
</head>
<body>
	<h1>Panache Gallery</h1><hr>
	<div id="gallery" class="container-fluid">  
		<img src="./entries/image0.jpeg" class="card img-responsive">
		<img src="./entries/image1.jpeg" class="card img-responsive">
		<img src="./entries/image2.jpeg" class="card img-responsive">
		<video class="card vid" controls>
			<source src="http://techslides.com/demos/sample-videos/small.mp4" type="video/mp4">
			</source>
		</video>
		<img src="./entries/image3.jpeg" class="card img-responsive">
		<img src="./entries/image4.jpeg" class="card img-responsive">
		<img src="./entries/image5.jpg" class="card img-responsive">
		<img src="./entries/image6.jpg" class="card img-responsive">
		<img src="./entries/image7.jpeg" class="card img-responsive">
		<img src="./entries/image8.jpg" class="card img-responsive">
		<img src="./entries/image9.jpg" class="card img-responsive">
		<img src="./entries/image10.jpg" class="card img-responsive">
		<img src="./entries/image11.jpg" class="card img-responsive">
		<img src="./entries/image12.jpg" class="card img-responsive">
		<img src="./entries/image13.jpg" class="card img-responsive">
		<img src="./entries/image14.jpg" class="card img-responsive">
		<img src="./entries/image15.jpg" class="card img-responsive">
		<img src="./entries/image16.jpg" class="card img-responsive">
		<img src="./entries/image17.jpg" class="card img-responsive">
		<img src="./entries/image18.jpg" class="card img-responsive">
		<img src="./entries/image19.jpg" class="card img-responsive">
		<img src="./entries/image20.jpg" class="card img-responsive">
		<img src="./entries/image21.jpg" class="card img-responsive">
		<img src="./entries/image22.jpg" class="card img-responsive">
		<img src="./entries/image23.jpg" class="card img-responsive">
		<img src="./entries/image24.jpg" class="card img-responsive">
		<img src="./entries/image25.jpg" class="card img-responsive">
		<img src="./entries/image26.jpg" class="card img-responsive">
		<img src="./entries/image27.jpg" class="card img-responsive">

	</div>

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
				</div>
			</div>

		</div>
	</div>
	<div class="col-xl-12">
		<button class="button" onclick="window.location.href='index.html';"><span>back</span></button>
	</div>
	<footer><p><i class="fa fa-copyright"></i> F U S I O N | All rights reserved | Designed by <a href="https://www.linkedin.com/in/amlana-pattnayak-47604b189/" target="__blank" style="text-decoration: none; color: #141414;">Amlana Pattnayak</a></p>
		<a href="//www.dmca.com/Protection/Status.aspx?ID=af29cd6e-17d4-4ff6-b437-7b44d911a747" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_26_120.png?ID=af29cd6e-17d4-4ff6-b437-7b44d911a747"  alt="DMCA.com Protection Status" style="padding-bottom: 1%;" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("img").click(function(){
					var t = $(this).attr("src");
					$(".modal-body").html("<img src='"+t+"' class='modal-img'>");
					$("#myModal").modal();
				});

				$("video").click(function(){
					var v = $("video > source");
					var t = v.attr("src");
					$(".modal-body").html("<video class='model-vid' controls><source src='"+t+"' type='video/mp4'></source></video>");
					$("#myModal").modal();  
				});
			});
		</script>
	</body>
	</html>
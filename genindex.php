<?php
	$html = '<html>
	<head>
		<title>Playground</title>
		<meta charset="UTF-8">
		<style>
			body {
				width:100%;
				height:100%;
				margin:0;
				color:#FFF;
				background-color:#444;
				font-family:Arial;
			}
			header {
				background-color:#333;
				width:100%;
				height:500px;
				text-align:center;
			}
				header h1 {
					padding-top:200px;
					font-size:3em;
					margin:0;
				}
				header a {
					color:#FFF;
				}
				
			article {
				width:100%;
				text-align:center;
			}
				article h2 {
					padding-top:20px;
					font-size:3em;
					margin:0;
				}
				article #iframe-wrapper {
					width:50%;
					height:auto;
					margin:0 auto 0 auto;
				}
					#iframe-single-wrapper {
						float:left;
						width:calc(50% - 10px);
						height:330px;
						border:2px solid #CCC;
						padding:0;
						margin:3px;
					}
					#iframe-single-wrapper iframe {
						border:none;
						width:100%;
					}
					#iframe-single-wrapper a {
						color:#FFF;
						text-decoration:none;
						font-size:24px;
					}
		</style>
	</head>
	<body>
		<header>
			<h1>Victor Davidsson</h1>
			<h2>Welcome to my page!</h2>
			<p>I only publish small tests here, <a href="http://victordavidsson.se">visit my website to view more.</a></p>
		</header>
		<article>
			<section id="iframe-wrapper">';
				foreach(glob('*.html') as $document) {
					if($document != "index.html") {
						$html .= '<div id="iframe-single-wrapper">';
						$html .= '<iframe src="' . $document . '#fromindex" width="300" height="300"></iframe>';
						$html .= '<a href="' . $document . '" target="_blank">' . $document . '</a>';
						$html .= '</div>';
					}
				}
			$html .= '
			</section>
		</article>
	</body>
</html>';

 if(file_put_contents("index.html", $html)){
	echo "Sucessfully generated index.";
 } else {
	echo "An error occured.";
 }
?>
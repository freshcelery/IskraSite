<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/Iskra.css">
<link rel="stylesheet" href="CSS/Accordion.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  });
</script>
<script>
$(function(){

	$(document).on('click','.delete_button',function(){
		$(this).parent().parent().remove();
		alert('Post deleted');
	});

	$(document).on('mouseenter','.post',function(){
		$(this).find('.delete').show();
	});

	$(document).on('mouseleave','.post',function(){
		$(this).find('.delete').hide();
	});

	var currentTime = new Date();
	var month = currentTime.getMonth() + 1;
	var day = currentTime.getDate();
	var year = currentTime.getFullYear();
	var time = (month + "/" + day + "/" + year);

	var postNum = 1;
	var title = '';
	var content = '';
	var picture = '';
	$('.newPost').click(function(){
		title = $('#postTitle').val();
		content = $('#postContent').val();
		picture = $('#file').val();
		picture.prepend('upload/');
		$('#result').prepend("<div class=\"post\" > <h1>" + title + "</h1> <p id=\"time\">" + time + "</p> <p>" + content + "</p> <br /> <p id=\"break\"> *** </p> <br /> <img src="+picture+" /> <br /> <div class=\"delete\"><button class=\"delete_button\"> Delete </button></div></div>"
		);//end prepend
	$('.delete').hide();
	}); //end click function


}); //end function
</script>
</head>
<title> Iskra Crust </title>
<body>

<div id="container">

<div id="header">
<img id="head" src="Images/IskraLogo1.png"></a>
</div>

<div id="navbar">
<a class="button" href="front.html">Home</a>
<a class="button">Merch</a>
<a class="button" href="bio.html">Bio</a>
<a class="button" href="media.html">Media</a>
<a class="button" href="contact.html">Contact Us</a>
</div>



<div id="main">
	<div id="accordion">
		<h1> Developer Controls </h1>
		<form action="upload_file.php" method="post" enctype="multipart/form-data">
		<p id="devControl">
		Post Title:<br />
		<input id="postTitle" type="text"> <br /> <br />
		Post Text:<br />
		<textarea id="postContent"></textarea> <br />
			Upload picture: <br />
			<input type="file" name="file" id="file"> <br />
			<input class="newPost" type="submit" name="submit" value="Create Post"> <br />
			</p>
		</form>
	</div>
	<div id="result">
	</div>
</div>

<div id="audiobar">
<iframe style="border: 0; width: 100%; height: 100%;" src="http://bandcamp.com/EmbeddedPlayer/album=4077876054/size=large/bgcol=333333/linkcol=ffffff/transparent=true/" seamless><a href="http://iskracrust.bandcamp.com/album/european-tour-demo">European Tour Demo by Iskra</a></iframe>
</div>

<div id="footer">
<p> Created by: Cory Purnell </p>
</div>

</div>
</body>
</html>
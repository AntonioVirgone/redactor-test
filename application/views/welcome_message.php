<!DOCTYPE html>
<html>
<head>
	<script src="<?=base_url();?>/assets/js/jquery.min.js"></script>
	<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
	<script>
		tinymce.init({
			selector: '.myeditablediv',
			theme: 'modern',
			menubar: false,
			plugins: [
				'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
				'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
				'save table contextmenu directionality emoticons template paste textcolor paste'
			],
			toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | media fullpage preview'
		});
	</script>
</head>

<body>
	<h1>TinyMCE Quick Start Guide</h1>
	<form method="post" action="index.php/Welcome/newPost">
		<textarea id="mytextarea" class="myeditablediv" name="descrizione">Hello, World!</textarea>
		<button type="submit">Invia</button>
	</form>
</body>
</html>
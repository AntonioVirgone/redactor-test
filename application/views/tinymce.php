<!DOCTYPE html>
<html>
<head>
    <script type="application/javascript" src="http://localhost/php-workspace/redactor-test/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "#myTextarea",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
            ],
            toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect | responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            image_advtab: true,
            external_filemanager_path: "http://localhost/php-workspace/redactor-test/filemanager/",
            filemanager_title: "Responsive Filemanager" ,
            external_plugins: { "filemanager" : "http://localhost/php-workspace/redactor-test/filemanager/plugin.min.js"}
        });
    </script>
</head>

<body>
<h1>TinyMCE Quick Start Guide</h1>
<form method="post" action="index.php/Welcome/newPost">
    <textarea id="myTextarea" class="myeditablediv" name="descrizione">Hello, World!</textarea>
</form>
</body>
</html>
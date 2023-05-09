<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"></meta>
        <title>Write In text editor</title>
        <link rel="stylesheet" href="../library/css/bootstrap.min.css">
        <script src="../library/js/jquery-3.2.1.min.js"></script>
        
    </head>
    <body>
        <div class="container">
            <h2 class="text-center" style="margin-top: 5px; padding-top: 0;">write in</h2>
            <hr>
            <textarea name="editor1"></textarea>
</div>
</body>

<script>
                        CKEDITOR.replace( 'editor1' );
                </script>
        
</html>
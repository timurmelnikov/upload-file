<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title>video.novgorod.ru</title>
    <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">

    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="fileuploader.js"></script>

</head>
<body onload="ShowForm();">
<div class="content">

    <form action="./" method="post" id="uploadform" onsubmit="return false;" style="display:none;">

        <table class="colortable" cellspacing=1>
            <tr>
                <td>
                    <div id="message">Выберите файл:</div>
                </td>
                <td><input type="file" id="files" name="files[]"/></td>
            </tr>
        </table>
        <input type="submit" value="Загрузить &gt;&gt;"/>

    </form>

    <div id="cnuploader_progressbar"></div>
    <div id="cnuploader_progresscomplete"></div>

</div>
<?php
$hash = md5('test'.time());
?>
<script type="text/javascript">

    function ShowForm() {

        var uploader = new FileUploader({
            message_error: 'Ошибка при загрузке файла',
            form: 'uploadform',
            formfiles: 'files',
            uploadid: '<?php print $hash;?>',
            uploadscript: './upload.php',
            redirect_success: './success.php',
            portion: 1024 * 1024 * 2
        });

        var e = document.getElementById('uploadform');
        if (e) e.style.display = 'block';

    }

</script>

</body>
</html>
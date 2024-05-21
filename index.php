<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exporter</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
</head>
<body>
<div class="contaner">
    <div class="formExporter">
        <form action="proccess/export.php" method="post">
            <h3>FORM EXPORTER</h3>
            <input type="text" name="nameFile" placeholder="نام فایل ">
            <textarea name="contentFile" placeholder="کانتنت" rows="6"></textarea>
            <select name="formatFile">
                <option value="txt">text</option>
                <option value="pdf">pdf</option>
                <option value="json">json</option>
            </select>
            <div class="dSubmit">
                <button type="submit" class="submit">create</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>


<?php
$pageTitle = "Introduction to PHP";
$title = "Brad's PHP Blog | " . $pageTitle;
$author = "By: John Doe";
$body = "PHP (Hypertext Preprocessor) is a widely used server-side scripting<br>
language that has revolutionized web development. With its simplicity,<br>
flexibility, and vast community support, PHP has become the backbone of<br>
countless dynamic websites and web applications."; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $pageTitle ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $pageTitle?> </h2>
            <h2 class="text-2xl font-semibold mb-4"><?= $author?> </h2>
            <p> <?= $body?></p>
        </div>
    </div>
</body>

</html>
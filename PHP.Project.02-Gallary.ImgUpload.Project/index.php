<?php
require 'directoryReader.php';

$images = directoryReader('images');
if(!$images){
    die('no folder found!');
}
if(isset($_POST['submit'])){

    $imgName = $_FILES['file']['name'];
    $imgTmpName = $_FILES['file']['tmp_name'];
    $imgSize = $_FILES['file']['size'];
    $imgError = $_FILES['file']['error'];
    $imgType = $_FILES['file']['type'];

    $allowImgType = ['image/png', 'image/jpg', 'image/jpeg'];
    $folder='images/';
    if (move_uploaded_file($imgTmpName, $folder . $imgName)) {
        echo 'File uploaded successfully<br>';
        header("Location: index.php");
        exit();
    } else {
        echo 'File upload failed<br>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Image Gallery</title>
</head>
<body class="bg-gray-200 p-4">

<div class="max-w-6wl mx-auto">
    <div class="flex item-center justify-between">
        <div class="flex">
            <h1 class="text-2xl mb-8"><strong>PHP Basic Course</strong><br>Simple Image Gallery</h1>
        </div>

            <!-- Image Upload Form -->
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="mb-4">
            <label for="imageUpload" class="block text-sm font-medium text-gray-700">Upload Image</label>
            <input type="file" id="imageUpload" name="file" class="mt-1 p-2 border rounded-md">
            <button type="submit" name="submit" value="Upload" class="rounded bg-blue p-4 py-2 text-white hover:bg-blue">Upload</button>
            </form>

        </div>
        
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 border-t border-gray-300 pt-3">
    <?php foreach($images as $image):?>
      <img class="h-auto max-w-full rounded-lg" src="<?php echo $image ?>" alt="">
    <?php endforeach; ?>

    </div>
</div>
</body>
</html>
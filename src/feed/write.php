<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Write</title>
    <link rel="stylesheet" href="../../public/styles/common.css">
    <link rel="stylesheet" href="../../public/styles/write.css">
</head>
<body>
<?php include_once "../common/header.php" ?>
<div class="write-wrap">
    <div class="write-box">
        <form id="write-form" enctype="multipart/form-data">
            <div>
                <label for="user_id">ID</label>
                <input type="text" id="user_id">
            </div>
            <div>
                <label for="contents">Contents</label>
                <textarea id="contents" rows="10" style="resize: none"></textarea>
            </div>
            <div>
                <input type="file" name="images[]" multiple accept="image/*">
            </div>
            <button type="submit">Upload</button>
        </form>
    </div>
</div>
<?php include_once "../common/footer.php" ?>
</body>
</html>
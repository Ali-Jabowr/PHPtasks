<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Comments</h2>
        <form action="process_comment.php" method="POST">
            <input type="text" name="name" placeholder="Your Name">
            <textarea name="comment" placeholder="Your Comment"></textarea>
            <button type="submit">Submit</button>
        </form>
        <div class="comments">
        <?php foreach ($comments as $comment): ?>
            <li><?php echo $comment['name'] . ': ' . $comment['comment']; ?></li>
        <?php endforeach; ?>
        </div>
    </div>
</body>
</html>

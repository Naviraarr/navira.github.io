<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Yours</title>
  <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div>
        <h1 style="text-align: center;">Add Yours Here!!</h1>
        <p>on this form page, you can add you favorite albums ^_^</p>
        <form action="result.php" method="post">
          <label for="artist">Name of The Artist:</label>
          <input type="text" id="artist" name="artist" required>
    
          <label for="album_title">Title of The Album:</label>
          <input type="text" id="album" name="album" required>
    
          <label for="release_year">Release Year:</label>
          <input type="date" id="release" name="release" required>
    
          <label for="comments">Why Should We Add The Album:</label>
          <input id="comments" name="comments" rows="5" required>
    
          <input type="submit" value="Submit" name="submit">
        </form>
      </div>
</body>
</html>


</div>
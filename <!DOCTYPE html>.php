<!DOCTYPE html>
<html>
    <head>
    <title>Product Testing</title>
</head>
    <body>
    <h1>Welcome to Product Testing</h1>
    <p>This is a simple PHP app for testing your product deployment.</p>
    <form action="deploy.php" method="post">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required><br><br>
        <label for="version">Version:</label>
        <input type="text" id="version" name="version" required><br><br>
        <button type="submit">Deploy Product</button>
    </form>
</body>
</html>

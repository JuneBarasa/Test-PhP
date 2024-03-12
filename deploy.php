<!DOCTYPE html>
<html>
    <head>
    <title>Deployment Result</title>
</head>
    <body>
    <h1>Deployment Result</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_name = $_POST['product_name'];
        $version = $_POST['version'];

        // Here you can add your deployment logic
        // For example, you can run shell commands or invoke deployment scripts

        // For simplicity, let's just print the deployment details
        echo "<p>Deployed $product_name version $version successfully!</p>";
    } else {
        echo "<p>Invalid request!</p>";
    }
    ?>
    <a href="index.php">Back to Deployment Form</a>
</body>
</html>

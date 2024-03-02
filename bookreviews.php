<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rainy Bookstore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
    <script src="assets/shop.js" async></script>
    <?php session_start();
    include_once("cart.php");
    require_once("books.php"); ?>
</head>
<?php
$stmt = $pdo->prepare("SELECT * FROM bookstore WHERE id=?");
$stmt->execute([$id]); 
$user = $stmt->fetch(); code
?>

<?php
$id = $_GET['id']; 
$stmt_title = $pdo->prepare("SELECT title FROM bookstore WHERE id = ?");
$stmt_title->execute([$id]);
$book_title = $stmt_title->fetchColumn();
echo "<h3>Book Title: " . $book_title . "</h3>";
$stmt = $pdo->prepare("SELECT rating, review FROM reviews WHERE BookID = ?");
$stmt->execute([$id]);
if ($stmt->rowCount() > 0) {
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Rating: " . $row['Rating'] . "<br>";
        echo "Review: " . $row['Review'] . "<br><br>";
    }
} else {
    echo "No ratings or reviews are available for this book.";
}
?>
<body>
    <header>
        <h1>Rainy Bookstore</h1>
    </header>
    <main class="container shop">
        <div>
            <h2>Book Reviews</h2>
        <?php //include your code here
            


        ?>
		<a href="index.php"><button>Back</button></a>
       </div>
    <aside id="cart">
        <img src="assets/imgs/cart.png">
        <p id="cartSummary">
            Items: <?php echo count($_SESSION["items"]); ?><br><br>
            Total: $<?php echo $_SESSION["total"]; ?>
        </p>
        <form id="checkoutform" name="checkoutform" action="checkout.php" method="POST">
            <input type="hidden" name="cart" id="cartInput" value="<?php echo implode("|", $_SESSION["items"]); ?>">
            <input type="hidden" name="total" id="totalInput" value="<?php echo $_SESSION["total"]; ?>">
            <button id="checkout">Checkout</button>
        </form>
        <form id="clearform" name="clearform" action="" method="POST">
            <button id="clearCart" name="clear" value="clear">Clear Cart</button>
        </form>
    </aside>
    </main>
</body>

</html>
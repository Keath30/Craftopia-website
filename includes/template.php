<?php
$pagename = "Craftopia - Marketplace"; 
echo "<link rel=stylesheet type=text/css href=../css/mystylesheet.css>"; // Call in stylesheet

echo "<title>".$pagename."</title>"; // Display name of the page as window title
echo "<body>";
include("headfile.html"); // Include header layout file

echo "<h1>Welcome to Craftopia</h1>"; // Main heading
echo "<h3>Your Marketplace for Unique Handmade Creations</h3>"; // Subheading
echo "<p>Welcome to Craftopia, your local artisan marketplace! Discover unique handmade crafts, custom gifts, and creative art pieces directly from talented local artisans. Whether you're looking for one-of-a-kind jewelry, beautiful home decor, or personalized items, Craftopia has something special for everyone. Browse our collections and support independent creators.</p>";

// Featured Products Section
echo "<h3>Featured Products</h3>";
echo "<div class='product-grid'>";
echo "<div class='product'><img src='../assets/images/product1.jpg' alt='Product 1'><p>Crochet Teddy</p><span>$10</span></div>";
echo "<div class='product'><img src='../assets/images/product4.jpg' alt='Product 2'><p>Nature Painting</p><span>$15</span></div>";
echo "<div class='product'><img src='../assets/images/product3.jpg' alt='Product 3'><p>Handwoven Carpets</p><span>$20</span></div>";
echo "</div>";

// Call to Action Section
echo "<div class='cta-section'>";
echo "<h3>Explore Our Collections</h3>";
echo "<p>Find something special for yourself or as a gift. Shop now and support independent creators.</p>";
echo "<a href='shop.php' class='cta-button'>Shop Now</a>";
echo "</div>";

include("footfile.html"); // Include footer layout
echo "</body>";
?>

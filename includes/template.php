<?php
$pagename = "Craftopia - Marketplace"; 
echo "<link rel=stylesheet type=text/css href=../css/mystylesheet.css>"; // Call in stylesheet

echo "<title>".$pagename."</title>"; // Display name of the page as window title
echo "<body>";
include("headfile.html"); // Include header layout file

echo "<h1>Welcome to Craftopia</h1>"; // Main heading
echo "<h3>Your Marketplace for Unique Handmade Creations</h3>"; // Subheading
echo "<p>Welcome to Craftopia, your local artisan marketplace! Discover unique handmade crafts, custom gifts, and creative art pieces directly from talented local artisans. Whether you're looking for one-of-a-kind jewelry, beautiful home decor, or personalized items, Craftopia has something special for everyone. Browse our collections and support independent creators.</p>";


include("footfile.html"); // Include footer layout
echo "</body>";
?>

<?php include("include/header.php"); ?>

<style>
    nav.navbar {
        padding-top: 0.5rem !important; 
        padding-bottom: 0.5rem !important;
    }

    nav.navbar .nav-links a {
        font-size: 0.95rem;
    }
</style>

<div class="video-container">
    <video id="bgVideo" autoplay muted loop>
        <source src="videos/culture.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay">
        <div class="category-bar">
            <button onclick="changeVideo('culture')">Culture</button>
            <button onclick="changeVideo('nature')">Nature</button>
            <button onclick="changeVideo('wildlife')">Wildlife</button>
        </div>
        <h2></h2>
        <p></p>
    </div>
</div>

<?php include("include/footer.php"); ?>

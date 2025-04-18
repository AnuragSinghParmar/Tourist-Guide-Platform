<?php include("../include/header.php"); ?>

<style>
    body {
        background-image: url('../images/travel-bg.jpg'); /* Make sure this image exists */
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }

    .page-container {
        margin-top: 6rem; /* pushes the content below the header */
        background-color: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(2px);
        border-radius: 1rem;
        padding: 2rem;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .attraction-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .attraction-card {
        background-color: white;
        border-radius: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        text-decoration: none;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .attraction-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .attraction-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .attraction-card h3 {
        font-size: 1.25rem;
        font-weight: bold;
        margin: 0.75rem 1rem 0.5rem;
    }

    .attraction-card p {
        font-size: 0.95rem;
        margin: 0 1rem 1rem;
        color: #555;
    }

    .page-title {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 2rem;
        color: #2d3748;
    }
</style>

<div class="page-container">
    <h2 class="page-title">Top Tourist Attractions</h2>

    <div class="attraction-list">
        <?php
        $attractions = [
            [
                "title" => "Sundarbans Wildlife Safari",
                "image" => "../images/sundarban.jpg",
                "desc" => "Explore the dense mangrove forests and spot Royal Bengal Tigers in their natural habitat.",
                "link" => "sundarban.php"
            ],
            [
                "title" => "Darjeeling Himalayan Nature Trail",
                "image" => "../images/darjeeling.jpg",
                "desc" => "Scenic trails through lush hills, perfect for hiking and bird watching.",
                "link" => "darjeeling.php"
            ],
            [
                "title" => "Jaipur Cultural Tour",
                "image" => "../images/jaipur.jpg",
                "desc" => "Experience royal palaces, local arts, and vibrant heritage of Rajasthan.",
                "link" => "jaipur.php"
            ],
            [
                "title" => "Arunachal Pradesh Adventure",
                "image" => "../images/arunachal.jpg",
                "desc" => "Discover the untouched beauty of Northeast India with mountains, monasteries, and tribal culture.",
                "link" => "arunachal.php"
            ],
            [
                "title" => "Manali Mountain Escape",
                "image" => "../images/manali.jpg",
                "desc" => "A scenic getaway into the Himalayas featuring snow, adventure sports, and tranquil valleys.",
                "link" => "manali.php"
            ],
            [
                "title" => "Kerala Backwaters Bliss",
                "image" => "../images/kerala.jpg",
                "desc" => "Cruise serene backwaters, enjoy Ayurvedic therapies, and experience the lush tropical beauty of Kerala.",
                "link" => "kerala.php"
            ],
        ];

        foreach ($attractions as $item) {
            echo '
            <a href="'.$item["link"].'" class="attraction-card">
                <img src="'.$item["image"].'" alt="'.$item["title"].'">
                <h3>'.$item["title"].'</h3>
                <p>'.$item["desc"].'</p>
            </a>';
        }
        ?>
    </div>
</div>

<?php include("../include/footer.php"); ?>

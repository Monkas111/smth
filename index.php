<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon Hotel</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header Styling */
        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }
                /* Header Styling */
                header {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        /* Navigation Bar Styling */
        nav {
            margin-top: 10px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Footer Styling */
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        footer ul li {
            display: inline;
        }

        footer ul li a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        footer ul li a:hover {
            text-decoration: underline;
        }


        /* Room & Rates Section */
        .second-section {
            background-color: #fff;
            padding: 50px 0;
        }

        .secondary-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
            color: #333;
        }

        .rooms-gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .rooms-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            width: 250px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .rooms-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .cards-contents {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }

        .button-small {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }

        .button-small:hover {
            background-color: #0056b3;
        }

        .rooms-card:hover {
            transform: scale(1.05);
        }

        /* News Section */
        .news-first-section {
            background-color: #f9f9f9;
            padding: 50px 0;
        }

        .news-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .news-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            width: 300px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .news-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .news-card-content {
            padding: 15px;
        }

        .card-description {
            color: #666;
            font-size: 14px;
            margin: 10px 0;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

<?php
$header = [
    "logo" => [
        "src" => "./nav/logo.png",
        "alt" => "logo"
    ],
    "navigation" => [
        "Our Hotel" => "#first-section",
        "Rooms & Rates" => "#second-section",
        "Facilities" => "#third-section",
        "Contact Us" => "newspage.html"
    ]
];
?>

<!-- Output the header using PHP -->

<body>
    <header class="header">
        <div class="container">
            <div class="header-flex">
                <img src="<?= $header['logo']['src']; ?>" alt="<?= $header['logo']['alt']; ?>">
                <nav class="navigation">
                    <?php foreach ($header['navigation'] as $text => $link): ?>
                        <a href="<?= $link; ?>" class="nav-link"><?= $text; ?></a>
                    <?php endforeach; ?>
                </nav>
            </div>
        </div>
    </header>
</body>


    <main>
        <?php
        // PHP data arrays
        $rooms = [
            ['img' => './nav/card1.png', 'title' => 'Standard Twin Room'],
            ['img' => './nav/card2.png', 'title' => 'Standard Room'],
            ['img' => './nav/card3.png', 'title' => 'Standard View Room'],
            ['img' => './nav/card4.png', 'title' => 'Deluxe Room']
        ];

        $news = [
            ['img' => './nav/news1.png', 'title' => 'Standard Twin Room', 'description' => 'Lorem ipsum dolor sit amet...'],
            ['img' => './nav/news2.png', 'title' => 'Standard Room', 'description' => 'Lorem ipsum dolor sit amet...'],
            ['img' => './nav/news3.png', 'title' => 'Standard View Room', 'description' => 'Lorem ipsum dolor sit amet...'],
            ['img' => './nav/news4.png', 'title' => 'Deluxe Room', 'description' => 'Lorem ipsum dolor sit amet...']
        ];
        ?>

        <!-- Rooms Section -->
        <section class="second-section" id="second-section">
            <div class="container">
                <h2 class="secondary-title">Rooms & Rates</h2>
                <div class="rooms-gallery">
                    <?php foreach ($rooms as $room): ?>
                        <div class="rooms-card">
                            <img src="<?php echo $room['img']; ?>" alt="img">
                            <div class="cards-contents">
                                <h3 class="card-title"><?php echo $room['title']; ?></h3>
                                <a href="#" class="button button-small">Check Rates</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="news-first-section">
            <div class="container">
                <h2 class="secondary-title">News</h2>
                <div class="news-list">
                    <?php foreach ($news as $item): ?>
                        <div class="news-card">
                            <img src="<?php echo $item['img']; ?>" alt="img">
                            <div class="news-card-content">
                                <h3 class="card-title"><?php echo $item['title']; ?></h3>
                                <p class="card-description"><?php echo $item['description']; ?></p>
                                <a href="#" class="button button-small">Read More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <?php
$footer = [
    "logo" => [
        "src" => "./nav/logo2.png",
        "alt" => "footer-logo"
    ],
    "navigation" => [
        "Our Hotels" => "#",
        "Our Conferencing" => "#",
        "Our Company" => "#",
        "Hotel Design" => "#",
        "Careers" => "#"
    ],
    "contact" => [
        "address" => "Bon Hotels Head Office",
        "phone" => [
            "label" => "+27 434 344 432",
            "tel" => "tel:+27 434 344 432"
        ],
        "email" => [
            "label" => "info@bonhotels.com",
            "mailto" => "mailto:info@bonhotels.com"
        ]
    ]
];
?>

<!-- Output the footer using PHP -->

<footer>
    <div class="container">
        <div class="footer-content">
            <img src="<?= $footer['logo']['src']; ?>" alt="<?= $footer['logo']['alt']; ?>">
            <nav class="footer-navigation">
                <?php foreach ($footer['navigation'] as $text => $link): ?>
                    <a href="<?= $link; ?>" class="footer-nav-links"><?= $text; ?></a>
                <?php endforeach; ?>
            </nav>
            <div class="footer-text">
                <p><?= $footer['contact']['address']; ?></p>
                <a href="<?= $footer['contact']['phone']['tel']; ?>"><?= $footer['contact']['phone']['label']; ?></a>
                <a href="<?= $footer['contact']['email']['mailto']; ?>"><?= $footer['contact']['email']['label']; ?></a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>

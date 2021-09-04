<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/real-estate-website/assets/css/app.css">
    <link rel="stylesheet" href="/real-estate-website/assets/css/footer.css">
    <link rel="stylesheet" href="/real-estate-website/assets/css/form.css">
    <link rel="stylesheet" href="/real-estate-website/assets/css/header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <title><?php echo $title; ?></title>
</head>

<body>
    <header>
        <i id="nav-open-button" class="material-icons">menu</i>
        <nav id="nav">
            <i id="nav-close-button" class="material-icons">close</i>
            <ul>
                <li>
                    <a class="nav-button" href="/real-estate-website/processes/search.php">SEARCH</a>
                </li>
                <li>
                    <a class="nav-button" href="/real-estate-website/processes/create.php">CREATE</a>
                </li>
            </ul>
        </nav>
        <a href="/real-estate-website/index.php"><img src="/real-estate-website/assets/images/logo.png" alt="Real Estate Logo"></a>
    </header>
    <script src="/real-estate-website/assets/js/header.js"></script>
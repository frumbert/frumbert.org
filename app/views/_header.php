<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>frumbert.org</title>
        <meta name="description" content="I currently write javascript web apps, do custom moodle programming, and back-end connected web design">
        <meta name="viewport" content="width=device-width">
        <link href='//fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <!--[if lt IE 9]>
            <script src="js/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <header>
      <section id="header">
      <nav><?php
            $current_page = $match["route"];
            foreach ($Router->getRoutes() as $idx => $route) {
              if ($route["route"] !=="/" && $route["template"] === TRUE) {
                echo "<a href='" . $route["route"] . "'";
                if ($current_page === $route["route"]) echo " class='active'";
                echo ">";
                if (!empty($route["icon"])) echo "<i class='fa " . $route["icon"] . "'></i> ";
                echo $route["name"] . "</a>";
              }
            }
            ?>
      </nav>
      </section>
    </header>

    <main>
      <section id="main">

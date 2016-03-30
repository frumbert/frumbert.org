<?php
// a bit of config
$lib = dirname(__FILE__) . '/../app/lib/';
$view_dir = dirname(__FILE__) . '/../app/views/';
$controller_dir = dirname(__FILE__) . '/../app/controllers/';

header("Content-Type: text/html");

// our libraries
include $lib . 'AltoRouter.php'; // modded version of https://github.com/dannyvankooten/AltoRouter
$Router = new AltoRouter();

include $lib . 'Parsedown.php'; // https://github.com/erusev/parsedown
$Parsedown = new Parsedown();

// Routes
$Router->setBasePath('');
$Router->map('GET','/', 'home.md', 'home', true, 'fa-home');
$Router->map('GET','/home/', 'home.md', 'Home', true, 'fa-home');
$Router->map('GET','/resume/', 'resume.md', 'Resume', true, 'fa-graduation-cap');
$Router->map('GET','/music/', 'music.php', 'Music',true,'fa-music');
$Router->map('GET','/creative-fiction/', 'creative-fiction.php', 'Creative Fiction', true, 'fa-book');
$Router->map('GET','/poetry/', 'poetry.php', 'Poetry', true, 'fa-bookmark');
$Router->map('GET','/game-ideas/', 'game-ideas.php', 'Game Ideas', true, 'fa-gamepad');
$Router->map('GET','/travel-diary/', 'travel-diary.php', 'Travel Diary', true, 'fa-camera-retro');
$Router->map('GET','/assignments/', 'assignments.php', 'Assignments', true, 'fa-tree');
$Router->map('GET','/random-files/', 'random-files.php', 'Random files', true, 'fa-trash');
$Router->map('GET','/ancient-floppies/', 'ancient-floppies.php', 'Ancient floppies', true, 'fa-save');

// $Router->map('GET','/contact/', 'contact.html', 'Contact Us');
// $Router->map('POST','/mail/','contact_me.php','Mailer', FALSE);

// API Routes (just testing)
$Router->map('GET','/api/[*:key]/[*:name]/', 'json.php', 'api', FALSE);

/* Match the current request */
$match = $Router->match();
if($match) {

    $inc_dir = ($match["method"] === "POST") ? $controller_dir : $view_dir; // ok, so this is asking for trouble, but I haven't reworked a new flag into Router->map() ... meh

    if ($match['template'] == TRUE) require $view_dir . '_header.php';
    if (file_exists($inc_dir . $match['target'])) {
        //if (stripos(strrev($match['target']), 'dm.') === 0) { // if string ends with .md then read the file and output the parsed markdown
            ob_start();
            require $inc_dir . $match["target"];
            $contents = ob_get_contents();
            ob_end_clean();
            // $contents = file_get_contents($inc_dir . $match['target']);
            echo $Parsedown->text($contents);
        //} else { // just include the filename
        //    require $inc_dir . $match['target'];
        //}
    } else {
        echo "<h1>route mismatch @ " . $match['target'] . "</h1>\n";
    }
    if ($match['template'] == TRUE) require $view_dir . '_footer.php';
}
else {
  header("HTTP/1.0 404 Not Found");
  require '404.html';
}
?>
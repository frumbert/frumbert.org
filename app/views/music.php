#Music

I used to write a lot of computer music. Some of it is good, a lot of it is average to bad. Some of it is still on my BBC Micro, which is currently waiting for me to resolder its long-dry joints, if the 5.25" floppies don't rust first; some of them I never converted from various Tracker formats to anything remotely modern; some of it is on Atari ST floppies in Notator format - and it's highly unlikely I'll find a working one of those ever again. Here's links to all I currently have left on file.

> 2015 update: I found another track! it's a 42 minute recording called "stupidly large wave file.m4a". It's weird. I must have been drunk at the time it was made.

Note: Use the <i class='fa fa-play-circle-o'></i> icons to play/preview files using the audio tag; right-click save-as files using the download button.

<?php
$files = glob('mp3/*.{mp3}', GLOB_BRACE);

foreach($files as $file) {
    echo "##" . basename($file,'.mp3') . "\n";
//    echo "<audio src='//frumbert.org/" . urlencode($file) . "' preload='none' controls='true' />\n";
    echo "<a href='//frumbert.org/" . $file . "' class='audio-player'><i class='fa fa-play-circle-o'></i></a> ";
    echo "[Download](//frumbert.org/" . rawurlencode($file) . ")\n";
    echo "\n";
}


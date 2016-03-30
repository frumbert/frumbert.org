#Random files

I've carried these files in my documents folder for years. Often surprised at the things I jot down. These days I have text clippings which I can't just link to because they are the oddball fork thing that OSX does to such files - they aren't as easy to read. I don't pretend to remember what is in half of these files - your mileage may vary.

<?php
$files = glob('gfx/*.{jpg,gif,png,zip,txt}', GLOB_BRACE);
foreach($files as $file) {
    echo "* [/$file](//frumbert.org/" . urlencode($file) . ")\n";
}
?>

These are direct links to the files - your browser might try to handle them in odd ways. Right click, save as.
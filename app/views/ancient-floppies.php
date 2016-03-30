#Ancient floppies

As I resurect old floppy disks I discover graphics or old web designs I did long ago. The first web site I made was nearly 20 years ago on a campus intranet. I've found other random files here and there, so here they are.

<?php
$files = glob('gfx/*.{jpg,gif,png,zip,txt}', GLOB_BRACE);
foreach($files as $file) {
    echo "* [/$file](" . urlencode($file) . ")\n";
}
?>

These are direct links to the files - your browser might try to handle them in odd ways. Right click, save as.
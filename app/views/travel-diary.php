#Travel diary

These may be handy if you are a travelling to Italy by your self and haven't planned your trip by the time you get there.

<?php
$files = glob('txt/italy/*.{odt,txt,gdoc,doc,pdf,sxw}', GLOB_BRACE);
foreach($files as $file) {
    echo "* [/$file](http://docs.google.com/viewer?url=https%3A%2F%2Ffrumbert.org%2F" . urlencode($file) . ")\n";
}
?>

I've linked these through Google Viewer, so you should be able to read them online.
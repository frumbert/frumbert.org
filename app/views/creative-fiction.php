#Creative writing

I used do a lot of creative writing. Much of this was done more than 25 years ago. Like the music, some of it is good, some bad. Linked to everything I could find - apologies for the web-unfriendly formats.

<?php
$files = glob('txt/*.{doc,rtf,pdf,txt}', GLOB_BRACE);
foreach($files as $file) {
    echo "* [/$file](http://docs.google.com/viewer?url=https%3A%2F%2Ffrumbert.org%2F" . urlencode($file) . ")\n";
}
?>

I've linked these through Google Viewer, so you should be able to read them online.
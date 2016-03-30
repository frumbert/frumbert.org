#Poetry

The teenage writer thing - late 80's, early 90's. Some of these won poetry competitions and such. Most of them are silly. Some I still like. Feel free to look away awkwardly.

<?php
$files = glob('txt/poetry/*.{doc,rtf,DOC}', GLOB_BRACE);;
foreach($files as $file) {
    echo "* [/$file](http://docs.google.com/viewer?url=https%3A%2F%2Ffrumbert.org%2F" . urlencode($file) . ")\n";
}
?>

I've linked these through Google Viewer, so you should be able to read them online.
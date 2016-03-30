#Assignments

I studied horticulture. Here are my assignments (a-la cheat notes for gardeners).

<?php
$files = glob('txt/tafe/*.{odt,txt,gdoc,doc,pdf}', GLOB_BRACE);
foreach($files as $file) {
    echo "* [/$file](http://docs.google.com/viewer?url=https%3A%2F%2Ffrumbert.org%2F" . urlencode($file) . ")\n";
}
?>

I've linked these through Google Viewer, so you should be able to read them online.
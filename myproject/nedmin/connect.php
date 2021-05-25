
<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=web", "root", "");
} catch (PDOException $e) {
    print $e->getmessage();
}
?>
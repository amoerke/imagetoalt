<?php


// PDO Connection
/* $host = 'mysql';
$password = 'oeko1234';
$user = 'root';
$db = 'test';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    $pdo->query('INSERT INTO `test` (`col1`, `col2`, `col3`) VALUES ("test-1", "test-2", "test-3")');
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
} */


/* $i = 0;
while ($i < 10) {
    # output data
    flush();
    ob_flush();
    echo "data: " . json_encode(['time' => time()]) . "\n\n";
    sleep(1);
    $i++;
}
 */

phpinfo();

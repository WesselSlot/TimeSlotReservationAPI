<?php
require 'vendor/autoload.php';

use app\core\UnitOfWork;
use Dotenv\Dotenv;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/app"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'dbname'   => getenv('DB_NAME'),
    'host' => getenv('DB_HOST')
);

try {
    $entityManager = EntityManager::create($dbParams, $config);
    $unitOfWork = new UnitOfWork($entityManager);
} catch (Exception $e) {
    echo $e->getMessage();
}


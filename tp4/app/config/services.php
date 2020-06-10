<?php
use Ubiquity\controllers\Router;

\Ubiquity\cache\CacheManager::startProd($config);
\Ubiquity\orm\DAO::start();
Router::start();
/**Router::addRoute("_default", "controllers\\IndexController");**/
Router::addRoute("_default", "controllers\\FlashmobsController"); /**
 * Nouvelle route
 */
\Ubiquity\assets\AssetsManager::start($config);

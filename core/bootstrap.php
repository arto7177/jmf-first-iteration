<?php
$config = require 'config.php';

require 'core/router.php';

require 'core/database/connection.php';

require 'core/database/querybuilder.php';

return new QueryBuilder(Connection::make($config['database']));
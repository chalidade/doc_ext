<div class="tab-pane fade" id="configuration" role="tabpanel" aria-labelledby="configuration-list">
  <h1><font style="color: #f85351;">#</font> Configuration</h1>
  <hr>
  <p>There are many configuration Lupi that follow how configuration Lumen is. All that you know about Lumen you can implemented into Lupi. Include how to create new seeder, database migration, and etc. </p>
  <br>
  <h4>Configuration Database</h4>
  <p>If you want to adding new database configuration in Lupi, it's simple. Open config folder, then edit database.php. Copy exampleMysql then change value as your database configuration.
  </p>
  <br>
  <h5><font style="color: #f85351;">#</font> Sql Database Configuration</h5>
  <div class="bg-light" style="padding:15px">
    'exampleMysql'  => [ <br>
       'driver'    => 'mysql', <br>
       'host'      => env('DB_HOST', 'localhost'), <br>
       'port'      => env('DB_PORT', 3306), <br>
       'database'  => env('DB_DATABASE', 'your_database'), <br>
       'username'  => env('DB_USERNAME', 'your_username'), <br>
       'password'  => env('DB_PASSWORD', 'your_pass'), <br>
       'charset'   => env('DB_CHARSET', 'utf8'), <br>
       'collation' => env('DB_COLLATION', 'utf8_unicode_ci'), <br>
       'prefix'    => env('DB_PREFIX', ''), <br>
       'timezone'  => env('DB_TIMEZONE', '+00:00'), <br>
       'strict'    => env('DB_STRICT_MODE', false), <br>
    ],
  </div>
  <br>
  <h5><font style="color: #f85351;">#</font> Oracle Database Configuration</h5>
  <div class="bg-light" style="padding:15px">
    'exampleOracle' => [
          'driver'        => 'oracle', <br>
          'tns'           => env('DB_TNS', ''),<br>
          'host'          => env('DB_HOST', 'localhost'),<br>
          'port'          => env('DB_PORT', '1521'),<br>
          'database'      => env('DB_DATABASE', 'your_database'),<br>
          'username'      => env('DB_USERNAME', 'your_username'),<br>
          'password'      => env('DB_PASSWORD', 'your_password'),<br>
          'charset'       => env('DB_CHARSET', 'AL32UTF8'),<br>
          'prefix'        => env('DB_PREFIX', ''),<br>
          'prefix_schema' => env('DB_SCHEMA_PREFIX', ''),<br>
          'edition'       => env('DB_EDITION', 'ora$base'),<br>
      ],
  </div>
  <br>
  Explanation :
  <ol>
    <li>exampleMysql is name of your database configuration, you will call it later in controller or json format</li>
    <li>Drivers is database type that we use</li>
    <li>Host is your server, you can fill with domain or IP. If you're running in local server you can use localhost</li>
    <li>Database is name of your database</li>
    <li>Username is your username when you want to access database</li>
    <li>Password is your password when you want to access database</li>
  </ol>
  <br>
  <h5><font style="color: #f85351;">#</font> .env Configuration</h5>
  <p>As Lumen basic configuration, you need make sure that file .env is exist in your root directory. Because if .env not exist on your root directory, we will not able to running Lupi. And give configuration of your .env file like below </p>
  <div class="bg-light" style="padding:15px">
    APP_NAME=Lumen <br>
    APP_ENV=local <br>
    APP_KEY=Aqi2bcRpqcEKUltJeNDOfancUt8Cu7s6 <br>
    APP_DEBUG=true <br>
    APP_URL=http://localhost <br>
    APP_TIMEZONE=UTC <br>
    <br>
    LOG_CHANNEL=stack <br>
    LOG_SLACK_WEBHOOK_URL= <br>
     <br>
    CACHE_DRIVER=file <br>
    QUEUE_CONNECTION=sync <br>
  </div>
</div>

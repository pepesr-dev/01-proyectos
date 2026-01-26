<?php

define("DB_HOSTNAME", "localhost");
define("BD_PORT", "3036");
define("BD_USER", "pepe");
define("DB_PASS", "@Pepe.dev25");
define("DB_SCHEMA", "db_taskList");


define(
    "DB_DSN",
    'mysql:host=' . DB_HOSTNAME . ';
port=' . DB_PORT . ';
dbname=' . DB_SCHEMA
);

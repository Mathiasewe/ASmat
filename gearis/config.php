<?php
$conf->debug = true;

# ---- Webapp location
$conf->server_name = 'gearis-app-a9c3dhethsbkcadn.francecentral-01.azurewebsites.net';
$conf->protocol = 'https';
$conf->app_root = '';

# ---- Database config - values required by Medoo
$conf->db_type = 'mysql';
$conf->db_server = 'gearismysql2026spain.mysql.database.azure.com';
$conf->db_name = 'dbogeris';
$conf->db_user = 'gearisadmin';
$conf->db_pass = '#gearisadmin2026';
$conf->db_charset = 'utf8';

# ---- Database config - optional values
$conf->db_port = '3306';
#$conf->db_prefix = '';
$conf->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_SSL_CA => '/etc/ssl/certs/ca-certificates.crt' ];
<?php
$conf->debug = true; # set true during development and use in your code (for instance check if true to send additional message)

# ---- Webapp location
$conf->server_name = 'gearis-app-a9c3dhethsbkcadn.francecentral-01.azurewebsites.net';   # server address and port
$conf->protocol = 'https';           # http or https
$conf->app_root = '';                # project subfolder in domain (relative to main domain)

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
$conf->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
<?php
$config->installed       = true;
$config->debug           = false;
$config->requestType     = 'GET';
$config->db->host        = 'zentao-mariadb';
$config->db->port        = '3306';
$config->db->name        = 'zentao';
$config->db->user        = 'root';
$config->db->password    = '1q2w3e4R';
$config->db->prefix      = 'zt_';
$config->webRoot         = getWebRoot();
$config->default->lang   = 'zh-cn';
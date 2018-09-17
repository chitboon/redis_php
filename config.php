<?php

/**
 * config_template.php - Script to compare Redis response times
 * Copyright 2017 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0/
 *
 * or in the "license" file accompanying this file. This file is distributed 
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either 
 * express or implied. See the License for the specific language governing 
 * permissions and limitations under the License.
 */

// Configuration values
$mysql_endpoint = 'begogreen.c5d3b5efavnh.us-west-2.rds.amazonaws.com';
$mysql_username = 'master';
$mysql_database = 'begogreen';
$mysql_port = '3306';
$redis_endpoint = 'begogreen.2szzqi.ng.0001.usw2.cache.amazonaws.com';

$redis_port = '6379';
$redis_token = '';
$query = 'SHOW DATABASES'; // replace with your own query

<?php
file_put_contents(__DIR__ . "/demo.txt", "Learning PHP - " . date('Y-m-d H:i:s'));
echo file_get_contents(__DIR__ . "/demo.txt");

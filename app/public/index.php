<?php

require __DIR__ . '/../vendor/autoload.php';

phpinfo(INFO_ALL & ~INFO_ENVIRONMENT & ~INFO_CONFIGURATION & ~INFO_VARIABLES);

<?php

/* =====================================================
 * Auto Loading
 * ===================================================== */

$loader = new \Phalcon\Loader();

$loader->registerDirs([
    sprintf('%s/%s', __DIR__, 'Components'),
    sprintf('%s/%s', __DIR__, 'Librarys'),
    sprintf('%s/%s', __DIR__, 'Security')
])->register();

/* =====================================================
 * Custom Method
 * ===================================================== */

function getValue ($data = []) { echo '<meta charset="utf-8"><pre>'; print_r($data); echo '</pre>'; exit(); }
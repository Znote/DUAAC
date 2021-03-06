<?php
/**
 * Developer: Daniel
 * Date: 2/15/14
 * Time: 9:14 PM
 */

//return; // DELETE THIS LINE TO ENABLE THIS PLUGIN

/**
 * This is an example plugin that is automatically loaded
 * You can find instance of Slim framework app as $app
 * Check out Slim documentation at http://docs.slimframework.com/
 */
$app->get(ROUTES_PREFIX.'/uptime', function() use($app) {
    $app->response->headers->set('Content-Type', 'text');
    $app->response->setBody(shell_exec('uptime'));
});

// THIS IS ONLY OPTIONAL, YOU CAN DEFINE PLUGIN META DATA
return array('name' => 'Example plugin',
             'version' => '0.1');
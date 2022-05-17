<?php

class LocalValetDriver extends BedrockValetDriver
{
    /**
     * Determine if the driver serves the request.
     *
     * @param  string  $sitePath
     * @param  string  $siteName
     * @param  string  $uri
     * @return bool
     */
    public function serves($sitePath, $siteName, $uri)
    {
        return file_exists($sitePath.'/web/wp-content/mu-plugins/bedrock-autoloader.php') ||
              (is_dir($sitePath.'/web/wp-content/') &&
               file_exists($sitePath.'/web/wp-config.php') &&
               file_exists($sitePath.'/config/application.php'));
    }
}

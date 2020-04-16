<?php

use Mocha\Parser\ConfigParser;
use Mocha\Reader\FileReader;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;

/**
 *
 * Generate an entire site build from all of the markdown
 * pages available inside mocha-config/pages_dir
 * 
 * @param $build_dir    The name of the directory to build in
 * @param $pages_dir    The name of the directory where the markdown is stored
 */
function generate($build_dir, $pages_dir) {
    echo "Generating site build...";

    $config = ConfigParser::create()->parse();
    $parsedown = new Parsedown();
    $filesystem = new Filesystem();

    $filesystem->mkdir($config->build_dir);

    foreach( new DirectoryIterator( $config->pages_dir ) as $file ) {

        if( $file->getExtension() == "md") {
            $filename = substr($file->getFilename(), 0, -3);
            dump($filename);

            $markdown = $parsedown->text(
                FileReader::create(
                    $file->getPathname())->read()
                );

            $filesystem->dumpFile("{$config->build_dir}/{$filename}.html", $markdown);

        }

    }

}



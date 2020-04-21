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
    dump("Generating Site Build");

    $config = ConfigParser::create()->parse();
    $parsedown = new Parsedown();

    $filesystem = new Filesystem();
    $filesystem->mkdir($config->build_dir);

    foreach( new DirectoryIterator( $config->pages_dir ) as $file ) {

        if( $file->getExtension() == "md") {
            $filename = substr($file->getFilename(), 0, -3);

            $markdown = $parsedown->text(
                FileReader::create(
                    $file->getPathname())->read()
                );

            $created_file = "{$config->build_dir}/{$filename}.php";

            $filesystem->dumpFile($created_file, "");
            $filesystem->appendToFile($created_file, getIncludePartialStr('header'));
            injectContent($created_file, $markdown, $filesystem);
            $filesystem->appendToFile($created_file, getIncludePartialStr('footer'));

            dump("Built {$created_file}");

            //$filesystem->dumpFile($created_file, $markdown);

        }

    }

    dump("Done.");
}

/**
 * Inject string into a file
 *
 * @param string $file    The name of the file to write to
 * @param string $content    The name of the content to be written
 */
function injectContent(string $file, string $content, Filesystem $filesystem) {
    $filesystem->appendToFile($file, $content);
}

/**
 * Get the include path as a string with a partial filename and return it.
 * Meant to injected when a file is being converted from markdown into
 * a site build
 *
 * @param string $file    The filename of the partial we want
 *
 * @return string    The name of the file to write to
 */
function getIncludePartialStr(string $partial) {
    $root_path = dirname(__FILE__) . "/pages/partials/";
    return "\n<?php include '$root_path{$partial}.php'; ?>\n";
}





<?php
namespace Mocha\Parser;

use Mocha\Parser\ParserInterface;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;


class ConfigParser implements ParserInterface {

    /**
     * Parse a Mocha Config file
     * @return array The data that has been parsed
     */
    public function parse() :  array {

        try {
            $config = Yaml::parseFile('mocha-config.yaml');
        } catch (ParseException $exception) {
            printf('Unable to parse the config file: %s', $exception->getMessage());
        }

        return $config;
    }
}

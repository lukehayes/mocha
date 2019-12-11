<?php
namespace Mocha\Parser;

use Mocha\Parser\ParserInterface;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;


class ConfigParser implements ParserInterface {

    /**
     * Path to the Mocha config file that
     * we want to parse
     *
     * @var
     */
    private $configFile = NULL;

    public function __construct($configFile = "mocha-config.yaml") {
        $this->configFile = $configFile;
    }

    /**
     * Parse a Mocha Config file
     * @return array The data that has been parsed
     */
    public function parse() :  array {

        try {
            $config = Yaml::parseFile($this->configFile);
        } catch (ParseException $exception) {
            printf('Unable to parse the config file: %s', $exception->getMessage());
        }

        return $config;
    }
}

<?php
namespace Mocha\Parser;

use Mocha\Parser\ParserInterface;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

/**
 *  Config Parser can read in a configuation file
 *  written in YAML and parse it accordingly
 * 
 * @package Parser
 */
class ConfigParser implements ParserInterface {

    /**
     * @var string | null   Path to the configuration file
     */
    private $configFile = NULL;

    public function __construct($configFile = "mocha-config.yaml") {
        $this->configFile = $configFile;
    }

    /**
     * Parse a Mocha Config file
     *
     * @return array    Result of parsing the configuration file
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

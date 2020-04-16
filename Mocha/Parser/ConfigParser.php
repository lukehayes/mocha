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

    /**
     * @var array | null   All parsed values from the configuration file
     */
    public $config = NULL;

    /**
     * Constructor
     *
     * @param string $configFile    The name of the configuration file that will be parsed
     * 
     * @return string    Result of parsing the configuration file
     */
    public function __construct($configFile = "mocha-config.yaml") {
        $this->configFile = $configFile;
    }
    
    /**
     * Parse a Mocha configuration file
     *
     * @property-read string $name    The value to retrieve from the configuration file
     * 
     * @return string|null    Result of parsing the configuration file
     */
    public function __get($name) {
        return array_key_exists($name, $this->config) ?
            $this->config[$name] : null;
    }
    
    /**
     * Static factory method for creating a ConfigParser object
     *
     * @return ConfigParser
     */
    public static function create() {
        return new ConfigParser();
    }

    /**
     * Parse a Mocha configuration file
     *
     * @throws ParseException
     *
     * @return object    Result of parsing the configuration file
     */
    public function parse() : object {

        try {
            $this->config = Yaml::parseFile($this->configFile);
        } catch (ParseException $exception) {
            printf('Unable to parse the configuration file: %s', $exception->getMessage());
        }
        
        return $this;
    }
}

<?php

/**
 * YamlParser.php
 *
 * @author    Thomas Muntaner thomas.muntaner@gmail.com
 * @version   1.0.0
 */

namespace Philasearch\I18n\Parsers;

use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Exception\ParseException;

/**
 * Class YamlParser
 *
 * This class interacts with the symfony yaml component
 * to read yaml locale files
 *
 * @package Philasearch\I18n\Parsers
 * 
 */
class YamlParser
{
    private $parser;

    public function __construct ()
    {
        $this->parser = new Parser();
    }

    /**
     * Parses a yaml file into a php array
     * 
     * @param  string $file
     * @return array
     */
    public function parse ( $file )
    {
        try
        {
            return $this->parser->parse( $file );
        }
        catch ( ParseException $e )
        {
            return '';
        }
    }
}

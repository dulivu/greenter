<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 22/07/2017
 * Time: 15:38
 */

namespace Greenter\Ws\Reader;

use Greenter\Model\Response\CdrResponse;

/**
 * Interface CdrReader
 * @package Greenter\Ws\Reader
 */
interface CdrReader
{
    /**
     * Get Cdr using DomDocument.
     *
     * @param string $xml
     * @return CdrResponse
     */
    public function getCdrResponse($xml);
}
<?php

namespace digicatech\ResellerClub\APIs;

use Exception;
use digicatech\ResellerClub\Helper;

/**
 * Class Dns
 *
 * @package digicatech\ResellerClub\APIs
 */
class Dns
{
    use Helper;

    /**
     * @var string
     */
    protected $api = 'dns';

    /**
     * Searching DNS Records
     *
     * @param String $domainName
     * @param String $type
     * @param int $numberOfRecords
     * @param int $pageNo
     * @param String $host
     * @param String $value
     *
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/searching-dns-records-api
     */
    public function searchDns($domainName , $type , $numberOfRecords , $pageNo , $host = "" , $value = "")
    {
        return $this->get(
            'manage/search-records',
            [
                'domain-name'   => $domainName ,
                'type'          => $type,
                'no-of-records' => $numberOfRecords,
                'page-no'       => $pageNo,
                'host'          => $host,
                'value'         => $value

            ]
        );
    }

    
}

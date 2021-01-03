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
    
    /**
     * Adds a Canonical (CNAME) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     * @param int $ttl
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/adding-cname-record-api
     */
    public function addCnameRecord($domainName , $value , $host ="" , $ttl = 14400)
    {
        return $this->get(
            'manage/add-cname-record',
            [
                'domain-name'   => $domainName ,
                'value'         => $value,
                'host'          => $host,
                'ttl'           => $ttl

            ]
        );
    }


    
}

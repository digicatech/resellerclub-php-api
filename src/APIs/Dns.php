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
     * Activates the DNS service.
     *
     * @param int $orderid

     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/activating-the-dns-service-api
     */
    public function activateDns($orderid)
    {
        return $this->get(
            'activate',
            [
                'order-id'   => $orderid 
            ]
        );
    }


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
     * 
     * ============================
     * Add Functions
     * ============================
     */


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



    /**
     * Adds an IPv4 Address (A) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     * @param int $ttl
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/adding-ipv4-address-record-api
     */
    public function addIpv4Record($domainName , $value , $host ="" , $ttl = 14400)
    {
        return $this->get(
            'manage/add-ipv4-record',
            [
                'domain-name'   => $domainName ,
                'value'         => $value,
                'host'          => $host,
                'ttl'           => $ttl

            ]
        );
    }



    /**
     * Adds an IPv6 Address (AAAA) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     * @param int $ttl
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/adding-ipv6-address-record-api
     */
    public function addIpv6Record($domainName , $value , $host ="" , $ttl = 14400)
    {
        return $this->get(
            'manage/add-ipv6-record',
            [
                'domain-name'   => $domainName ,
                'value'         => $value,
                'host'          => $host,
                'ttl'           => $ttl

            ]
        );
    }


    /**
     * Adds a Mail Exchanger (MX) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     * @param int $ttl
     * @param int priority
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/adding-mx-record-api
     */
    public function addMxRecord($domainName , $value , $host ="" , $ttl = 14400 , $priority = 10)
    {
        return $this->get(
            'manage/add-mx-record',
            [
                'domain-name'   => $domainName ,
                'value'         => $value,
                'host'          => $host,
                'ttl'           => $ttl,
                'priority'      => $priority

            ]
        );
    }


    /**
     * Adds a Name Server (NS) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     * @param int $ttl
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/adding-ns-record-api
     */
    public function addNsRecord($domainName , $value , $host ="" , $ttl = 14400)
    {
        return $this->get(
            'manage/add-ns-record',
            [
                'domain-name'   => $domainName ,
                'value'         => $value,
                'host'          => $host,
                'ttl'           => $ttl

            ]
        );
    }


    /**
     * Adds a Text (TXT) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     * @param int $ttl
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/adding-txt-record-api
     */
    public function addTxtRecord($domainName , $value , $host ="" , $ttl = 14400)
    {
        return $this->get(
            'manage/add-txt-record',
            [
                'domain-name'   => $domainName ,
                'value'         => $value,
                'host'          => $host,
                'ttl'           => $ttl

            ]
        );
    }


    



    /**
     * Adds a Service (SRV) record.
     *
     * @param String $domainName
     * @param String $currentValue
     * @param String $host
     * @param String $newValue
     * @param int $ttl
     * @param int $priority 
     * @param int $port
     * @param int $weight
     * 
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/adding-srv-record-api
     */
    public function addSrvRecord($domainName , $value , $host =null , $ttl = 14400 , $priority=null , $port = null , $weight = null)
    {
        return $this->get(
            'manage/add-srv-record',
            [
                'domain-name'   => $domainName ,
                'value'         => $value,
                'host'          => $host,
                'ttl'           => $ttl,
                'priority'      => $priority,
                'port'          => $port,
                'weight'        => $weight
            ]
        );
    }


    /**
     * ===========================
     * Modify Functions
     * ===========================
     */
    
    
    
    /**
     * Modifies an IPv4 Address (A) record.
     *
     * @param String $domainName
     * @param String $currentValue
     * @param String $host
     * @param String $newValue
     * @param int $ttl
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/modifying-ipv4-address-record-api
     */
    public function updateIpv4Record($domainName , $currentValue , $newValue , $host ="" , $ttl = 14400)
    {
        return $this->get(
            'manage/update-ipv4-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'current-value' => $currentValue,
                'new-value'     => $newValue,
                'ttl'           => $ttl

            ]
        );
    }

    /**
     * Modifies an IPv6 (AAAA) record.
     *
     * @param String $domainName
     * @param String $currentValue
     * @param String $host
     * @param String $newValue
     * @param int $ttl
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/modifying-ipv6-address-record-api
     */
    public function updateIpv6Record($domainName , $currentValue , $newValue , $host ="" , $ttl = 14400)
    {
        return $this->get(
            'manage/update-ipv6-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'current-value' => $currentValue,
                'new-value'     => $newValue,
                'ttl'           => $ttl

            ]
        );
    }



    /**
     * Modifies a Canonical (CNAME) record.
     *
     * @param String $domainName
     * @param String $host
     * @param String $currentValue
     * @param String $newValue
     * @param int $ttl
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/modifying-cname-record-api
     */
    public function updateCnameRecord($domainName , $currentValue , $newValue , $host ="" , $ttl = 14400)
    {
        return $this->get(
            'manage/update-cname-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'current-value' => $currentValue,
                'new-value'     => $newValue,
                'ttl'           => $ttl
            ]
        );
    }


     /**
     * Modifies a Mail Exchanger (MX) record.
     *
     * @param String $domainName
     * @param String $host
     * @param String $currentValue
     * @param String $newValue
     * @param int $ttl
     * @param int $priority
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/modifying-mx-record-api
     */
    public function updateMxRecord($domainName , $currentValue , $newValue , $host ="" , $ttl = 14400 , $priority = 10)
    {
        return $this->get(
            'manage/update-mx-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'current-value' => $currentValue,
                'new-value'     => $newValue,
                'ttl'           => $ttl,
                'priority'      => $priority
            ]
        );
    }



    /**
     * Modifies a Name Server (NS) record.
     *
     * @param String $domainName
     * @param String $host
     * @param String $currentValue
     * @param String $newValue
     * @param int $ttl
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/modifying-ns-record-api
     */
    public function updateNsRecord($domainName , $currentValue , $newValue , $host ="" , $ttl = 14400)
    {
        return $this->get(
            'manage/update-ns-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'current-value' => $currentValue,
                'new-value'     => $newValue,
                'ttl'           => $ttl
            ]
        );
    }



    /**
     * Modifies a Text (TXT) record.
     *
     * @param String $domainName
     * @param String $host
     * @param String $currentValue
     * @param String $newValue
     * @param int $ttl
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/modifying-txt-record-api
     */
    public function updateTxtRecord($domainName , $currentValue , $newValue , $host ="" , $ttl = 14400)
    {
        return $this->get(
            'manage/update-txt-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'current-value' => $currentValue,
                'new-value'     => $newValue,
                'ttl'           => $ttl
            ]
        );
    }



    /**
     * Modifies a Service (SRV) record.
     *
     * @param String $domainName
     * @param String $host
     * @param String $currentValue
     * @param String $newValue
     * @param int $ttl
     * @param int $priority 
     * @param int $port
     * @param int $weight
     * 
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/modifying-srv-record-api
     */
    public function updateSrvRecord($domainName , $currentValue , $newValue, $host =null , $ttl = 14400 , $priority=null , $port = null , $weight = null)
    {
        return $this->get(
            'manage/update-srv-record',
            [
                'domain-name'   => $domainName ,
                'current-value' => $currentValue,
                'new-value'     => $newValue,
                'host'          => $host,
                'ttl'           => $ttl,
                'priority'      => $priority,
                'port'          => $port,
                'weight'        => $weight
            ]
        );
    }


    /**
     * Modifies a Start of Authority (SOA) record.
     *
     * @param String $domainName
     * @param String $responsiblePerson
     * @param int $refresh
     * @param int $retry
     * @param int $expire
     * @param int $ttl
     * 
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/modifying-soa-record-api
     */
    public function updateSoaRecord($domainName , $responsiblePerson , $refresh ,$retry ,$expire ,$ttl)
    {
        return $this->get(
            'manage/update-soa-record',
            [
                'domain-name'           => $domainName ,
                'responsible-person'    => $responsiblePerson,
                'refresh'               => $refresh,
                'retry'                 => $retry,
                'expire'                => $expire,
                'ttl'                   => $ttl
            ]
        );
    }


    




    /**
     * 
     * ==========================
     * Delete Functions
     * ==========================
     */



    /**
     * Deletes an IPv4 Address (A) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/deleting-ipv4-address-record-api
     */
    public function deleteIpv4Record($domainName , $host , $value)
    {
        return $this->get(
            'manage/delete-ipv4-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'value'         => $value
            ]
        );
    }


    /**
     * Deletes an IPv6 Address (AAAA) record
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/deleting-ipv6-address-record-api
     */
    public function deleteIpv6Record($domainName , $host , $value)
    {
        return $this->get(
            'manage/delete-ipv6-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'value'         => $value
            ]
        );
    }



    /**
     * Deletes a Canonical (CNAME) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/deleting-cname-record-api
     */
    public function deleteCnameRecord($domainName , $host , $value)
    {
        return $this->get(
            'manage/delete-cname-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'value'         => $value
            ]
        );
    }


    /**
     * Deletes a Name Server (NS) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/deleting-ns-record-api
     */
    public function deleteNsRecord($domainName , $host , $value)
    {
        return $this->get(
            'manage/delete-ns-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'value'         => $value
            ]
        );
    }


    /**
     * Deletes a Text (TXT) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/deleting-txt-record-api
     */
    public function deleteTxtRecord($domainName , $host , $value)
    {
        return $this->get(
            'manage/delete-txt-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'value'         => $value
            ]
        );
    }
    
    
    
    /**
     * Deletes a Text (MX) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     *
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/deleting-mx-record-api
     */
    public function deleteMxRecord($domainName , $host , $value)
    {
        return $this->get(
            'manage/delete-txt-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'value'         => $value
            ]
        );
    }
    
    



    /**
     * Deletes a Service (SRV) record.
     *
     * @param String $domainName
     * @param String $value
     * @param String $host
     * @param int $port
     * @param int $weight
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/deleting-txt-record-api
     */
    public function deleteSrvRecord($domainName , $host, $value , $port ,$weight)
    {
        return $this->get(
            'manage/delete-srv-record',
            [
                'domain-name'   => $domainName ,
                'host'          => $host,
                'value'         => $value,
                'port'          => $port,
                'weight'        => $weight
            ]
        );
    }




}

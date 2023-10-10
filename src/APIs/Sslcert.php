<?php
//https://resellerclub.webpropanel.com/kb/ssl-certificate-apis

namespace digicatech\ResellerClub\APIs;

use Exception;
use digicatech\ResellerClub\Helper;

/**
 * Class Sslcert
 *
 * @package digicatech\ResellerClub\APIs
 */
class Sslcert
{
    use Helper;

    protected $api = 'sslcert';


    /**
     * Places an SSL Certificate order for the specified Domain Name.
     *
     * @param string  $domainname
     * @param int     $months
     * @param int     $customerid
     * @param int     $planid
     * @param string  $invoiceoption Available options [NoInvoice, PayInvoice, KeepInvoice, OnlyAdd]
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-add-api
     *
     */
    public function add($domainname, $months, $customerid, $planid, $invoiceoption)
    {
        return $this->post('add', [
            'domain-name' => $domainname,
            'months' => $months,
            'customer-id' => $customerid,
            'plan-id' => $planid,
            'invoice-option' => $invoiceoption
        ]);
    }


    /**
     * Places an SSL Certificate order for the specified Domain Name.
     *
     * @param int       $authUserId
     * @param string    $apiKey
     * @param int       $orderId
     * @param string    $csr
     * @param string    $verificationMethod Available options [email, cname, http]
     * @param string    $verificationEmail
     * @param string    $dba optional
     * @param string    $address optional
     * @param string    $zip optional
     * @param string    $countryOfIncorporation optional
     * @param string    $appRepEmail optional
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-enroll-api
     *
     */
    public function enroll($authUserId, $apiKey, $orderId, $csr, $verificationMethod, $verificationEmail, $dba = "", $address = "", $zip = "", $countryOfIncorporation, $appRepEmail)
    {
        return $this->post('enroll', [
            'auth-userid' => $authUserId,
            'api-key' => $apiKey,
            'order-id' => $orderId,
            'csr' => $csr,
            'verification-method' => $verificationMethod,
            'verification-email' => $verificationEmail,
            'dba' => $dba,
            'address' => $address,
            'zip' => $zip,
            'country-of-incorporation' => $countryOfIncorporation,
            'app-rep-email' => $appRepEmail
        ]);
    }

    /**
     * Reissues an existing SSL Certificate.
     *
     * @param int       $authUserId
     * @param string    $apiKey
     * @param int       $orderId
     * @param string    $csr
     * @param string    $verificationMethod Available options [email, cname, http]
     * @param string    $verificationEmail
     * @param string    $address optional
     * @param string    $zip optional
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-reissue-api
     *
     */
    public function reissue($authUserId, $apiKey, $orderId, $csr, $verificationMethod, $verificationEmail, $address = "", $zip = "")
    {
        return $this->post('reissue', [
            'auth-userid' => $authUserId,
            'api-key' => $apiKey,
            'order-id' => $orderId,
            'csr' => $csr,
            'verification-method' => $verificationMethod,
            'verification-email' => $verificationEmail,
            'address' => $address,
            'zip' => $zip,
        ]);
    }


    /**
     * Renews an existing SSL Certificate order.
     *
     * @param int       $authUserId
     * @param string    $apiKey
     * @param int       $orderId
     * @param int       $months
     * @param string  $invoiceoption Available options [NoInvoice, PayInvoice, KeepInvoice, OnlyAdd]
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-renew-api
     *
     */
    public function renew($authUserId, $apiKey, $orderId, $months, $invoiceoption)
    {
        return $this->post('renew', [
            'auth-userid' => $authUserId,
            'api-key' => $apiKey,
            'order-id' => $orderId,
            'months' => $months,
            'invoice-option' => $invoiceoption
        ]);
    }

    /**
     * Deletes the specified SSL Certificate order.
     *
     * @param int       $authUserId
     * @param string    $apiKey
     * @param int       $orderId
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-delete-api
     *
     */
    public function delete($authUserId, $apiKey, $orderId)
    {
        return $this->post('delete', [
            'auth-userid' => $authUserId,
            'api-key' => $apiKey,
            'order-id' => $orderId
        ]);
    }

    public function search()
    {
        return $this->post('search', [

        ]);
    }


    /**
     * Returns the SSL Certificate order id associated with the Domain Name.
     *
     * @param int       $authUserId
     * @param string    $apiKey
     * @param int       $orderId
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-get-order-id-api
     *
     */
    public function getOrderId($authUserId, $apiKey, $orderId)
    {
        return $this->get('orderid', [
            'auth-userid' => $authUserId,
            'api-key' => $apiKey,
            'order-id' => $orderId
        ]);
    }


    /**
     * Gets details of the specified SSL Certificate order.
     *
     * @param int       $authUserId
     * @param string    $apiKey
     * @param int       $orderId
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-get-details-api
     *
     */
    public function getDetails($authUserId, $apiKey, $orderId)
    {
        return $this->get('details', [
            'auth-userid' => $authUserId,
            'api-key' => $apiKey,
            'order-id' => $orderId
        ]);
    }

    /**
     * Gets details of the specified SSL Certificate order.
     *
     * @param int       $authUserId
     * @param string    $apiKey
     * @param int       $orderId
     * @param string    $newVerificationEmail
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-change-verification-email-api
     *
     */
    public function changeVerificationEmail($authUserId, $apiKey, $orderId, $newVerificationEmail)
    {
        return $this->post('change-verification-email', [
            'auth-userid' => $authUserId,
            'api-key' => $apiKey,
            'order-id' => $orderId,
            'new-verification-email' => $newVerificationEmail
        ]);
    }

    /**
     * Gets details of the specified SSL Certificate.
     *
     * @param int       $authUserId
     * @param string    $apiKey
     * @param int       $orderId
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-get-certificate-details-api
     *
     */
    public function getCertificateDetails($authUserId, $apiKey, $orderId)
    {
        return $this->get('get-cert-details', [
            'auth-userid' => $authUserId,
            'api-key' => $apiKey,
            'order-id' => $orderId
        ]);
    }

    /**
     * Changes the verification method
     *
     * @param int       $authUserId
     * @param string    $apiKey
     * @param int       $orderId
     * @param string    $verificationEmail
     * @param string    $verificationMethod Available options [email, cname, http]
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-change-verification-method
     *
     */
    public function changeVerificationMethod($authUserId, $apiKey, $orderId, $newVerificationEmail, $verificationMethod)
    {
        return $this->post('change-verification-method', [
            'auth-userid' => $authUserId,
            'api-key' => $apiKey,
            'order-id' => $orderId,
            'verification-email' => $newVerificationEmail,
            'verification-method' => $verificationMethod
        ]);
    }

     /**
     * Validates the CSR for a domain name.
     *
     * @param int       $authUserId
     * @param string    $apiKey
     * @param int       $orderId
     * @param string    $csr
     * @param string    $domainname 
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/ssl-certificates-validate-csr
     *
     */
    public function validateCSR($authUserId, $apiKey, $orderId, $csr, $domainname)
    {
        return $this->post('validate-csr', [
            'auth-userid' => $authUserId,
            'api-key' => $apiKey,
            'order-id' => $orderId,
            'csr' => $csr,
            'domainname' => $domainname
        ]);
    }


}
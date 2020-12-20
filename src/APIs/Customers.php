<?php

namespace digicatech\ResellerClub\APIs;

use Exception;
use digicatech\ResellerClub\Helper;
use SimpleXMLElement;

/**
 * Class Customers
 *
 * @package digicatech\ResellerClub\APIs
 */
class Customers
{
    use Helper;

    /**
     * @var string
     */
    protected $api = 'customers';

    /**
     * Changes the password for the specified Customer.
     *
     * @param int    $customerId
     * @param string $newPassword
     *
     * @return array|Exception
     * @throws Exception
     * @link https://manage.logicboxes.com/kb/node/806
     */
    public function changePassword($customerId, $newPassword)
    {
        return $this->post(
            'change-password',
            ['customer-id' => $customerId, 'new-passwd' => $newPassword]
        );
    }

    /**
     * Gets the Customer details for the specified Customer Username.
     *
     * @param string $username
     *
     * @return array|Exception
     * @throws Exception
     * @link https://manage.logicboxes.com/kb/node/874
     */
    public function details($username)
    {
        return $this->get('details', ['username' => $username]);
    }

    /**
     * Gets the Customer details for the specified Customer Id.
     *
     * @param int $customerId
     *
     * @return array|Exception
     * @throws Exception
     * @link https://manage.logicboxes.com/kb/node/967
     */
    public function detailsById($customerId)
    {
        return $this->get('details-by-id', ['customer-id' => $customerId]);
    }




    /**
     * Authenticates the Customer and returns the Customer details, if authenticated.
     *
     * @param string $username
     * @param string $password
     *
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/authenticate-customer-api
     */
    public function authenticate($username , $password )
    {
        return $this->get('authenticate', ['username' => $username , 'passwd' => $password]);
    }



    /**
     * Authenticates a Customer by returning an authentication token on successful authentication.
     *
     * @param string $username
     * @param string $password
     *
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/generate-customer-token-api
     */
    public function generateToken($username , $password , $ip)
    {
        return $this->get('generate-token', ['username' => $username , 'passwd' => $password ,'ip' => $ip]);
    }


    
    /**
     * Authenticates the token generated by the Generate Token method and returns the Customer details, if authenticated.
     *
     * @param string $token
     *
     * @return array|Exception
     * @throws Exception
     * @link https://resellerclub.webpropanel.com/kb/authenticate-customer-token-api
     */
    public function authenticateToken($token)
    {
        return $this->get('authenticate-token', ['token' => $token]);
    }







    /**
     * Modifies the Account details of the specified Customer.
     *
     * @param int    $customerId
     * @param string $username
     * @param string $name
     * @param string $company
     * @param string $address
     * @param string $city
     * @param string $state
     * @param string $country
     * @param string $zipCode
     * @param string $phoneCC
     * @param string $phone
     * @param string $lang
     *
     * @return array|Exception
     * @throws Exception
     * @link https://manage.logicboxes.com/kb/node/805
     * @todo Check documents there is some updates in this method parameters
     */
    public function modify(
        $customerId,
        $username,
        $name,
        $company,
        $address,
        $address2,
        $address3,
        $city,
        $state,
        $country,
        $zipCode,
        $phoneCC,
        $phone,
        $mobileCC,
        $mobile,
        $lang
    ) {
        return $this->post(
            'modify',
            [
                'customer-id'       => $customerId,
                'username'          => $username,
                'name'              => $name,
                'company'           => $company,
                'address-line-1'    => $address,
                'address-line-2'    => $address2,
                'address-line-3'    => $address3,
                'city'              => $city,
                'state'             => $state,
                'country'           => $country,
                'zipcode'           => $zipCode,
                'phone-cc'          => $phoneCC,
                'phone'             => $phone,
                'mobile-cc'         => $mobileCC,
                'mobile'            => $mobile,
                'lang-pref'      => $lang,
            ]
        );
    }

    /**
     * Creates a Customer Account using the details provided.
     *
     * @param string $username
     * @param string $passwd
     * @param string $name
     * @param string $company
     * @param string $address
     * @param string $city
     * @param string $state
     * @param string $country
     * @param string $zipCode
     * @param string $phoneCC
     * @param string $phone
     * @param string $lang
     *
     * @return array|Exception
     * @throws Exception
     * @link https://manage.logicboxes.com/kb/node/804
     * @todo Check documents there is some updates in this method parameters
     */
    public function signup(
        $username,
        $passwd,
        $name,
        $company,
        $address,
        $city,
        $state,
        $country,
        $zipCode,
        $phoneCC,
        $phone,
        $lang
    ) {
        return $this->post(
            'signup',
            [
                'username'       => $username,
                'passwd'         => $passwd,
                'name'           => $name,
                'company'        => $company,
                'address-line-1' => $address,
                'city'           => $city,
                'state'          => $state,
                'country'        => $country,
                'zipcode'        => $zipCode,
                'phone-cc'       => $phoneCC,
                'phone'          => $phone,
                'lang-pref'      => $lang,
            ]
        );
    }

    /**
     * Generates a temporary password for the specified Customer. The generated password is valid only for 3 days.
     *
     * @param int $customerId
     *
     * @return array|Exception
     * @throws Exception
     */
    public function tempPassword($customerId)
    {
        return $this->get('temp-password', ['customer-id' => $customerId]);
    }
}

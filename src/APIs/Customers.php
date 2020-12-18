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
        $city,
        $state,
        $country,
        $zipCode,
        $phoneCC,
        $phone,
        $lang
    ) {
        return $this->post(
            'modify',
            [
                'customer-id'    => $customerId,
                'username'       => $username,
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

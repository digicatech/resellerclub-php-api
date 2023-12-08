<?php

namespace digicatech\ResellerClub\APIs;

use Exception;
use digicatech\ResellerClub\Helper;

/**
 * Class Billing
 *
 * @package digicatech\ResellerClub\APIs
 */
class Billing
{
    use Helper;

    /**
     * @var string
     */
    protected $api = 'billing';

    /**
     * Gets the transaction details for the specified Customer Id.
     *
     * @param int $customerId
     *
     * @return array|Exception
     * @throws Exception
     * @link https://manage.logicboxes.com/kb/node/868
     */
    public function customerTransactions($customerId)
    {
        return $this->get(
            'customer-transactions',
            ['customer-id' => $customerId]
        );
    }

    /**
     * @param int    $records
     * @param int    $page
     * @param array  $customerId
     * @param array  $username
     * @param array  $transactionType
     * @param string $transactionKey
     * @param array  $transactionId
     * @param string $transactionDescription
     * @param string $balanceType
     * @param int    $amtRangeStart
     * @param int    $amtRangeEnd
     * @param string $transactionDateStart
     * @param string $transactionDateEnd
     * @param string $orderBy
     *
     * @return array|Exception
     * @throws Exception
     * @link https://manage.logicboxes.com/kb/node/964
     */
    public function search(
        $records = 10,
        $page = 1,
        $customerId = [],
        $username = [],
        $transactionType = [],
        $transactionKey = '',
        $transactionId = [],
        $transactionDescription = '',
        $balanceType = '',
        $amtRangeStart = 0,
        $amtRangeEnd = 0,
        $transactionDateStart = '',
        $transactionDateEnd = '',
        $orderBy = ''
    ) {
        $data = $this->fillParameters(
            [
                'no-of-records'           => $records,
                'page-no'                 => $page,
                'customer-id'             => $customerId,
                'username'                => $username,
                'transaction-type'        => $transactionType,
                'transaction-key'         => $transactionKey,
                'transaction-id'          => $transactionId,
                'transaction-description' => $transactionDescription,
                'balance-type'            => $balanceType,
                'amt-range-start'         => $amtRangeStart,
                'amt-range-end'           => $amtRangeEnd,
                'transaction-date-start'  => $transactionDateStart,
                'transaction-date-end'    => $transactionDateEnd,
                'order-by'                => $orderBy,
            ]
        );

        return $this->get('search', $data, 'customer-transactions/');
    }


    /**
     * Gets the Available Balance of the specified Customer.
     * 
     * @param int    $customerId
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://manage.resellerclub.com/kb/answer/872
    */
    public function customerBalance($customerId)
    {
        return $this->get('customer-balance', ['customer-id' => $customerId]);
    }


    /**
     * Adds funds in a Customer's Account.
     * 
     * @param int    $customerId Customer Id of the Customer in whose Debit Account these funds are to be added
     * @param float $amount Amount to be added
     * @param string $description Description for the Transaction
     * @param string transaction-type  Type of the Transaction. Possible values can be credit or receipt.
     * @param string $transaction-key A unique Transaction key
     * @param boolean $update-total-receipt Possible values are true or false. Pass true if the amount needs to be added to the Total Receipts figure of the Customer.
     * 
     * @return array|Exception
     * @throws Exception
     * @link https://manage.resellerclub.com/kb/answer/1152
    */
    public function addCustomerFund($customerId , $amount , $description,$transactionType,$transactionKey,$updateTotalReceipt = true)
    {
        return $this->post('add-customer-fund', 
            [
                'customer-id' => $customerId,
                'amount' => $amount,
                'description' => $description,
                'transaction-type' => $transactionType,
                'transaction-key' => $transactionKey,
                'update-total-receipt' => $updateTotalReceipt
            ]);
    }
}

<?php
/**
 * @package Nekofar\Nobitex
 *
 * @author Milad Nekofar <milad@nekofar.com>
 */

namespace Nekofar\Nobitex\Model;

/**
 * Class Withdraw
 */
class Withdraw
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $blockchainUrl;
    /**
     * @var bool
     */
    public $isCancelable;
    /**
     * @var string
     */
    public $status;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var \DateTime
     */
    public $createdAt;
    /**
     * @var int
     */
    public $walletId;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var string
     */
    public $address;

    /**
     * @param object $object
     * @param string $propName
     * @param mixed $jsonValue
     *
     * @throws \Exception
     */
    public static function setUndefinedProperty($object, $propName, $jsonValue)
    {
        if ('blockchain_url' === $propName) {
            $object->{'blockchainUrl'} = $jsonValue;
        }

        if ('is_cancelable' === $propName) {
            $object->{'isCancelable'} = $jsonValue;
        }

        if ('wallet_id' === $propName) {
            $object->{'walletId'} = $jsonValue;
        }
    }
}

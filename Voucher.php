<?php

class Voucher {

    /**
     * Length of the voucher code
     */
    const CODE_LENGTH = 6;

    /**
     * The voucher's id
     * @var int
     */
    private $id = null;

    /**
     * The voucher's code
     * @var string
     */
    private $code = null;

    /**
     * The date the voucher was issued
     * @var DateTime
     */
    private $issued = null;

    /**
     * The date the voucher expires (null if it doesn't)
     * @var DateTime
     */
    private $expires = null;

    /**
     * The date the voucher was redeemed (null if not redeemed)
     * @var DateTime
     */
    private $redeemed = null;

    /**
     * The voucher's value
     * @var int
     */
    private $value = null;

    /**
     * Voucher constructor.
     *
     * @param int $value
     * @param DateTime $expires
     */
    function __construct($value = null, $expires = null)
    {
        $this->value = $value;
        $this->expires = $expires;
        $this->create_code(self::CODE_LENGTH);
    }

    /**
     * Generates a random voucher code.
     *
     * @param $length int
     */
    private function create_code($length) {

        $code = "";
        $characters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");

        for ($i=0; $i<$length; $i++) {

            $r = rand(0, sizeof($characters) - 1);
            $code .= $characters[$r];

        }

        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return DateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * @param DateTime $issued
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
    }

    /**
     * @return DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param DateTime $expires
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
    }

    /**
     * @return DateTime
     */
    public function getRedeemed()
    {
        return $this->redeemed;
    }

    /**
     * @param DateTime $redeemed
     */
    public function setRedeemed($redeemed)
    {
        $this->redeemed = $redeemed;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


}
<?php

class VoucherTemplate {

    /** Values for fpdf's paper size */
    const PAPER_SIZE_A4 = "A4";
    const PAPER_SIZE_A5 = "A5";

    /** Values for the barcode's position */
    const BARCODE_POS_TOP_RIGHT = "top-right";
    const BARCODE_POS_BOTTOM_RIGHT = "bottom-right";
    const BARCODE_POS_BOTTOM_LEFT = "bottom-left";
    const BARCODE_POS_TOP_LEFT = "top-left";

    /**
     * @var int
     */
    private $id;

    /**
     * @var string The templates name
     */
    private $name;

    /**
     * @var string The templates background image path
     */
    private $image;

    /**
     * @var int The template
     */
    private $productPostId;

    /**
     * @var string The barcodes position in the fpdf file
     */
    private $barcodePos;

    /**
     * @var string FPDF's paper size
     */
    private $paperSize;

    /**
     * @var bool True marks the template as deleted
     */
    private $deleted;

    /**
     * @var DateTime
     */
    private $created;

    public function __construct()
    {
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
     * @return DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getProductPostId()
    {
        return $this->productPostId;
    }

    /**
     * @param int $productPostId
     */
    public function setProductPostId($productPostId)
    {
        $this->productPostId = $productPostId;
    }

    /**
     * @return string
     */
    public function getBarcodePos()
    {
        return $this->barcodePos;
    }

    /**
     * @param string $barcodePos
     */
    public function setBarcodePos($barcodePos)
    {
        $this->barcodePos = $barcodePos;
    }

    /**
     * @return string
     */
    public function getPaperSize()
    {
        return $this->paperSize;
    }

    /**
     * @param string $paperSize
     */
    public function setPaperSize($paperSize)
    {
        $this->paperSize = $paperSize;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }



}
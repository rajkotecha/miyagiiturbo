<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Miyagiiu
 */
class Miyagiiu
{
    /**
     * @var integer
     */
    private $miyagiiuId;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var \DateTime
     */
    private $miyagiiuCreatedAt;


    /**
     * Get miyagiiuId
     *
     * @return integer 
     */
    public function getMiyagiiuId()
    {
        return $this->miyagiiuId;
    }

    /**
     * Set apiKey
     *
     * @param string $apiKey
     * @return Miyagiiu
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get apiKey
     *
     * @return string 
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set miyagiiuCreatedAt
     *
     * @param \DateTime $miyagiiuCreatedAt
     * @return Miyagiiu
     */
    public function setMiyagiiuCreatedAt($miyagiiuCreatedAt)
    {
        $this->miyagiiuCreatedAt = $miyagiiuCreatedAt;

        return $this;
    }

    /**
     * Get miyagiiuCreatedAt
     *
     * @return \DateTime 
     */
    public function getMiyagiiuCreatedAt()
    {
        return $this->miyagiiuCreatedAt;
    }
}

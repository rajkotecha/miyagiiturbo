<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Miyagiiu
 *
 * @ORM\Table(name="miyagiiu")
 * @ORM\Entity
 */
class Miyagiiu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="miyagiiu_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $miyagiiuId;

    /**
     * @var string
     *
     * @ORM\Column(name="api_key", type="string", length=128, nullable=true)
     */
    private $apiKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="miyagiiu_created_at", type="datetime", nullable=false)
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

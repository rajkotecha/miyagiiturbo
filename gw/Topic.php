<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Topic
 *
 * @ORM\Table(name="topic", uniqueConstraints={@ORM\UniqueConstraint(name="topic_name_UNIQUE", columns={"topic_name"})})
 * @ORM\Entity
 */
class Topic extends \MiyagiiEntityBase
{
    /**
     * @var string
     *
     * @ORM\Column(name="topic_name", type="string", length=128, nullable=false)
     */
    protected $topicName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="topic_created_at", type="datetime", nullable=false)
     */
    protected $topicCreatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="topic_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $topicId;


    /**
     * Set topicName
     *
     * @param string $topicName
     * @return Topic
     */
    public function setTopicName($topicName)
    {
        $this->topicName = $topicName;

        return $this;
    }

    /**
     * Get topicName
     *
     * @return string 
     */
    public function getTopicName()
    {
        return $this->topicName;
    }

    /**
     * Set topicCreatedAt
     *
     * @param \DateTime $topicCreatedAt
     * @return Topic
     */
    public function setTopicCreatedAt($topicCreatedAt)
    {
        $this->topicCreatedAt = $topicCreatedAt;

        return $this;
    }

    /**
     * Get topicCreatedAt
     *
     * @return \DateTime 
     */
    public function getTopicCreatedAt()
    {
        return $this->topicCreatedAt;
    }

    /**
     * Get topicId
     *
     * @return integer 
     */
    public function getTopicId()
    {
        return $this->topicId;
    }
}

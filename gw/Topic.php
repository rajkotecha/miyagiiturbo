<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Topic
 *
 * @ORM\Table(name="topic", uniqueConstraints={@ORM\UniqueConstraint(name="topic_name_UNIQUE", columns={"topic_name"})})
 * @ORM\Entity
 */
class Topic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="topic_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $topicId;

    /**
     * @var string
     *
     * @ORM\Column(name="topic_name", type="string", length=128, nullable=false)
     */
    private $topicName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="topic_created_at", type="datetime", nullable=false)
     */
    private $topicCreatedAt;


    /**
     * Get topicId
     *
     * @return integer 
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

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
}

<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * LessonTopic
 *
 * @ORM\Table(name="lesson_topic")
 * @ORM\Entity
 */
class LessonTopic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lesson_topic_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lessonTopicId;

    /**
     * @var integer
     *
     * @ORM\Column(name="lesson_id", type="integer", nullable=false)
     */
    private $lessonId;

    /**
     * @var integer
     *
     * @ORM\Column(name="topic_id", type="integer", nullable=false)
     */
    private $topicId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="topic_created_at", type="datetime", nullable=false)
     */
    private $topicCreatedAt;


    /**
     * Get lessonTopicId
     *
     * @return integer 
     */
    public function getLessonTopicId()
    {
        return $this->lessonTopicId;
    }

    /**
     * Set lessonId
     *
     * @param integer $lessonId
     * @return LessonTopic
     */
    public function setLessonId($lessonId)
    {
        $this->lessonId = $lessonId;

        return $this;
    }

    /**
     * Get lessonId
     *
     * @return integer 
     */
    public function getLessonId()
    {
        return $this->lessonId;
    }

    /**
     * Set topicId
     *
     * @param integer $topicId
     * @return LessonTopic
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;

        return $this;
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

    /**
     * Set topicCreatedAt
     *
     * @param \DateTime $topicCreatedAt
     * @return LessonTopic
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

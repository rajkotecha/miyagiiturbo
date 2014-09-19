<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * LessonType
 */
class LessonType
{
    /**
     * @var integer
     */
    private $lessonTypeId;

    /**
     * @var string
     */
    private $lessonTypeName;

    /**
     * @var \DateTime
     */
    private $lessonCreatedAt;


    /**
     * Get lessonTypeId
     *
     * @return integer 
     */
    public function getLessonTypeId()
    {
        return $this->lessonTypeId;
    }

    /**
     * Set lessonTypeName
     *
     * @param string $lessonTypeName
     * @return LessonType
     */
    public function setLessonTypeName($lessonTypeName)
    {
        $this->lessonTypeName = $lessonTypeName;

        return $this;
    }

    /**
     * Get lessonTypeName
     *
     * @return string 
     */
    public function getLessonTypeName()
    {
        return $this->lessonTypeName;
    }

    /**
     * Set lessonCreatedAt
     *
     * @param \DateTime $lessonCreatedAt
     * @return LessonType
     */
    public function setLessonCreatedAt($lessonCreatedAt)
    {
        $this->lessonCreatedAt = $lessonCreatedAt;

        return $this;
    }

    /**
     * Get lessonCreatedAt
     *
     * @return \DateTime 
     */
    public function getLessonCreatedAt()
    {
        return $this->lessonCreatedAt;
    }
}

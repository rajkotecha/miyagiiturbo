<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Lesson
 */
class Lesson
{
    /**
     * @var integer
     */
    private $lessonId;

    /**
     * @var integer
     */
    private $lessonTypeId;

    /**
     * @var string
     */
    private $lessonPageurl;

    /**
     * @var string
     */
    private $lessonDetail;

    /**
     * @var \DateTime
     */
    private $lessonCreatedAt;


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
     * Set lessonTypeId
     *
     * @param integer $lessonTypeId
     * @return Lesson
     */
    public function setLessonTypeId($lessonTypeId)
    {
        $this->lessonTypeId = $lessonTypeId;

        return $this;
    }

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
     * Set lessonPageurl
     *
     * @param string $lessonPageurl
     * @return Lesson
     */
    public function setLessonPageurl($lessonPageurl)
    {
        $this->lessonPageurl = $lessonPageurl;

        return $this;
    }

    /**
     * Get lessonPageurl
     *
     * @return string 
     */
    public function getLessonPageurl()
    {
        return $this->lessonPageurl;
    }

    /**
     * Set lessonDetail
     *
     * @param string $lessonDetail
     * @return Lesson
     */
    public function setLessonDetail($lessonDetail)
    {
        $this->lessonDetail = $lessonDetail;

        return $this;
    }

    /**
     * Get lessonDetail
     *
     * @return string 
     */
    public function getLessonDetail()
    {
        return $this->lessonDetail;
    }

    /**
     * Set lessonCreatedAt
     *
     * @param \DateTime $lessonCreatedAt
     * @return Lesson
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

<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Lesson
 *
 * @ORM\Table(name="lesson")
 * @ORM\Entity
 */
class Lesson extends \MiyagiiEntityBase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lesson_type_id", type="integer", nullable=false)
     */
    protected $lessonTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="lesson_pageurl", type="string", length=2083, nullable=false)
     */
    protected $lessonPageurl;

    /**
     * @var string
     *
     * @ORM\Column(name="lesson_detail", type="text", nullable=false)
     */
    protected $lessonDetail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lesson_created_at", type="datetime", nullable=false)
     */
    protected $lessonCreatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="lesson_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $lessonId;


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

    /**
     * Get lessonId
     *
     * @return integer 
     */
    public function getLessonId()
    {
        return $this->lessonId;
    }
}

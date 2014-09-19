<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UserLesson
 *
 * @ORM\Table(name="user_lesson")
 * @ORM\Entity
 */
class UserLesson
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ulesson_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ulessonId;

    /**
     * @var integer
     *
     * @ORM\Column(name="miyagiiu", type="integer", nullable=false)
     */
    private $miyagiiu;

    /**
     * @var integer
     *
     * @ORM\Column(name="lesson_id", type="integer", nullable=false)
     */
    private $lessonId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ulesson_created_at", type="datetime", nullable=false)
     */
    private $ulessonCreatedAt;


    /**
     * Get ulessonId
     *
     * @return integer 
     */
    public function getUlessonId()
    {
        return $this->ulessonId;
    }

    /**
     * Set miyagiiu
     *
     * @param integer $miyagiiu
     * @return UserLesson
     */
    public function setMiyagiiu($miyagiiu)
    {
        $this->miyagiiu = $miyagiiu;

        return $this;
    }

    /**
     * Get miyagiiu
     *
     * @return integer 
     */
    public function getMiyagiiu()
    {
        return $this->miyagiiu;
    }

    /**
     * Set lessonId
     *
     * @param integer $lessonId
     * @return UserLesson
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
     * Set ulessonCreatedAt
     *
     * @param \DateTime $ulessonCreatedAt
     * @return UserLesson
     */
    public function setUlessonCreatedAt($ulessonCreatedAt)
    {
        $this->ulessonCreatedAt = $ulessonCreatedAt;

        return $this;
    }

    /**
     * Get ulessonCreatedAt
     *
     * @return \DateTime 
     */
    public function getUlessonCreatedAt()
    {
        return $this->ulessonCreatedAt;
    }
}

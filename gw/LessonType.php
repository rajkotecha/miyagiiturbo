<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * LessonType
 *
 * @ORM\Table(name="lesson_type", uniqueConstraints={@ORM\UniqueConstraint(name="lesson_type_name_UNIQUE", columns={"lesson_type_name"})})
 * @ORM\Entity
 */
class LessonType extends \MiyagiiEntityBase
{
    /**
     * @var string
     *
     * @ORM\Column(name="lesson_type_name", type="string", length=45, nullable=false)
     */
    protected $lessonTypeName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lesson_created_at", type="datetime", nullable=false)
     */
    protected $lessonCreatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="lesson_type_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $lessonTypeId;


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

    /**
     * Get lessonTypeId
     *
     * @return integer 
     */
    public function getLessonTypeId()
    {
        return $this->lessonTypeId;
    }
}

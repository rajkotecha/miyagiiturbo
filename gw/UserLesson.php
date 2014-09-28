<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UserLesson
 *
 * @ORM\Table(name="user_lesson", indexes={@ORM\Index(name="FK_USERID_idx", columns={"user_id"}), @ORM\Index(name="FK_LESSONID_idx", columns={"lesson_id"})})
 * @ORM\Entity
 */
class UserLesson extends \MiyagiiEntityBase
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ulesson_created_at", type="datetime", nullable=false)
     */
    protected $ulessonCreatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="ulesson_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $ulessonId;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    protected $user;

    /**
     * @var \Lesson
     *
     * @ORM\ManyToOne(targetEntity="Lesson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lesson_id", referencedColumnName="lesson_id")
     * })
     */
    protected $lesson;


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
     * Set user
     *
     * @param \User $user
     * @return UserLesson
     */
    public function setUser(\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set lesson
     *
     * @param \Lesson $lesson
     * @return UserLesson
     */
    public function setLesson(\Lesson $lesson = null)
    {
        $this->lesson = $lesson;

        return $this;
    }

    /**
     * Get lesson
     *
     * @return \Lesson 
     */
    public function getLesson()
    {
        return $this->lesson;
    }
}

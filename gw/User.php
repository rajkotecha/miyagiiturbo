<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends \MiyagiiEntityBase
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    protected $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    protected $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $userId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="UserLesson", mappedBy="user_id")
     */
    protected $UserLesson;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->UserLesson = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Add UserLesson
     *
     * @param \UserLesson $userLesson
     * @return User
     */
    public function addUserLesson(\UserLesson $userLesson)
    {
        $this->UserLesson[] = $userLesson;

        return $this;
    }

    /**
     * Remove UserLesson
     *
     * @param \UserLesson $userLesson
     */
    public function removeUserLesson(\UserLesson $userLesson)
    {
        $this->UserLesson->removeElement($userLesson);
    }

    /**
     * Get UserLesson
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserLesson()
    {
        return $this->UserLesson;
    }
}

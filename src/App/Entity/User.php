<?php
namespace App\Entity;

use DDD\Embeddable\Color;
use DDD\Embeddable\EmailAddress;
use DDD\Embeddable\Fullname;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var Fullname $fullname
     * @ORM\Embedded(class="DDD\Embeddable\Fullname")
     */
    protected $fullname;

    /**
     * @var EmailAddress $email
     * @ORM\Embedded(class="DDD\Embeddable\EmailAddress")
     */
    protected $email;

    /**
     * @var Color $defaultColor
     * @ORM\Embedded(class="DDD\Embeddable\Color")
     */
    protected $defaultColor;

    /**
     * Returns the role id.
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Fullname
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param Fullname $fullname
     */
    public function setFullname(Fullname $fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * @return EmailAddress
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param EmailAddress $email
     */
    public function setEmail(EmailAddress $email)
    {
        $this->email = $email;
    }

    /**
     * @return Color
     */
    public function getDefaultColor()
    {
        return $this->defaultColor;
    }

    /**
     * @param Color $defaultColor
     */
    public function setDefaultColor(Color $defaultColor)
    {
        $this->defaultColor = $defaultColor;
    }

    public function toArray()
    {
        return array(
            'id'       => $this->getId(),
            'fullname' => (string) $this->getFullname(),
            'email'    => (string) $this->getEmail(),
            'defaultColor' => $this->getDefaultColor() ? $this->getDefaultColor()->toArray() : null,
        );
    }
}

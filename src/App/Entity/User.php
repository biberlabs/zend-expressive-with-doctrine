<?php
namespace App\Entity;

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
     * @var string $roleName
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    protected $name;

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
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of user name.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function toArray()
    {
        return array(
            'id'   => $this->getId(),
            'name' => $this->getName(),
        );
    }
}

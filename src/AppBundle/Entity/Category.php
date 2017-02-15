<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Class Category
* @package AppBundle\Entity
* @ORM\Entity
* @ORM\Table(name="category")
*/
Class Category{

    /**
    * @ORM\id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;

    /**
    * @ORM\Column(type="string", unique=true)
    */
    private $name;

    /**
    * @ORM\OneToMany(targetEntity="Post", mappedBy="category")
    * @ORM\JoinColumn(nullable=false)
    */
    private $post;


    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }



    /**
     * Get the value of Post
     *
     * @return mixed
     */
    public function getPost()
    {
        return $this->post;
    }


    /**
     * Set post
     *
     * @param \AppBundle\Entity\Post $post
     *
     * @return Category
     */
    public function setPost(\AppBundle\Entity\Post $post)
    {
        $this->post = $post;

        return $this;
    }

    public function __toString(){
      return $this->name;
    }
}

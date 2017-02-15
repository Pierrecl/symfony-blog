<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="comment")
*/
Class Comment {

  /**
  * @ORM\id
  * @ORM\GeneratedValue
  * @ORM\Column(type="integer")
  */
  private $id;

  /**
  * @ORM\Column(type="text")
  * @ORM\JoinColumn(nullable=false)
  */
  private $content;

  /**
  * @ORM\Column(type="datetime")
  */
  private $publishedAt;

  /**
  * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments")
  * @ORM\JoinColumn(nullable=false)
  */
  private $post;

  /**
  * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
  * @ORM\JoinColumn(nullable=false)
  */
  private $author;

  public function __construct()
  {
    $this->publishedAt = new \DateTime();
  }

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
     * Get the value of Content
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of Content
     *
     * @param mixed content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of Published At
     *
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set the value of Published At
     *
     * @param mixed publishedAt
     *
     * @return self
     */
    public function setPublishedAt(\Datetime $publishedAt)
    {
        $this->publishedAt = $publishedAt;

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
     * Set the value of Post
     *
     * @param mixed post
     *
     * @return self
     */
    public function setPost(Post $post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get the value of Author
     *
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of Author
     *
     * @param mixed author
     *
     * @return self
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;

        return $this;
    }

}

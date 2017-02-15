<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Category;

/**
* Class Post
* @package AppBundle\Entity
* @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
* @ORM\Table(name="post")
*/
Class Post{

  const PAGINATE_ARTICLES = 10;

  /**
  * @ORM\id
  * @ORM\GeneratedValue
  * @ORM\Column(type="integer")
  */
  private $id;

  /**
  * @ORM\Column(type="string")
  */
  private $title;

  /**
  * @ORM\Column(type="string")
  */
  private $slug;

  /**
  * @ORM\Column(type="text")
  */
  private $content;

  /**
  * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
  * @ORM\JoinColumn(nullable=false)
  * @ORM\Column(type="string")
  */
  private $author;

  /**
  * @ORM\Column(type="datetime")
  * @Assert\DateTime()
  */
  private $publishedAt;

  /**
  * @ORM\OneToMany(
  *   targetEntity="Comment",
  *   mappedBy="post",
  *   orphanRemoval=true
  * )
  * @ORM\OrderBy({"publishedAt"="ASC"})
  */
  private $comments;

  /**
  * @ORM\ManyToMany(
  *   targetEntity="AppBundle\Entity\Tag",
  *   orphanRemoval=true,
  *   cascade={"persist"}
  * )
  * @ORM\JoinTable(name="post_tag")
  */
  private $tags;

  /**
  * @ORM\ManyToOne(targetEntity="Category", inversedBy="post")
  * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
  */
  private $category;

  public function __construct(){
    $this->publishedAt =  new \DateTime();
    $this->comments =     new ArrayCollection();
    $this->tags =         new ArrayCollection();
    $this->category =     new Category();
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
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param mixed title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
    public function setPublishedAt(\DateTime $publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }



    /**
     * Get the value of Comments
     *
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set the value of Comments
     *
     * @param mixed comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }


    /**
     * Get the value of Tags
     *
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set the value of Tags
     *
     * @param mixed tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * return User isn't/is Author of Posts
     * @param mixed user
     *
     * @return self
     */
    public function isAuthor(User $user = null)
    {
      return $user == $this->author;
    }

    /**
     * Add a comment for Posts
     *
     * @param mixed comment
     *
     * @return self
     */
    public function AddComment(Comment $comment)
    {
      $this->comments->add($comment);
      $comment->setPost($this);
    }

    /**
     * Remove a comment of Post
     *
     * @param mixed tags
     *
     * @return self
     */
    public function RemoveComment(Comment $comment)
    {
      $this->comments->removeElement($comment);
    }

    /**
     * Add Tags in Posts
     *
     * @param mixed tags
     *
     * @return self
     */
    public function addTag(Tag $tag)
    {
      if(!$this->tags->contains($tag)){ $this->tags->add($tag); }
    }

    public function removeTag(Tag $tag)
    {
      $this->tags->removeElement($tag);
    }

    /**
     * Get the value of Category
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of Category
     *
     * @param mixed category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }


    /**
     * Get the value of Slug
     *
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of Slug
     *
     * @param mixed slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

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
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }



    /**
     * Add category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Post
     */
    public function addCategory(\AppBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\Category $category
     */
    public function removeCategory(\AppBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }
}

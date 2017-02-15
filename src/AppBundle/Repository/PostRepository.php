<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Post;
use AppBundle\Entity\Category;
use AppBundle\Entity\Comment;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;

/**
 * UserRepository
 *
 * Useful Class Repository, for retrieve latest posts
 * Thnaks Mathew.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
  /*
  * @var Query
  * Function for retrive latest posts
  * @return self Query
  */
  public function queryLatest()
  {
    /*$Query = $this->getEntityManager()
             ->createQuery('
                SELECT p
                FROM AppBundle:Post p
                WHERE p.publishedAt <= :now
                ORDER BY p.publishedAt DESC
             ')->setParameter('now', new \DateTime());*/

    $Query = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('p,c')
            ->from('AppBundle:Post','p')
            ->leftJoin('p.comments','c')

            ->andWhere('p.publishedAt <= :now')
            ->setParameter('now', new \DateTime());

    return $Query;
  }

  /*
  * Wonderful Bundle for pagination pages
  * @filesource https://github.com/whiteoctober/WhiteOctoberPagerfantaBundle
  * @param int $page
  * @return self pager
  */
  public function getLatest($page = 1)
  {
    $pager = new Pagerfanta(new DoctrineORMAdapter($this->queryLatest(), false));
    $pager->setMaxPerPage(Post::PAGINATE_ARTICLES);
    $pager->setCurrentPage($page);

    return $pager;
  }

  public function getFiveLatest()
  {
      $Query = $this->getEntityManager()
              ->createQuery('
                SELECT p
                FROM AppBundle:Post p
                WHERE p.publishedAt <= :now
                ORDER BY p.publishedAt DESC
              ')->setParameter('now', new \DateTime())
                ->setMaxResults(5)
                ->getResult();
      return $Query;
  }

  public function listCategory()
  {
      $Query = $this->getEntityManager()
                ->createQuery('
                  SELECT c
                  FROM AppBundle:Category c
                  ORDER BY c.name ASC
                ')->getResult();
      return $Query;
  }

  public function getPostsByCategories($category_id)
  {
    /*$Query = $this->getEntityManager()
              ->createQuery('
                SELECT p
                FROM AppBundle:Post p
                WHERE p.category = :id
                ORDER BY p.publishedAt DESC
              ')->setParameter('id', $category_id)
                ->getResult();*/

    $Query = $this->getEntityManager()
              ->createQueryBuilder()
              ->select('p,c')
              ->from('AppBundle:Post','p')
              ->leftJoin('p.comments','c')
              ->andWhere('p.category = :category_id')
              ->andWhere('p.id = c.post')
              ->setParameter('category_id',$category_id)
              ->orderBy('p.publishedAt','DESC')
              ->getQuery()
              ->getResult();

    return $Query;
  }

  public function getPostBySlug($slug)
  {
    $Query = $this->getEntityManager()
            ->createQuery('
              SELECT p
              FROM AppBundle:Post p
              WHERE p.slug = :slug
            ')->setParameter('slug', $slug)
              ->getSingleResult();

    return $Query;
  }

  public function getComForPost(){
    $Query = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('p,c')
            ->from('AppBundle:Post', 'p')
            ->leftJoin('p.comments','c')
            ->andWhere('p.id = c.post')
            ->getQuery()
            ->getScalarResult();
    return $Query;
  }

  public function getListOfComments($id)
  {
    $Query = $this->getEntityManager()
            ->createQuery('
              SELECT c
              FROM AppBundle:Comment c
              WHERE c.post = :id
            ')->setParameter('id',$id)
              ->getResult();
    return $Query;
  }

  //Get all  Posts with comments
  public function getCommentForPost()
  {
    $Query = $this->getEntityManager()
             ->createQueryBuilder()
             ->select('p,c')
             ->from('AppBundle:Post','p')
             ->leftJoin('p.comments','c')
             ->orderBy('p.publishedAt','DESC')
             ->getQuery()
             ->setMaxResults(6)
             ->getResult();

    return $Query;
  }
  //Get all avelable comments for one posts
  public function getCommentForOnePost($id)
  {
    $Query = $this->getEntityManager()
             ->createQueryBuilder()
             ->select('p,c')
             ->from('AppBundle:Post','p')
             ->leftJoin('p.comments','c')
             ->andWhere('p.slug = :id')
             ->setParameter('id',$id)
             ->getQuery()
             ->getResult();

    return $Query;
  }


  public function getPostBySearch($search)
  {
    $Query = $this->getEntityManager()
             ->createQueryBuilder()
             ->select('p,c,t')
             ->from('AppBundle:Post','p')
             ->leftJoin('p.category','c')
             ->leftJoin('p.tags', 't')
             ->orWhere('c.name LIKE :cat')
             ->orWhere('p.title LIKE :title')
             ->orWhere('t.name LIKE :tag')
             ->setParameter('title', $search)
             ->setParameter('tag',$search)
             ->setParameter('cat',$search)
             ->getQuery()
             ->getResult();

    return $Query;
  }

}

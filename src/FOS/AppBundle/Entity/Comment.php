<?php

namespace FOS\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;

/**
 * @ORM\Entity

 */
class Comment extends BaseComment
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @ORM\ManyToOne(targetEntity="FOS\AppBundle\Entity\Thread")
     * @var Thread
     */
    protected $thread;
}
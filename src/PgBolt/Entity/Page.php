<?php

namespace PgBolt\Entity;

class Page implements PageInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $slug;

    /**
     * @var datetime
     */
    protected $datecreated;
    
    /**
     * @var datetime
     */
    protected $datechanged;
    
    /**
     * @var datetime
     */
    protected $datepublish;
    
    /**
     * @var string
     */
    protected $username;
    
    /**
     * @var string
     */
    protected $status;
    
    /**
     * @var string
     */
    protected $title;
    
    /**
     * @var string
     */
    protected $image;
    
    /**
     * @var string
     */
    protected $teaser;
    
    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $template;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id.
     *
     * @param int $id
     * @return PageInterface
     */
    public function setId($id)
    {
        $this->id = (int) $id;
        return $this;
    }

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set slug.
     *
     * @param string $slug
     * @return PageInterface
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get datecreated.
     *
     * @return datetime
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * Set datecreated.
     *
     * @param datetime $datecreated
     * @return PageInterface
     */
    public function setDatecreated($datecreated)
    {
        $this->datecreated = $datecreated;
        return $this;
    }

    /**
     * Get datechanged.
     *
     * @return datetime
     */
    public function getDatechanged()
    {
        return $this->datechanged;
    }

    /**
     * Set datechanged.
     *
     * @param datetime $datechanged
     * @return PageInterface
     */
    public function setDatechanged($datechanged)
    {
        $this->datechanged = $datechanged;
        return $this;
    }

    /**
     * Get datepublish.
     *
     * @return datetime
     */
    public function getDatepublish()
    {
        return $this->datepublish;
    }

    /**
     * Set datepublish.
     *
     * @param datetime $datepublish
     * @return PageInterface
     */
    public function setDatepublish($datepublish)
    {
        $this->datepublish = $datepublish;
        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username.
     *
     * @param string $username
     * @return PageInterface
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status.
     *
     * @param string $status
     * @return PageInterface
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    
    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title.
     *
     * @param string $title
     * @return PageInterface
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set image.
     *
     * @param string $image
     * @return PageInterface
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get teaser.
     *
     * @return string
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Set teaser.
     *
     * @param string $teaser
     * @return PageInterface
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
        return $this;
    }

    /**
     * Get body.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set body.
     *
     * @param string $body
     * @return PageInterface
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Get template.
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set template.
     *
     * @param string $template
     * @return PageInterface
     */
    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }
    
}

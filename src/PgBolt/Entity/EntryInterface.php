<?php

namespace PgBolt\Entity;

interface EntryInterface
{
    /**
     * Get id.
     *
     * @return int
     */
    public function getId();

    /**
     * Set id.
     *
     * @param int $id
     * @return PageInterface
     */
    public function setId($id);

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Set slug.
     *
     * @param string $slug
     * @return PageInterface
     */
    public function setSlug($slug);

    /**
     * Get datecreated.
     *
     * @return datetime
     */
    public function getDatecreated();

    /**
     * Set datecreated.
     *
     * @param datetime $datecreated
     * @return PageInterface
     */
    public function setDatecreated($datecreated);

    /**
     * Get datechanged.
     *
     * @return datetime
     */
    public function getDatechanged();

    /**
     * Set datechanged.
     *
     * @param datetime $datechanged
     * @return PageInterface
     */
    public function setDatechanged($datechanged);

    /**
     * Get datepublish.
     *
     * @return datetime
     */
    public function getDatepublish();

    /**
     * Set datepublish.
     *
     * @param datetime $datepublish
     * @return PageInterface
     */
    public function setDatepublish($datepublish);

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername();

    /**
     * Set username.
     *
     * @param string $username
     * @return PageInterface
     */
    public function setUsername($username);

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus();

    /**
     * Set status.
     *
     * @param string $status
     * @return PageInterface
     */
    public function setStatus($status);

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage();

    /**
     * Set image.
     *
     * @param string $image
     * @return PageInterface
     */
    public function setImage($image);

    /**
     * Get teaser.
     *
     * @return string
     */
    public function getTeaser();

    /**
     * Set teaser.
     *
     * @param string $teaser
     * @return PageInterface
     */
    public function setTeaser($teaser);

    /**
     * Get video.
     *
     * @return string
     */
    public function getVideo();

    /**
     * Set video.
     *
     * @param string $video
     * @return PageInterface
     */
    public function setVideo($video);

    /**
     * Get body.
     *
     * @return string
     */
    public function getBody();

    /**
     * Set body.
     *
     * @param string $body
     * @return PageInterface
     */
    public function setBody($body);

}

<?php

namespace Filmoteca\Models;

/**
 * Class Activity
 * @package Filmoteca\Models
 */
class Activity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var \Filmoteca\Models\Exhibitions\Auditorium
     */
    protected $facility;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $publicType;

    /**
     * @var string
     */
    protected $contact;

    /**
     * @var string
     */
    protected $schedules;

    /**
     * @var string
     */
    protected $extraSchedules;

    /**
     * @var array
     */
    protected $prices;

    /**
     * @var array
     */
    protected $discounts;

    /**
     * @var array
     */
    protected $commentaries;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var Object unknown
     */
    protected $image;

    /**
     * @var string
     */
    protected $review;

    /**
     * @return Exhibitions\Auditorium
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * @param $facility
     * @return $this
     */
    public function setFacility($facility)
    {
        $this->facility = $facility;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getPublicType()
    {
        return $this->publicType;
    }


    /**
     * @param $publicType
     * @return $this
     */
    public function setPublicType($publicType)
    {
        $this->publicType = $publicType;

        return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return string
     */
    public function getSchedules()
    {
        return $this->schedules;
    }

    /**
     * @param $schedules
     * @return $this
     */
    public function setSchedules($schedules)
    {
        $this->schedules = $schedules;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtraSchedules()
    {
        return $this->extraSchedules;
    }

    /**
     * @param $extraSchedules
     * @return $this
     */
    public function setExtraSchedules($extraSchedules)
    {
        $this->extraSchedules = $extraSchedules;

        return $this;
    }

    /**
     * @return array
     */
    public function getPrices()
    {
        return $this->prices;
    }


    /**
     * @param $prices
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;

        return $this;
    }


    /**
     * @return array
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }


    /**
     * @param $discounts
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->discounts = $discounts;

        return $this;
    }

    /**
     * @return array
     */
    public function getCommentaries()
    {
        return $this->commentaries;
    }

    /**
     * @param $commentaries
     * @return $this
     */
    public function setCommentaries($commentaries)
    {
        $this->commentaries = $commentaries;

        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Object
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return string
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param $review
     * @return $this
     */
    public function setReview($review)
    {
        $this->review = $review;

        return $this;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->{$property};
        }
    }
}
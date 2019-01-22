<?php
/**
 * Created by IntelliJ IDEA.
 * User: buddhika
 * Date: 1/22/19
 * Time: 10:05 PM
 */

class Movie
{
    private $id;
    private $name;
    private $img;
    private $type;
    private $video;
    private $discription;

    /**
     * Movie constructor.
     * @param $id
     * @param $name
     * @param $img
     * @param $type
     * @param $video
     * @param $discription
     */
    public function __construct($id, $name, $img, $type, $video, $discription)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
        $this->type = $type;
        $this->video = $video;
        $this->discription = $discription;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getDiscription()
    {
        return $this->discription;
    }

    /**
     * @param mixed $discription
     */
    public function setDiscription($discription)
    {
        $this->discription = $discription;
    }



}
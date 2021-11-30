<?php


class Flight
{

    private     $id;
    private     $from;
    private     $to;
    private     $stops;
    private     $Duration;
    private     $Times;
    private     $price;
    private     $date;

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
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return mixed
     */
    public function getStops()
    {
        return $this->stops;
    }

    /**
     * @param mixed $stops
     */
    public function setStops($stops)
    {
        $this->stops = $stops;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * @param mixed $Duration
     */
    public function setDuration($Duration)
    {
        $this->Duration = $Duration;
    }

    /**
     * @return mixed
     */
    public function getTimes()
    {
        return $this->Times;
    }

    /**
     * @param mixed $Times
     */
    public function setTimes($Times)
    {
        $this->Times = $Times;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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
    private     $type;

    /**
     * Flight constructor.
     * @param $id
     * @param $from
     * @param $to
     * @param $stops
     * @param $Duration
     * @param $Times
     * @param $price
     * @param $date
     * @param $type
     */
    public function __construct($id, $from, $to, $stops, $Duration, $Times, $price, $date, $type)
    {
        $this->id = $id;
        $this->from = $from;
        $this->to = $to;
        $this->stops = $stops;
        $this->Duration = $Duration;
        $this->Times = $Times;
        $this->price = $price;
        $this->date = $date;
        $this->type = $type;
    }


}
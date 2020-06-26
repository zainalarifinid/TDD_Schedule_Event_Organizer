<?php

/**
 * Class ScheduleView
 */
class ScheduleView {
    /**
     * @var Schedule
     */
    private $schedule;

    /**
     * @param Schedule $schedule
     */
    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * @return int
     */
    public function getNumberOfTimeslots()
    {
        /**
         * @TODO: Implementation
         */
        return $this->schedule->count();
    }

    /**
     * return int
     */
    public function getDurationInMinutes()
    {
        /**
         * @TODO: Implementation. Include breaks between timeslots in overall schedule duration.
         */
        return 0;
    }
}
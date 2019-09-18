<?php
use SilverStripe\CronTask\Interfaces\CronTask;
use LeKoala\SimpleJobs\SimpleJobsSchedules;

class TestCron implements CronTask {

    /**
     * run this task every every day
     *
     * @return string
     */
    public function getSchedule() {
        return SimpleJobsSchedules::EVERY_DAY;
    }

    /**
     * @return bool
     */
    public function process() {
        echo 'hello';
        return true; // save as successful
    }
}

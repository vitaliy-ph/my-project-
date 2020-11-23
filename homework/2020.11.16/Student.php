<?php

declare(strict_types=1);

class Student extends Homework
{
    /**
     * @return string
     * @throws Exception
     */
    public function deadline(): string
    {
        $days = random_int(1, 10);
        $date = (new DateTime('now'))->modify("+{$days} day")->format('Y-m-d');

        $this->deadline = $date;

        return $date;
    }

    /**
     * @return string
     */
    public function passHomework(): string
    {
        return 'passed homework';
    }

}
<?php

declare(strict_types=1);

class Mentor extends Homework
{
    /**
     * @return string
     */
    public function checkHomework(): string
    {
        return 'checking homework';
    }

    public function homeworkDone(): string
    {
        return 'homework done!';
    }


}
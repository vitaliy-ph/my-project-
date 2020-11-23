<?php

declare(strict_types=1);

class Homework
{
    public const SCHOOL = 'skillUp';

    public string $name = '';

    /**
     * @param string $describe
     * @return void
     */
        public function setDescribe(string $describe): void
        {
            $this->describe = $describe;
        }


    /**
     * @param string $homework
     * @return void
     */
        public function setHomework(string $homework): void
        {
            $this->homework = $homework;
        }

    /**
     * @param string $name
     */
        public function setName(string $name): void
        {
            $this->name = $name;
        }

    /**
     * @return string
     */
        public function getName(): string
        {
            return $this->name;
        }


}
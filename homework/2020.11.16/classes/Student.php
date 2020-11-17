<?php


class Student extends Memory
{
    public array $Hm;

    /**
     * @param array $Hm
     */
    public function setHm(array $Hm) : void
    {
        $this->homework = $Hm;
    }

    public function makeHm(): void
    {
        foreach ($this->homework as $date => &$HmData) {
            foreach ($HmData as $description => &$status) {
                $status['done'] = true;
            }
        }

        echo "{$this -> getName()}: done his homework<br><br>";
    }
    public function checkHm(object $mentor): void
    {
        if ($mentor instanceof \Mentor)
        {
            foreach ($this->homework as $date => &$HmData) {
                foreach ($HmData as $description => &$status) {
                    $status['checked'] = true;
                }
            }
            unset($HmData, $status);
            echo "{$mentor->getName()}: checked {$this->getName()} homework.<br><br>";
        }
    }
}
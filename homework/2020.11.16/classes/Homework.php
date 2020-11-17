<?php


class Homework
{
    private array $Hm;

    /**
     * @param string $HmDate
     * @param string $HmDescribe
     * @param object $author
     */

    public function addHm(string $HmDate,
                          string $HmDescribe,
                          object $author): void
    {
        if ($author instanceof \Mentor) {
            $this->Hm[$HmDate] = [
                $HmDescribe=>[
                    'done' => false,
                    'checked' => false,
                ]
            ];
            echo "{$author->getName()}  new homework,
            date{$HmDate}: {$HmDescribe}.<br><br>";
        }
    }

    /**
     * @return array
     */
    public function getHm(): array
    {
        return $this->Hm;
    }
}

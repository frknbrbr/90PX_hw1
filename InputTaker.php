<?php

namespace Acme;

class InputTaker
{
    private $fullNames;

    public function __construct($inputCount)
    {
        $this->fullNames = $this->takeInput($inputCount);
    }
    private function takeInput($inputCounter){
        $names = [];
        $surNames = [];
        $fullNames = [];
        for ($i=0; $i < $inputCounter; $i++) {
            $name = readline("Name: ");
            $surName = readline( "Surname: ");
            $names[] = $name;
            $surNames[] = $surName;
        }
        for ($i=0; $i < count($names); $i++) {
            for ($j=0; $j < count($names); $j++) {
                $fullName = $names[$i]." ".$surNames[$j];
                $fullNames[] = $fullName;
            }
        }
        return $fullNames;
    }

    /**
     * @return array
     */
    public function getFullNames(): array
    {
        return $this->fullNames;
    }



}


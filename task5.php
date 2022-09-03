<?php

class CropRatio
{
    private $totalWeight = 0;
    private $crops = [];

    public function add(string $name, int $cropWeight) : void
    {
        if(!array_key_exists($name, $this->crops)) {
            $this->crops[$name] = 0;
        }

        $this->crops[$name] += $cropWeight;
        $this->totalWeight += $cropWeight ;
    }

    public function proportion(string $name) : float
    {
        print_r($this->crops);
        return $this->crops[$name] / $this->totalWeight;
    }
}

$cropRatio = new CropRatio;
$cropRatio->add('Wheat', 4);
$cropRatio->add('Wheat', 5);
$cropRatio->add('Rice', 1);

echo "Wheat: " . $cropRatio->proportion('Wheat');



<?php

class slovo {

    public $pole;
    public $slovniDruh = [];
    private $Quantity;
    public function __construct() {
        $filename = 'slova.csv';

        if (($h = fopen("{$filename}", "r")) !== FALSE) {
            while (($data = fgetcsv($h, 1000, ",")) !== FALSE) {
                $this->slovniDruh[] = $data;
            }
            fclose($h);
        }
    }

    public function geneW($type) {
        if ($type == 3) {
            $type=0;
        }
        if ($type == 4) {
            $type=1;
        }
        $randomizer = rand(0, 1);
        if ($type == 1) {
            if ($randomizer == 0) {
                $type = 3;
            }
        }
        if ($type == 2) {
            if ($randomizer == 1) {
                $type = 4;
            }
        }
        $this->pole = explode(';', $this->slovniDruh[$type][0]);
        $p = rand(0, count($this->pole) - 1);
        return $this->pole[$p];
    }

}

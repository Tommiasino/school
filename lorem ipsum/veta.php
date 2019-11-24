<?php

require 'slovo.php';

class veta {

    private $type = 0;
    private $slovo;
    private $wordCount = 1;

    public function __construct($lenght) {
        $veta = '';
        $this->slovo = new slovo();
        

        while ($this->wordCount <= $lenght) {
            if ($this->type == 5) {
                $this->type = 0;
            }
            if ($this->wordCount % 5 == 0) {
                $veta = $veta . $this->geneEnd($end);
                if ($this->wordCount == $lenght) {
                    $end = 1;
                } else {
                    $end = 2;
                }
            } else {
                $end = 0;
            }

            $veta = $veta . $this->slovo->geneW($this->type) . $this->geneEnd($end);
            $this->wordCount++;
            $this->type++;
        }
        echo ucfirst($veta);
        $this->type = 0;
    }

    public function geneEnd($end) {
        $rand = rand(0, 4);
        if ($end == 1) {
            return '. ';
        } elseif ($end == 2) {

            if ($rand == 0) {
                return ', when ';
            } else if ($rand == 1) {
                return ' and ';
            } else if ($rand == 2) {
                return ', but ';
            } else if ($rand == 3) {
                return ', or ';
            } else if ($rand == 4) {
                return ', on the other hand ';
            } else if ($rand == 5) {
                return ', even so ';
            }
        } else {

            return ' ';
        }
    }

}

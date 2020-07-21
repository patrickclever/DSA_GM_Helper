<?php


class DsaCharacter
{
    public $name, $title, $statMU, $statGE, $statFF, $statKO, $statSO, $statKK, $statGS;

    function __construct($heroXmlData)
    {
        $this->name = $heroXmlData['held']['@attributes']['name'];
    }
}
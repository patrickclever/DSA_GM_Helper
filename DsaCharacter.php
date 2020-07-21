<?php


class DsaCharacter
{
    public $name;
    public $statMU = array(); 
    public $statGE = array();
    public $statFF = array();
    public $statKO = array();
    public $statIN = array();
    public $statCH = array();
    public $statSO = array();
    public $statKK = array();
    public $statKL = array();
    public $statLeP = array();
    public $statAuP = array();
    public $statAsP = array();
    public $statKarma = array();
    public $statINI = array();
    public $statMR = array();
    public $statAT = array();
    public $statPA = array();
    public $statFK = array();
    public $vorteile = array();

    function __construct($heroXmlData)
    {
        $this->name = $heroXmlData['held']['@attributes']['name'];
        $this->statMU['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][0]['@attributes']['name'];
        $this->statMU['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][0]['@attributes']['value'];
        $this->statKL['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][1]['@attributes']['name'];
        $this->statKL['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][1]['@attributes']['value'];
        $this->statIN['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][2]['@attributes']['name'];
        $this->statIN['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][2]['@attributes']['value'];
        $this->statCH['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][3]['@attributes']['name'];
        $this->statCH['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][3]['@attributes']['value'];
        $this->statFF['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][4]['@attributes']['name'];
        $this->statFF['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][4]['@attributes']['value'];
        $this->statGE['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][5]['@attributes']['name'];
        $this->statGE['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][5]['@attributes']['value'];
        $this->statKO['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][6]['@attributes']['name'];
        $this->statKO['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][6]['@attributes']['value'];
        $this->statKK['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][7]['@attributes']['name'];
        $this->statKK['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][7]['@attributes']['value'];
        $this->statSO['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][8]['@attributes']['name'];
        $this->statSO['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][8]['@attributes']['value'];
        $this->statLeP['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][9]['@attributes']['name'];
        $this->statLeP['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][9]['@attributes']['value'];
        $this->statAuP['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][10]['@attributes']['name'];
        $this->statAuP['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][10]['@attributes']['value'];
        $this->statAsP['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][11]['@attributes']['name'];
        $this->statAsP['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][11]['@attributes']['value'];
        $this->statKarma['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][12]['@attributes']['name'];
        $this->statKarma['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][12]['@attributes']['value'];
        $this->statMR['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][13]['@attributes']['name'];
        $this->statMR['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][13]['@attributes']['value'];
        $this->statINI['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][14]['@attributes']['name'];
        $this->statINI['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][14]['@attributes']['value'];
        $this->statAT['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][15]['@attributes']['name'];
        $this->statAT['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][15]['@attributes']['value'];
        $this->statPA['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][16]['@attributes']['name'];
        $this->statPA['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][16]['@attributes']['value'];
        $this->statFK['name'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][17]['@attributes']['name'];
        $this->statFK['value'] = $heroXmlData['held']['eigenschaften']['eigenschaft'][17]['@attributes']['value'];
//        $this->vorteile = $heroXmlData['held']['vt']['vorteil']['0']['@attributes'];
        foreach ($heroXmlData['held']['vt'] as $key=>$value){
            $this->vorteile['Vorteil'] = $value[$key]['@attributes']['name'];
            $this->vorteile['Wert'] = $value[$key]['@attributes']['value'];
        }

    }
}
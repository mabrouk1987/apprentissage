<?php

class PresidentDeLaRepublique
{

    private static $_instance = null;
    private $_nom = '';
    private $_prenom = '';

    public function toString()
    {
        return $this->getPrenom() . ' ' . strtoupper($this->getNom());
    }

    private function __construct($nom, $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

    public static function getInstance($nom, $prenom)
    {
        if (is_null(static::$_instance)) {
            static::$_instance = new PresidentDeLaRepublique($nom, $prenom);
        }
        return static::$_instance;
    }

    function getNom()
    {
        return $this->_nom;
    }

    function getPrenom()
    {
        return $this->_prenom;
    }

    function setNom($_nom)
    {
        $this->_nom = $_nom;
        return $this;
    }

    function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;
        return $this;
    }

}

<?php

class Manusia {
    public $nama;
    public $umur;


    public Function setNama ($name)
    {
        $this->nama = $name;
    }

    public Function setUmur ($umur)
    {
        $this->umur = $umur;
    }

    public Function getInfo()
    {
        return "nama; " . $this->nama ."<br>umur;" . $this->umur;
    }
}

// membuat objek
$Rohimah = new Manusia();
$Rohimah->setNama("Siti Rohimah");
$Rohimah->setUmur(19);
echo $Rohimah->getInfo();

echo "<br>";

$ayan = new Manusia();
$ayan->setNama("Ican");
$ayan->setUmur(20);
echo $ayan->getInfo();
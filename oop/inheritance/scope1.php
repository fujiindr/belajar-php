<?php

class komputer
{
    public function lihat_spec()
    {
        return "Spec Komputer: Acer,
     Processor Intel core i7, Ram 4GB";
    }
}

class laptop extends komputer
{

    public function lihat_spec()
    {
        return "Spec Laptop: Asus,
     Processor Intel core i5, Ram 2GB";
    }
}

$gadget_baru = new laptop();
echo $gadget_baru->lihat_spec();

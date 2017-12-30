<?php

namespace CrateSystem;

use pocketmine\plugin\PluginBase;

use pocketmine\utils\Textformat as C;

class Main extends PluginBase{

    public function onLoad(){
        $this->getLogger()->info(C::AQUA . "Loaded.");
    }

    public function onEnable(){
        $this->getLogger()->info(C::GREEN . "Enabled.");
    }

    public function onDisable(){
        $this->getLogger()->info(C::RED . "Disabled.");
    }
}
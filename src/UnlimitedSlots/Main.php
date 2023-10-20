<?php

namespace UnlimitedSlots;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    protected function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function onQuery(QueryRegenerateEvent $event) {
        $event->getQueryInfo()->setMaxPlayerCount(intval(count($this->getServer()->getOnlinePlayers())+1));
    }
}

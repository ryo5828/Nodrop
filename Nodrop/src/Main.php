<?php

declare(strict_types=1);

namespace ryo5828\Nodrop;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\event\player\PlayerDeathEvent;

class Main extends PluginBase implements Listener {
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onDeath(PlayerDeathEvent $event)
    {
        $event->setDrops([]);
    }
}

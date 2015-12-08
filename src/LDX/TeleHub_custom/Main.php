<?php

namespace LDX\TeleHub_custom;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\level\Location;

class Main extends PluginBase {

  public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
    if(!$sender instanceof Player) {
      $sender->sendMessage("This command must be used in-game.");
      return true;
    }
    switch(strtolower($command->getName())) {
      case "hub":
        $sender->teleport(new Location(460, 79.000003, -1624, 179, -1, $this->getServer()->getLevelByName("Hub by JuampiRshaid")));
        break;
      case "spawn":
        $sender->teleport(new Location(-250.594864, 6, 339.2341, 179, -1, $this->getServer()->getLevelByName("Gorzen")));
        break;
      case "shop":
        $sender->teleport(new Location(-280.279358, 66.000003, 368.750275, 179, -1, $this->getServer()->getLevelByName("Gorzen")));
        break;
      case "pvp":
        $sender->teleport(new Location(1701.638306, 12.663271, -1027.24585, 179, -1, $this->getServer()->getLevelByName("PvP Arena")));
        break;
      default:
        $sender->sendMessage("Invalid command.");
        break;
    }
    return true;
  }

}

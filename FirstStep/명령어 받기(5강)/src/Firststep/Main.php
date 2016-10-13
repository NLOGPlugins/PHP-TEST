<?php

namespace FirstStep;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;
class Main extends PluginBase implements Listener {
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onCommand(CommandSender $player, Command $command, $label, array $args) {
		if (strtolower( $command->getName () ) == "firststep")
			$this->getLogger()->info( TextFormat::DARK_AQUA . "명령어가 실행되었습니다");
	}
}

?>

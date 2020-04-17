<?php

namespace EnterTainerSK;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Join extends PluginBase implements Listener {

	public function onEnable()
	 {
		$this->getServer()->getPluginManager()->registerEvents($this ,$this);
		$this->getLogger()->notice("=================================");
		$this->getLogger()->notice('Join_Messages aktiv');
		$this->getLogger()->notice("=================================");
	 }

   public function onJoin(PlayerJoinEvent $e)
   {
	  $player = $e->getPlayer();
	  $name = $player->getName();
	
	//Andere Diese Nachricht //
		$e->setJoinMessage("§6§lPaincraft§7 >> §9{player} Hat Denn Server Betreten");
	   }
	
   public function onQuit(PlayerQuitEvent $e)
   {
	  $player = $e->getPlayer();
	  $name = $player->getName();
	
	//QUIT MESSAGE //
		$e->setQuitMessage("§6§lPaincraft§7 >> §9{player} Hat Denn Server Leider Verlassen");
	   }
	
	public function onDisable()
	 {
		$this->getServer()->getPluginManager()->registerEvents($this ,$this);
		$this->getLogger()->notice("=================================");
		$this->getLogger()->notice('Join_Message deaktiviert');
		$this->getLogger()->notice("=================================");
	 }
 }

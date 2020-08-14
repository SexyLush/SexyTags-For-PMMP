<?php

declare(strict_types=1);

namespace SexyLush\TagsUI;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\command\{Command,CommandSender};
use pocketmine\utils\Config;
use pocketmine\command\PluginIdentifiableCommand;

class Main extends PluginBase {

    public function onEnable() {
        $this->getLogger()->info("Tags Enabled");
    }


	public function runAsOp(Player $player, String $cmd){
		if ($player->isOp()) {
                    $this->getServer()->dispatchCommand($player, $cmd);
                } else {
                    $this->getServer()->addOp($player->getName());                     $this->getServer()->dispatchCommand($player, $cmd);
                    $this->getServer()->removeOp($player->getName());
                  }
              }


	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        if ($sender instanceof Player and $command->getName() == "tags") {
            $this->permPage($sender);
        }
        return true;
    }




    public function permPage(Player $player) {
    
    	
        $form = new SimpleForm(function (Player $player, $data){
            if ($data === null) {
                return;
            }
            switch ($data) {
                case 0: // Second button (to second page)

                            if (!$player->hasPermission("tags.Noob")) {
                                $player->sendMessage("§7[§a!§7]§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
        
								$player->setDisplayName($player->getName() . " §r§l§6#§eNoob§r");
        
								$player->sendMessage("§7[§a!§7]§7 §r§l§6#§eNoob§r§7 tag equiped!");
						}
                            return true;
                case 1: // Second button (to second page)

                            if (!$player->hasPermission("tags.alien")) {
                                $player->sendMessage("§7[§c!§7]§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
       
        
								$player->setDisplayName($player->getName() . " §l§2#§aA§2l§ai§2e§an§r");
        
								$player->sendMessage("§7[§a!§7]§7 §l§2#§aA§2l§ai§2e§an§r§7 tag equiped!");
                        }
                            return true;
                case 2: // Second button (to second page)

                            if (!$player->hasPermission("tags.bombom")) {
                                $player->sendMessage("§7[§c!§7]§r§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §l§r#§cBo§4mB§com§r");
        
								$player->sendMessage("§7[§a!§7] §l§r#§cBo§4mB§com§r§7 tag equiped!");
                        }
                            return true;
                case 3: // Second button (to second page)

                            if (!$player->hasPermission("tags.hacker")) {
                                $player->sendMessage("§7[§c!§7] This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §l§r#§bHa§3ck§ber§r");
        
								$player->sendMessage("§7[§a!§7] §l§r#§bHa§3ck§ber§r§7 tag equiped!");
                        }
                            return true;
                case 4: // Second button (to second page)

                            if (!$player->hasPermission("tags.spicy")) {
                                $player->sendMessage("§7[§c!§7]§c This tag is locked!");
                                return true;
                            }else{
        
									/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§r§l#§l§4S§cp§4i§cc§4y§r");
        
								$player->sendMessage("§7[§a!§7]§7 §r§r§l#§l§4S§cp§4i§cc§4y§7 tag equiped!");
                        }
                            return true;
                case 5: // Second button (to second page)

                            if (!$player->hasPermission("tags.sexylush")) {
                                $player->sendMessage("§7[§c!§7]§r§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§r§l#§1S§3e§bx§4y§cL§eu§6s§2h§r§r");
        
								$player->sendMessage("§7[§a!§7] §r§r§l#§1S§3e§bx§4y§cL§eu§6s§2h§r§7 tag equiped!");
                        }
                            return true;
                case 6: // Second button (to second page)

                            if (!$player->hasPermission("tags.og")) {
                                $player->sendMessage("§7[§c!§7]§r§c This tag is locked!");
                                return true;
                            }else{
        
									/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§r§l#§o§aOG§r§7§r");
        
								$player->sendMessage("§7[§a!§7]§r§7 §r§r§l#§o§aOG§r§7§r§7 tag equiped!");
                        }
                            return true;
                case 7: // Second button (to second page)

                            if (!$player->hasPermission("tags.dragon")) {
                                $player->sendMessage("§7[§c!§7]§r§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§5§l#§6D§er§6a§eg§6o§en§r");
        
								$player->sendMessage("§7[§a!§7] §r§5§l#§6D§er§6a§eg§6o§en§7 tag equiped!");
                        }
                            return true;
 
                case 8: // Second button (to second page)

                            if (!$player->hasPermission("tags.twpe")) {
                                $player->sendMessage("§7[§c!§7]§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§l§3#§6T§3W§fPE§r");
        
								$player->sendMessage("§7[§a!§7] §r§l§3#§6T§3W§fPE§r§7 tag equiped!");
                        }
                            return true;
				case 9: // Second button (to second page)

                            if (!$player->hasPermission("tags.aussieping")) {
                                $player->sendMessage("§7[§c!§7]§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§l§3#§r§aAussie§dPing§r");
        
								$player->sendMessage("§7[§a!§7] §r§l§3#§r§aAussie§dPing§7 tag equiped!");
                        }
                            return true;			
				case 10: // Second button (to second page)

                            if (!$player->hasPermission("tags.ed")) {
                                $player->sendMessage("§7[§c!§7]§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§l§5#§dE§5D§r");
        
								$player->sendMessage("§7[§a!§7] §r§l§5#§dE§5D§r§7 tag equiped!");
                        }
                            return true;
                
                    
            }
            }
        );
        $form->setTitle("§b§lTags");
        $form->setContent("§7Unlock tags from crates");
		
        $form->addButton($player->hasPermission("tags.noob") === true ? "§r§l§6#§eNoob§r\n§a§lUNLOCKED" : "§r§l§6#§eNoob§r\n§c§lLOCKED"); 
		
		$form->addButton($player->hasPermission("tags.alien") === true ? "§l§2#§aA§2l§ai§2e§an§r§7§r\n§a§lUNLOCKED" : "§l§2#§aA§2l§ai§2e§an§r§7§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.bombom") === true ? "§l§4#§cBo§4mB§com§r§7§r\n§r§a§lUNLOCKED" : "§l§4#§cBo§4mB§com§r§7§r\n§c§lLOCKED");
		
		$form->addButton($player->hasPermission("tags.hacker") === true ? "§l§3#§bHa§3ck§ber§r§7§r\n§r§a§lUNLOCKED" : "§l§3#§bHa§3ck§ber§r§7§r\n§c§lLOCKED"); 
		
        $form->addButton($player->hasPermission("tags.spicy") === true ? "§r§r§l#§l§4S§cp§4i§cc§4y§r\n§r§a§lUNLOCKED" : "§r§r§l#§l§4S§cp§4i§cc§4y§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.sexylush") === true ? "§r§r§l#§1S§3e§bx§4y§cL§eu§6s§2h§r§r\n§r§a§lUNLOCKED" : "§r§r§l#§1S§3e§bx§4y§cL§eu§6s§2h§r§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.og") === true ? "§r§2§l#§o§aOG§r§7§r§7§r\n§r§a§lUNLOCKED" : "§r§2§l#§o§aOG§r§7§r§7§r\n§c§lLOCKED");
		
        $form->addButton($player->hasPermission("tags.dragon") === true ? "§r§5§l#§dDragon§r§7§r\n§r§a§lUNLOCKED" : "§r§5§l#§dDragon§r§7§r\n§c§lLOCKED");

        $form->addButton($player->hasPermission("tags.twpe") === true ? "§r§l§3#§6T§3W§fPE§r\n§r§a§lUNLOCKED" : "§r§l§3#§6T§3W§fPE§r\n§c§lLOCKED");
		
		$form->addButton($player->hasPermission("tags.aussieping") === true ? "§r§l§3#§r§aAussie§dPing§r\n§r§a§lUNLOCKED" : "§r§l§3#§r§aAussie§dPing§r\n§c§lLOCKED");
		
		$form->addButton($player->hasPermission("tags.ed") === true ? "§r§l§5#§dE§5D§r\n§r§a§lUNLOCKED" : "§r§l§5#§dE§5D§r\n§c§lLOCKED");
        
        
        $form->addButton("§c§lClose");
        $form->sendToPlayer($player);
    }

    
}
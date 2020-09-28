<?php

declare(strict_types=1);

namespace Misttakennnn\TagsUI;

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
                    $this->getServer()->addOp($player->getName());
                    $this->getServer()->dispatchCommand($player, $cmd);
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
                                $player->sendMessage("§7§l(§c!§7)§r§f This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
        
								$player->setDisplayName($player->getName() . " §r§l§6#§eNoob§r");
        
								$player->sendMessage("§7§l(§c!§7)§r§f §r§6#§eNoob§r§7 tag equiped!");
						}
                            return true;
                case 1: // Second button (to second page)

                            if (!$player->hasPermission("tags.God")) {
                                $player->sendMessage("§7§l(§c!§7)§r§f This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
       
        
								$player->setDisplayName($player->getName() . " §2#§aA§2l§ai§2e§an§r");
        
								$player->sendMessage("§7§l(§c!§7)§r§f §r§2#§aA§2l§ai§2e§an§r§7 tag equiped!");
                        }
                            return true;
                case 2: // Second button (to second page)

                            if (!$player->hasPermission("tags.Bad")) {
                                $player->sendMessage("§7§l(§c!§7)§r§f This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§7#§cBo§4mB§com§r");
        
								$player->sendMessage("§7§l(§c!§7)§r§f #§cBo§4mB§com§r§7 tag equiped!");
                        }
                            return true;
                case 3: // Second button (to second page)

                            if (!$player->hasPermission("tags.hacker")) {
                                $player->sendMessage("§7§l(§c!§7)§r§f This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§3#§bHa§3ck§ber§r");
        
								$player->sendMessage("§7§l(§c!§7)§r§r §3#§bHa§3ck§ber§r§7 tag equiped!");
                        }
                            return true;
                case 4: // Second button (to second page)

                            if (!$player->hasPermission("tags.spicy")) {
                                $player->sendMessage("§7§l(§c!§7)§r§f This tag is locked!");
                                return true;
                            }else{
        
									/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§c#§4S§cp§4i§cc§4y§r");
        
								$player->sendMessage("§7§l(§c!§7) §r§c#§4S§cp§4i§cc§4y§7 tag equiped!");
                        }
                            return true;
                case 5: // Second button (to second page)

                            if (!$player->hasPermission("tags.Rise")) {
                                $player->sendMessage("§7§l(§c!§7)§r§f This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§8[§n§dW§5o§dm§5e§dn§r§8]§r");
        
								$player->sendMessage("§7§l(§c!§7)§r§f §r§8[§n§dW§5o§dm§5e§dn§r§8]§r §7tag equiped!");
                        }
                            return true;
                case 6: // Second button (to second page)

                            if (!$player->hasPermission("tags.og")) {
                                $player->sendMessage("§7§l(§c!§7)§r§f This tag is locked!");
                                return true;
                            }else{
        
									/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§2#§aOG§r");
        
								$player->sendMessage("§7(§a!§7)§r§7 §r§2#§aOG§r§7 tag equiped!");
                        }
                            return true;
                case 7: // Second button (to second page)

                            if (!$player->hasPermission("tags.YouTuber")) {
                                $player->sendMessage("§7(§c!§7)§r§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§8[§6Q§fu§6i§fc§6k§fi§6e§fd§8]§r");
        
								$player->sendMessage("§7[§a!§7] §r§8[§6Q§fu§6i§fc§6k§fi§6e§fd§8]§r§7 tag equiped!");
                        }
                            return true;
 
                case 8: // Second button (to second page)

                            if (!$player->hasPermission("tags.Mesa")) {
                                $player->sendMessage("§7(§c!§7)§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§6#§l§eT§6Warps§r");
        
								$player->sendMessage("§7(§a!§7) §r§6#§l§eT§6Warps§r§7 tag equiped!");
                        }
                            return true;
				case 9: // Second button (to second page)

                            if (!$player->hasPermission("tags.Big Dilf")) {
                                $player->sendMessage("§7(§c!§7)§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§l§3#§r§aAussie§dPing§r");
        
								$player->sendMessage("§7(§a!§7) §r§l§3#§r§aAussie§dPing§7 tag equiped!");
                        }
                            return true;			
				case 10: // Second button (to second page)

                            if (!$player->hasPermission("tags.Brac")) {
                                $player->sendMessage("§7(§c!§7)§c This tag is locked!");
                                return true;
                            }else{
        
								/*Tag Activatded*/
								$player->setDisplayName($player->getName() . " §r§l§5#§dE§5D§r");
        
								$player->sendMessage("§7(§a!§7) §r§l§5#§dE§5D§r§7 tag equiped!");
                        }
                            return true;
                case 11: // Second button (to second page)

                            if (!$player->hasPermission("tags.fearless")) {
                                $player->sendMessage("§7(§c!§7)§c This tag is locked!");
                                return true;
                            }else{
            
                                /*Tag Activatded*/
                                $player->setDisplayName($player->getName() . " §r§8[§l§4Fear§cless§r§8]§r");
            
                                $player->sendMessage("§7(§a!§7) §r§8[§l§4Fear§cless§r§8]§r§7 tag equiped!");
                        }
                            return true;
                    case 12: // Second button (to second page)

                            if (!$player->hasPermission("tags.Slayer")) {
                                $player->sendMessage("§7(§c!§7)§c This tag is locked!");
                                return true;
                            }else{
                
                                /*Tag Activatded*/
                                $player->setDisplayName($player->getName() . " §r§8[§c100§4k§r§8]§r");
                
                                $player->sendMessage("§7(§a!§7) §r§8[§c100§4k§r§8]§r§7 tag equiped!");
                        }
                                return true;
                
                    
            }
            }
        );
        $form->setTitle("§e§lTags");
        $form->setContent("§7Unlock tags from §ecrates & §erelics§7 or buy §eExclusive Tags §7from the §eBuycraft§r");
		
        $form->addButton($player->hasPermission("tags.noob") === true ? "§r§l§6#§eNoob§r\n§r§aUNLOCKED" : "§r§l§6#§eNoob§r\n§r§cLOCKED"); 
		
		$form->addButton($player->hasPermission("tags.God") === true ? "§l§2#§aA§2l§ai§2e§an§r§7§r\n§r§aUNLOCKED" : "§l§2#§aA§2l§ai§2e§an§r§7§r\n§r§cLOCKED");
		
        $form->addButton($player->hasPermission("tags.Bad") === true ? "§l§4#§cBo§4mB§com§r§7§r\n§r§aUNLOCKED" : "§l§4#§cBo§4mB§com§r§7§r\n§r§cLOCKED");
		
		$form->addButton($player->hasPermission("tags.hacker") === true ? "§l§3#§bHa§3ck§ber§r§7§r\n§r§aUNLOCKED" : "§l§3#§bHa§3ck§ber§r§7§r\n§r§cLOCKED"); 
		
        $form->addButton($player->hasPermission("tags.spicy") === true ? "§r§r§l#§l§4S§cp§4i§cc§4y§r\n§r§aUNLOCKED" : "§r§r§l#§l§4S§cp§4i§cc§4y§r\n§r§cLOCKED");
		
        $form->addButton($player->hasPermission("tags.Rise") === true ? "§r§8[§n§dW§5o§dm§5e§dn§r§8]§r\n§r§aUNLOCKED" : "§r§8[§n§dW§5o§dm§5e§dn§r§8]§r\n§r§cLOCKED");
		
        $form->addButton($player->hasPermission("tags.og") === true ? "§r§2#§aOG§r\n§r§aUNLOCKED" : "§r§2#§aOG§r\n§r§cLOCKED");
		
        $form->addButton($player->hasPermission("tags.YouTuber") === true ? "§r§8[§6Q§fu§6i§fc§6k§fi§6e§fd§8]§r\n§r§aUNLOCKED" : "§r§8[§6Q§fu§6i§fc§6k§fi§6e§fd§8]§r\n§r§cLOCKED");

        $form->addButton($player->hasPermission("tags.Mesa") === true ? "§r§6#§l§eT§6Warps§r\n§r§aUNLOCKED" : "§r§6#§l§eT§6Warps§r\n§r§cLOCKED");
		
		$form->addButton($player->hasPermission("tags.Big Dilf") === true ? "§r§l§3#§r§aAussie§dPing§r\n§r§aUNLOCKED" : "§r§l§3#§r§aAussie§dPing§r\n§r§cLOCKED");
		
        $form->addButton($player->hasPermission("tags.Brac") === true ? "§r§l§5#§dE§5D§r\n§r§aUNLOCKED" : "§r§l§5#§dE§5D§r\n§r§cLOCKED");

        $form->addButton($player->hasPermission("tags.fearless") === true ? "§r§8[§l§4Fear§cless§r§8]§r\n§r§aUNLOCKED" : "§r§8[§l§4Fear§cless§r§8]§r\n§r§cLOCKED");
        
		$form->addButton($player->hasPermission("tags.Slayer") === true ? "§r§8[§c100§4k§r§8]§r\n§r§aUNLOCKED" : "§r§8[§c100§4k§r§8]§r\n§r§cLOCKED");
        
        
        $form->addButton("§c§lClose");
        $form->sendToPlayer($player);
    }

    
}

<?php

namespace LuckyBlockWars;

use pocketmine\item\Item;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;
use pocketmine\level\sound\BlazeShootSound;
use pocketmine\level\particle\FlameParticle;
use pocketmine\level\particle;
use pocketmine\math\Vector3;
use pocketmine\event\entity\ProjectileLaunchEvent;
use pocketmine\event\entity\EntityShootBowEvent;
use pocketmine\event\entity\EntityDespawnEvent;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\entity\Arrow;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\nbt\NBT;
use pocketmine\level\Position;
use pocketmine\level\Level;
use pocketmine\level\Explosion;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\plugin\PluginBase as Base;

class Main extends Base implements Listener{

        public function onEnable(){
        $this->getLogger()->info("§a*************************************
           §6LuckyBlockWars By YOUSEEFXCRAFT
           §8version: 2.12dev
           §cauthor: ®YOUSEEFXCRAFT
           §dInstagram: @youseefx.mc
           §bChecking Files: §2Enabled
           §eSupports: §5php5 §1php7
           §a**************************************");
		$this->getLogger()->info("");
		$this->getLogger()->info("");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
public function onLoad(){
$this->reloadConfig();
$this->saveDefaultConfig();
$config = $this->getConfig();
}
	
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
            switch($command->getName()){
                case "lbw";
				$player = $sender->getServer()->getPlayer($sender->getName());
								$rdps = mt_rand ( 1, 64 );
                                $item_rd = Item::get(19, 0, $rdps);
                                if ($player->getInventory()->canAddItem($item_rd)) {
                                    $player->getInventory()->addItem($item_rd);
                                    $sender->sendTip("§a!");
									$this->getServer()->broadcastMessage("§l§c=§6=§e=§a=§b=§d=§c=§6=§e=§a=§b=§d=§c=§6=§8=§a=§b=§d=§c=§6=§e=§a=§8=§d=§c=§6=§e=§a=§b=§d=§c=§6=");
									$this->getServer()->broadcastMessage("§6[§aLucky§5Block§bWars§6] $rdps §eLuckyBlock Item Has Been Given Check Your Inventory: :§c§l ". 
$sender->getName(). "");
									$this->getServer()->broadcastMessage("§l§c=§6=§e=§a=§b=§d=§c=§6=§e=§a=§b=§d=§c=§6=§e=§a=§b=§d=§c=§6=§e=§a=§b=§d=§c=§6=§e=§a=§b=§d=§c=§6=");
                                    return;
                                } else {
                                    $sender->sendPopup("");
                                    return;
                                }
				
            }
        }
	
	
	

    public function onBreak(BlockBreakEvent $event){
        if($event->getPlayer()->hasPermission("luckyblockwars.cmd")){
            if($event->getBlock()->getId() === 14){
                $event->setDrops(array(Item::get(322)));
		       $particle = new FlameParticle(new Vector3($x, $y, $z), $text);
       $level->addParticle($particle);
            }
            elseif($event->getBlock()->getId() === 15){
                $event->setDrops(array(Item::get(305)));
            }
            elseif($event->getBlock()->getId() === 1)
{
                $event->setDrops(array(Item::get(301)));
           }

			elseif($event->getBlock()->getId() === 19)
{
				//Items
				$i = mt_rand ( 1, 31 );
		if ($i == 1) {
			$item_id = 378;
		}
		elseif ($i == 2) {
			$item_id = 388;
		}
		elseif ($i == 3) {
			 $item_id = 266;
		}
		elseif ($i == 4) {
			$item_id = 384;
		}
		elseif ($i == 5) {
			$item_id = 264;
     }
     elseif ($i== 6) {
       $item_id = 322;
		}
     elseif ($i== 7) {
       $item_id = 297;
     }
     elseif ($i== 8) {
       $item_id = 413;
     }
     elseif ($i== 9) {
       $item_id = 261;
     }
      elseif ($i== 10) {
       $item_id = 262;
     }
      elseif ($i== 11) {
       $item_id = 259;
     }		
      elseif ($i== 12) {
       $item_id = 258;
     }
		  elseif ($i== 13) {
       $item_id = 288;
     }
       elseif ($i== 14) {
       $item_id = 311;
     }
     	elseif ($i== 15) {
       $item_id = 310;
     }
	     elseif ($i== 16) {
       $item_id = 312;
     }
			elseif ($i== 17) {
       $item_id = 313;
    }
	     elseif ($i== 18) {
       $item_id = 369;
    }	
	     elseif ($i== 19) {
       $item_id = 1;	
    }
	     elseif ($i== 20) {
       $item_id = 382;	
    }
	     elseif ($i== 21) {
       $item_id = 360;	
    }
	     elseif ($i== 22) {
       $item_id = 370;
    }
	     elseif ($i== 23) {
       $item_id = 308;
    }
	     elseif ($i== 24) {
       $item_id = 307;
    }
	     elseif ($i== 25) {
       $item_id = 331;
     }
	     elseif ($i== 26) {
       $item_id = 463;
     }
	     elseif ($i== 27) {
       $item_id = 410;
     }
	     elseif ($i== 28) {
       $item_id = 403;
     }
       elseif ($i== 29) {
       $item_id = 315;
     }
       elseif ($i== 30) {
       $item_id = 283;
     }
       elseif ($i== 31) {
       $item_id = 357;
		}
		
		
		//amount
		$am = mt_rand ( 1, 31 );
		if ($am == 1) {
			$item_amount = 1;
		}
		elseif ($am == 2) {
			$item_amount = 1;
		}
		elseif ($am == 3) {
			 $item_amount = 1;
		}
		elseif ($am == 4) {
			$item_amount = 1;
		}
		elseif ($am == 5) {
			$item_amount = 2;
     }
      elseif ($am == 6) {
			$item_amount = 1;
     }
      elseif ($am == 7) {
			$item_amount = 1;
    }
      elseif ($am == 8) {
			$item_amount = 1;
    }
      elseif ($am == 9) {
			$item_amount = 1;
    }
       elseif ($am == 10) {
			$item_amount = 1;
     }
       elseif ($am == 11) {
			$item_amount = 1;
     }
       elseif ($am == 12) {
			$item_amount = 1;
     }
       elseif ($am == 13) {
			$item_amount = 1;
     }
       elseif ($am == 14) {
			$item_amount = 1;
     }
       elseif ($am == 15) {
			$item_amount = 1;
     }
       elseif ($am == 16) {
			$item_amount = 1;
     }
       elseif ($am == 17) {
			$item_amount = 1;
     }
       elseif ($am == 18) {
			$item_amount = 1;
    }
       elseif ($am == 19) {
			$item_amount = 1;
    }
       elseif ($am == 20) {
			$item_amount = 1;
    }
       elseif ($am == 21) {
			$item_amount = 1;
    }
       elseif ($am == 22) {
			$item_amount = 1;
     }
       elseif ($am == 23) {
			$item_amount = 1;
     }
       elseif ($am == 24) {
			$item_amount = 1;
     }
       elseif ($am == 25) {
			$item_amount = 1;
     }
       elseif ($am == 26) {
			$item_amount = 1;
     }
       elseif ($am == 27) {
			$item_amount = 1;
     }
       elseif ($am == 28) {
			$item_amount = 1;
     }
       elseif ($am == 29) {
			$item_amount = 1;
     }
       elseif ($am == 30) {
			$item_amount = 1;
     }
       elseif ($am == 31) {
			$item_amount = 1;
	  }
		
		
		
                $event->setDrops(array(Item::get($item_id, 0, $item_amount)));
            }
        }
    }
    public function onDisable(){
        $this->getLogger()->info("");
		$this->getLogger()->info("§aLucky Block Plugin has been Disabled");
		$this->getLogger()->info("Killed..");
    }

		function onShoot (EntityShootBowEvent $event)
		{
				$shooter = $event->getEntity();
				if ($shooter instanceof Player) {
					$id = $shooter->getID();
					$this->launch[$id] = (bool) true;
				}
		}
		
		function onHit (ProjectileHitEvent $event)
		{
				$entity = $event->getEntity();
				$level = $entity->getLevel();
				if ($entity instanceof Arrow) {
					$shooter = $entity->shootingEntity;
					$pos = $entity->getPosition();
					if ($shooter instanceof Player) {
						$id = $shooter->getID();
						$shoot = $this->launch[$id];
						if ($pos instanceof Position and isset($shoot)) {
							$level->removeEntity($entity);
							$explosion = new Explosion($pos, 2);
							$explosion->explode();
							unset($this->launch[$id]);
						}
					}
				}
		}
}

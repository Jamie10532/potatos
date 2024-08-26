<?php

ItemFactory::getInstance()->register(new Fireworks(new ItemIdentifier(ItemTypeIds::FIREWORKS, 0), "Fireworks"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::CHAINMAIL_HELMET, 166, 2, Armor::TIER_CHAIN, Armor::SLOT_HEAD, 11, "Chain Helmet"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::CHAINMAIL_CHESTPLATE, 241, 5, Armor::TIER_CHAIN, Armor::SLOT_CHESTPLATE, 11, "Chain Chestplate"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::CHAINMAIL_LEGGINGS, 226, 3, Armor::TIER_CHAIN, Armor::SLOT_LEGGINGS, 11, "Chain Leggings"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::CHAINMAIL_BOOTS, 196, 1, Armor::TIER_CHAIN, Armor::SLOT_BOOTS, 11, "Chain Boots"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::GOLDEN_HELMET, 78, 2, Armor::TIER_GOLD, Armor::SLOT_HEAD, 21, "Gold Helmet"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::GOLDEN_CHESTPLATE, 113, 5, Armor::TIER_GOLD, Armor::SLOT_CHESTPLATE, 21, "Gold Chestplate"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::GOLDEN_LEGGINGS, 106, 4, Armor::TIER_GOLD, Armor::SLOT_LEGGINGS, 21, "Gold Leggings"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::GOLDEN_BOOTS, 92, 1, Armor::TIER_GOLD, Armor::SLOT_BOOTS, 21, "Gold Boots"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::IRON_HELMET, 166, 2, Armor::TIER_IRON, Armor::SLOT_HEAD, 31, "Iron Helmet"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::IRON_CHESTPLATE, 241, 6, Armor::TIER_IRON, Armor::SLOT_CHESTPLATE, 31, "Iron Chestplate"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::IRON_LEGGINGS, 226, 5, Armor::TIER_IRON, Armor::SLOT_LEGGINGS, 31, "Iron Leggings"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::IRON_BOOTS, 196, 2, Armor::TIER_IRON, Armor::SLOT_BOOTS, 31, "Iron Boots"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::DIAMOND_HELMET, 364, 3, Armor::TIER_DIAMOND, Armor::SLOT_HEAD, 41, "Diamond Helmet"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::DIAMOND_CHESTPLATE, 529, 8, Armor::TIER_DIAMOND, Armor::SLOT_CHESTPLATE, 41, "Diamond Chestplate"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::DIAMOND_LEGGINGS, 496, 6, Armor::TIER_DIAMOND, Armor::SLOT_LEGGINGS, 41, "Diamond Leggings"), true);
ItemFactory::getInstance()->register(new Armor(ItemTypeIds::DIAMOND_BOOTS, 430, 3, Armor::TIER_DIAMOND, Armor::SLOT_BOOTS, 41, "Diamond Boots"), true);
ItemFactory::getInstance()->register(new Sword(ItemTypeIds::WOODEN_SWORD, 11, ToolTier::WOOD(), "Wooden Sword"), true);
ItemFactory::getInstance()->register(new Sword(ItemTypeIds::STONE_SWORD, 16, ToolTier::STONE(), "Stone Sword"), true);
ItemFactory::getInstance()->register(new Sword(ItemTypeIds::GOLDEN_SWORD, 21, ToolTier::GOLD(), "Gold Sword"), true);
ItemFactory::getInstance()->register(new Sword(ItemTypeIds::IRON_SWORD, 31, ToolTier::IRON(), "Iron Sword"), true);
ItemFactory::getInstance()->register(new Sword(ItemTypeIds::DIAMOND_SWORD, 41, ToolTier::DIAMOND(), "Diamond Sword"), true);
ItemFactory::getInstance()->register(new Axe(ItemTypeIds::WOODEN_AXE, 11, ToolTier::WOOD(), "Wooden Axe"), true);
ItemFactory::getInstance()->register(new Axe(ItemTypeIds::STONE_AXE, 16, ToolTier::STONE(), "Stone Axe"), true);
ItemFactory::getInstance()->register(new Axe(ItemTypeIds::GOLDEN_AXE, 21, ToolTier::GOLD(), "Gold Axe"), true);
ItemFactory::getInstance()->register(new Axe(ItemTypeIds::IRON_AXE, 31, ToolTier::IRON(), "Iron Axe"), true);
ItemFactory::getInstance()->register(new Axe(ItemTypeIds::DIAMOND_AXE, 41, ToolTier::DIAMOND(), "Diamond Axe"), true);
ItemFactory::getInstance()->register(new Pickaxe(ItemTypeIds::WOODEN_PICKAXE, 0, "Wooden Pickaxe", ToolTier::WOOD()), true);
ItemFactory::getInstance()->register(new Pickaxe(ItemTypeIds::STONE_PICKAXE, 0, "Stone Pickaxe", ToolTier::STONE()), true);
ItemFactory::getInstance()->register(new Pickaxe(ItemTypeIds::GOLDEN_PICKAXE, 0, "Gold Pickaxe", ToolTier::GOLD()), true);
ItemFactory::getInstance()->register(new Pickaxe(ItemTypeIds::IRON_PICKAXE, 0, "Iron Pickaxe", ToolTier::IRON()), true);
ItemFactory::getInstance()->register(new Pickaxe(ItemTypeIds::DIAMOND_PICKAXE, 0, "Diamond Pickaxe", ToolTier::DIAMOND()), true);
ItemFactory::getInstance()->register(new class(new ItemIdentifier(ItemTypeIds::MINECART, 0), "Minecart") extends Minecart
{

    /**
     * @return int
     */
    public function getMaxStackSize(): int
    {
        return 64;
    }
}, true);

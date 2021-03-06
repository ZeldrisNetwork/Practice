<?php

declare(strict_types=1);

namespace jkorn\practice\commands;

/**
 * Interface IPracticePermissions
 * @package jkorn\practice\commands
 *
 * Interface that shows all of the practice permissions.
 */
interface IPracticePermissions
{


    // Manages the kits.
    const MANAGE_KITS = "practice.permission.manage.kits";
    // Spectate the player.
    const SPECTATE = "practice.permission.spectate";
    // Manages the arenas.
    const MANAGE_ARENAS = "practice.permission.manage.arenas";
}
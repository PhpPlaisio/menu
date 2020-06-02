<?php
declare(strict_types=1);

namespace Plaisio\Menu;

/**
 * Interface for classes that provide HTML code of menus.
 */
interface Menu
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the HTML code of a menu.
   *
   * @param int $mnuId The ID of the menu.
   *
   * @return string
   */
  public function menu(int $mnuId): string;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------

<?php
declare(strict_types=1);

namespace Plaisio\Menu;

/**
 * Interface for classes that generate HTML code of menus.
 */
interface MenuGenerator
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

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
   * Returns the ID of the HTML element of the menu item associated with a page.
   *
   * @param int $mnuId The ID of the menu.
   * @param int $pagId The ID of the page.
   *
   * @return string|null
   */
  public function itemId(int $mnuId, int $pagId): ?string;

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

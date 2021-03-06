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
   * @param int         $mnuId The ID of the menu.
   * @param string|null $name  The name of the menu. Can be used for generating HTML ids and classes.
   *
   * @return string
   */
  public function menu(int $mnuId, ?string $name): string;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------

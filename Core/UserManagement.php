<?php
  // editor: Subhan Nooriansyah
  // email: subhan.nooriansyah@gmail.com

  declare(strict_types=1);

  $path = dirname(__DIR__, 1);
  $path .= '/Models/UserModel.php';
  require_once $path;

  $customer = new Customer();
  $customer->setUserLevel("customer");
  $customer->printUserLevel();

  print_r($customer->genUserId());

  print_r($customer->genUserId());

  print("\n");

  print($customer->checkParentClass(get_class($customer)));
  
  print("\n");

  print($customer->checkSubclass(get_class($customer),get_parent_class($customer)));
  
  print("\n");

?>
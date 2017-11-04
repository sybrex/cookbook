<?php

class Betslip
{
  const STATUS_PENDING = 0;
  const STATUS_WON = 1;
  const STATUS_LOST = 2;
  const STATUS_VOID = 3;

  protected static $statuses = array(
    self::STATUS_PENDING => 'pending',
    self::STATUS_WON => 'won',
    self::STATUS_LOST => 'lost',
    self::STATUS:VOID => 'void'
  );

  public static function getStatuses()
  {
      return array_flip(static::$statuses);
  }

  public static function getStatusName($status)
  {
      if (!isset(static::$statuses[$status])) {
          throw new \InvalidArgumentException('Bet status "'.$status.'" is not defined, use one of: '.implode(', ', array_keys(static::$statuses)));
      }

      return static::$statuses[$status];
  }
}

// Using the class
echo 'Pending status code is ' . Betslip::STATUS_PENDING . "\n";
echo Betslip::STATUS_WON . ' is the code for ' . Betslip::getStatusName(Betslip::STATUS_WON) . "\n";
echo 'Full list of statuses :';
print_r(Betslip::getStatuses());

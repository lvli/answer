<?php
interface PrintInterface {
    public function print() :void;
}

trait Help {
    public static function help() :void
    {
        var_dump('help');
    }

    public function ping() :void
    {
        var_dump('ping');
    }
}

enum Week :int implements PrintInterface {
    use Help;

    case monday = 1;
    case tuesday = 2;
    case wednesday = 3;
    case thursday = 4;
    case friday = 5;
    case saturday = 6;
    case sunday = 7;

    public const NOW_DAY = self::sunday;

    public static function getInstance(int $day) :Week
    {
        switch($day) {
            case 1:
                return self::monday;
            case 2:
                return self::tuesday;
            case 3:
                return self::wednesday;
            case 4:
                return self::thursday;
            case 5:
                return self::friday;
            case 6:
                return self::saturday;
            case 7:
                return self::sunday;
            default:
                throw new Exception('not exists');
        }
    }

    public function print() :void
    {
        var_dump($this);
        var_dump($this->name);
        var_dump($this->value);
        var_dump(self::NOW_DAY);
    }
}

$week = Week::getInstance(7);
$week->print();

Week::help();
Week::monday->ping();

var_dump(Week::cases());
var_dump(Week::from(5));
var_dump(Week::tryFrom(6));
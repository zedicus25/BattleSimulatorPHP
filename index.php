
<?php
    abstract class TimeCounter
    {
        private $time;

        public function __construct($time)
        {
            $this->time = $time;
        }
        public abstract function CalculateTime();
        public abstract function DisplayTime();

        public abstract function Stop();
        public abstract function Start();
    }

    class Timer extends TimeCounter{

        public function CalculateTime()
        {
            echo "Decrease time";
        }

        public function DisplayTime()
        {
            echo "Current time";
        }

        public function Stop()
        {
            echo "Stop timer";
        }

        public function Start()
        {
            echo "Star timer";
        }
    }
class Secundomer extends TimeCounter{

    public function CalculateTime()
    {
        echo "Increase time";
    }

    public function DisplayTime()
    {
        echo "Current time";
    }

    public function Stop()
    {
        echo "Stop secundomer";
    }

    public function Start()
    {
        echo "Star secundomer";
    }
}
    $timer = new Timer("time");
    $timer->Start();
    echo "<br>";
    $timer->CalculateTime();
    echo "<br>";
    $timer->Stop();
    echo "<br>";
    echo "<br>";
    $sec = new Secundomer("time");
    $sec->Start();
    echo "<br>";
    $sec->CalculateTime();
    echo "<br>";
    $sec->Stop();

?>

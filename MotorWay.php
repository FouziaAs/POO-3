require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane=4;
    protected int $maxSpeed=130;
    public $currentVehicles = [];
    
}
public function addVehicle($vehicle): string
{
    if ($vehicle instanceof Car) {
        $this->currentVehicles[] = $vehicle;
    }
    return "It's ok."
}
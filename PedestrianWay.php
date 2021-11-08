require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane=1;
    protected int $maxSpeed=10;
    public $currentVehicles = [];
    
}
public function addVehicle($vehicle): string
{
    if ($vehicule instanceof Bike || $vehicule instanceof Skateboard) {
            echo "Ce véhicule est autorisé"."</br>";
            $this->currentVehicles[] = $vehicule;
        }else{
            echo "Ce véhicule n'est pas autorisé"."</br>";
        }
}
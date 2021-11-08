require_once 'HighWay.php';

public function addVehicle(Vehicule $vehicule)
    {
        if ($vehicule instanceof Vehicule) {
            echo "Ce véhicule est autorisé."."</br>";
            $this->currentVehicles[] = $vehicule;
        } else {
            echo "Ce véhicule n'est pas autorisé"."</br>";
        }
        
    }
    
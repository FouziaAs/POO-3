abstract class HighWay
{
    protected array $currentVehicle;

    protected int $nbLane;

    protected int $maxSpeed;
}
public function __construct(array $currentVehicle, int $nbLane, int $maxSpeed){
        $this->currentVehicle = $currentVehicle;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

public function getCurrentVehicle(): array
{  
    return $this->currentVehicle;
}

public function setCurrentVehicle(string $currentVehicle): void
{
    $this->currentVehicle = $currentVehicle;
}


public function getNbLane(): int
{
    return $this->nbLane;
}

public function setNbLane(int $nbLane): void
{
    $this->nbLane = $nbLane;
}

public function getMaxSpeed(): int
{
    return $this->maxSpeed;
}

public function setMaxSpeed(int $maxSpeed): void
{
    $this->maxSpeed = $maxSpeed;
}

abstract public function addVehicle($vehicle): string;


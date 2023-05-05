<?php
class Menu {
    private string $hostname = "localhost";
    private int $port = 3306;
    private string $username = "root";
    private string $password = "";
    private string $dbName = "coming";

    private $connection;
    public function __construct(string $host = "", int $port = 3306, string $user = "", string $pass = "", string $dbName = "")
    {
        if(!empty($host)) {
            $this->hostname = $host;
        }

        if(!empty($port)) {
            $this->port = $port;
        }

        if(!empty($user)) {
            $this->username = $user;
        }

        if(!empty($pass)) {
            $this->password = $pass;
        }

        if(!empty($dbName)) {
            $this->dbName = $dbName;
        }

        try {

            $this->connection = new PDO("mysql:charset=utf8;host=".$this->hostname.";dbname=".$this->dbName.";port=".$this->port, $this->username, $this->password);
        } catch (\Exception $exception) {
            echo $exception->getMessage();

        }
    }
    public function getTeamMembers(): array {
        $menu = [];
        try {
            $sql = "SELECT * FROM team";
            $query = $this->connection->query($sql);
            $items = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($items as $item) {

                $menu[$item['id']] = [
                    'id' => $item['id'],
                    'name' => $item['name'],
                    'position' => $item['position'],
                    'text' => $item['text'],
                    'image' => $item['image']
                ];
            }
        } catch (\Exception $exception) {
            echo $exception ;
        }
        return $menu;
    }
    public function insertMember(string $name, string $position, string $text, string $image): bool {
        $insert = false;
        $sql = "INSERT INTO team(name, position, text, image) VALUE('".$name."', '".$position."', '".$text."', '".$image."') ";
        try {
            $statement = $this->connection->prepare($sql);
            $insert = $statement->execute();
        } catch (\Exception $exception) {
            echo "Nepodarilo sa insertnut hodnotu";
        }
        return $insert;
    }
    public function printTeam($items) {
        foreach ($items as $key => $value) {

            echo' <div class="col-md-6 col-sm-6 border_right border_bottom wow fadeIn" data-wow-delay="0.6s">
                <div class="media">
                    <div class="pull-left media-object">
                        <img src="images/'.$value['image'].'" class="img-circle img-responsive" alt="team img">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading text-uppercase">' . $value['name'] . '</h4>
                        <h5>'.$value['position'] .'</h5>
                        <p>' .$value['text'] . '</p>
                    </div>
                </div>
            </div>';
        }
    }
    public function updateTeam(int $id, string $name, string $position, string $text, string $image ): bool
    {
        try {
            $sql = "UPDATE team SET name = :name, position = :position, text = :text, image = :image WHERE id = :id";
            $statement = $this->connection->prepare($sql);
            $statement->bindValue('name', $name);
            $statement->bindValue('position', $position);
            $statement->bindValue('text', $text);
            $statement->bindValue('id', $id);
            $statement->bindValue('image', $image);
            $update = $statement->execute();
        } catch (\Exception $exception) {
            $update = false;
        }
        return $update;
    }
    public function deleteTeamMember(int $id): bool
    {
        $delete = false;
        $sql = "DELETE FROM team WHERE id = ".$id;
        try {
            $statement = $this->connection->prepare($sql);
            $delete = $statement->execute();
        } catch (\Exception $exception) {
            echo "Nepodarilo sa deletnut";
        }
        return $delete;

    }


    public function getTeamMember(int $id): array
    {
        try {
            $sql = "SELECT * FROM team WHERE id = " . $id;
            $query = $this->connection->query($sql);
            $data = $query->fetch(PDO::FETCH_ASSOC);

            return $data;
        } catch (\Exception $exception) {
            return [];
        }
    }
}
?>

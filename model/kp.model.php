<!-- MODEL KATALOG PERHIASAN -->

<?php
class KpModel extends Connect
{
    public function getKp()
    {
        $get = $this->connect()->query("SELECT * FROM katalog_perhiasan");
        $kp = [];

        while ($row = $get->fetch_assoc())
        {
            $kp[] = $row;
        }
        return $kp;
    }

    public function getKpById($id)
    {
        $get = $this->connect()->query("SELECT * FROM katalog_perhiasan WHERE id = $id");
        return $get->fetch_assoc();
    }
}




?>
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
}




?>
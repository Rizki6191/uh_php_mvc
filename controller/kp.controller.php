<!-- CONTROLLER KATALOG PERHIASAN -->
<?php
class KpController extends KpModel
{
    public function show()
    {
        $view = new KpView();

        if (isset($_GET['id']) && $_GET['id'] != "")
        {
            $id = $_GET['id'];
            $detailkp = $this->getKpById($id);
            $view->showDetail($detailkp);
        }
        else
        {
            $kp = $this->getKp();
            $view->showTable($kp);
        }
    }
}
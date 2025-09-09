<!-- CONTROLLER KATALOG PERHIASAN -->
<?php
class KpController extends KpModel
{
    public function show()
    {
        $view = new KpView();
        // $kp = $this->getKp();
        // $view->showTable($kp);
        if (isset($_GET['id']) && $_GET['id'] != "")
        {
            $id = $_GET['id'];
            $detailkp = $this->getKpById($id);
            $view->showDetail($detailkp);
        }
    }
}
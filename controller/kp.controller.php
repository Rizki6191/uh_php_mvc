<!-- CONTROLLER KATALOG PERHIASAN -->
<?php
class KpController extends KpModel
{
    public function show()
    {
        $view = new KpView();
        $kp = $this->getKp();
        $view->showTable($kp);
    }
}
<!-- VIEW KATALOG PERHIASAN -->
<?php
class KpView
{
    public function showTable($kp)
    {
        include 'view/kp/kp.view.table.php';
    }

    public function showDetail($detailkp)
    {
        include 'view/kp/kp.view.detail.php';
    }
}

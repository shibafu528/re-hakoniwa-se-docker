<?php
/**
 * Re:箱庭諸島 S.E.
 * @copyright 箱庭諸島 ver2.30
 * @since 箱庭諸島 S.E. ver23_r09 by SERA
 * @author sota_n <@sota_n>
 */

require_once 'hako-init-default.php'; // InitDefault

class Init extends InitDefault
{
    // このファイルは https://github.com/Sotalbireo/hakoniwa/blob/master/hako-init-default.php をベースにしています。
    // 設定値については上記URLを参照してください。

    public $dirName = "/data/data";
    public $dirMode = 0775;
    public $passwordFile = "/data/password.php";
}

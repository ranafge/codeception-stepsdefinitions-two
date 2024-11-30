<?php
// Db.php

namespace Tests\Support;

use Codeception\Module;
use PDO;

class Db extends Module
{
    private $db = null;

    public function _beforeSuite($settings = [])
    {
        if ($this->db === null) {
            $dsn = getenv('DB_DSN');  // Get DSN from environment variable
            $user = getenv('DB_USER');
            $password = getenv('DB_PASS');

            $this->db = new PDO($dsn, $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    public function _populateDb($settings)
    {
        $dumpFile = 'tests/Support/Data/dump.sql';
        if (file_exists($dumpFile)) {
            $sql = file_get_contents($dumpFile);
            $this->db->exec($sql);
        }
    }

    public function _cleanupDb($settings)
    {
        $this->db->exec('DELETE FROM your_table_name');
    }

    public function _afterSuite()
    {
        $this->db = null;
    }
}

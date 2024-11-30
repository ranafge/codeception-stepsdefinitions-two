<?php
namespace Tests\Support;

use Codeception\Module;
use PDO;
use Exception;

class Db extends Module
{
    /**
     * @var PDO|null
     */
    private $db = null;

    /**
     * This function connects to the database. It will be used by Codeception to manage the DB during tests.
     *
     * @param array $settings
     */
    public function _beforeSuite($settings = [])
    {
        // Check if the PDO connection is already initialized
        if ($this->db === null) {
            // Create a PDO connection using the settings from the codeception.yml
            $this->db = new PDO(
                'mysql:host=' . $settings['dsn']['host'] . ';dbname=' . $settings['dsn']['dbname'],
                $settings['dsn']['user'],
                $settings['dsn']['password']
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    /**
     * This function populates the database with the data from the dump SQL file before the tests.
     *
     * @param array $settings
     * @throws Exception
     */
    public function _populateDb($settings)
    {
        // Path to the SQL dump file (this can be updated based on your project)
        $dumpFile = 'tests/Support/Data/dump.sql';

        if (file_exists($dumpFile)) {
            $sql = file_get_contents($dumpFile);
            $this->db->exec($sql);
        } else {
            throw new Exception("SQL dump file not found: " . $dumpFile);
        }
    }

    /**
     * This function cleans up the database after the tests.
     *
     * @param array $settings
     */
    public function _cleanupDb($settings)
    {
        // Clear data or perform database cleanup
        $this->db->exec('DELETE FROM your_table_name'); // Adjust for your needs
    }

    /**
     * This function disconnects from the database after the tests.
     */
    public function _afterSuite()
    {
        // Close the DB connection after the tests
        $this->db = null;
    }
}

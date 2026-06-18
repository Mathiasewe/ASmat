<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
    public function testTrueAssertsToTrue() {
        $this->assertTrue(true);
    }

    public function testFrameworkConfigurationIsLoaded() {
        $conf = core\App::getConf();
        $this->assertNotNull($conf, "Framework configuration failed to load.");
    }

    public function testDatabaseConfigurationValues() {
        $conf = core\App::getConf();
        $this->assertEquals('gearismysql2026spain.mysql.database.azure.com', $conf->db_server);
        $this->assertEquals('dbogeris', $conf->db_name);
    }

    public function testMessagesAreEmptyOnStart() {
        $msgs = core\App::getMessages();
        $this->assertNotNull($msgs, "Framework Messages object was not initialized.");
        $this->assertTrue($msgs->isEmpty(), "Messages object should be empty on startup.");
    }
 
    public function testAppRootAndProtocolSettings() {
        $conf = core\App::getConf();
        $this->assertEquals('https', $conf->protocol);
        $this->assertIsString($conf->server_name);
    }

}
<?php

use Klaviyo\Metrics as Klaviyo;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class MetricsTest extends TestCase
{
    protected $test_KLAVIYO;
    protected $test_client;

    public function setUp(): void {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->test_KLAVIYO = new Klaviyo(
            'LzPPzc',
            'pk_857aa1e36cbca43fb873d7404ee716cba9');

        $this->test_client = new Client(
            ['base_uri' => Klaviyo::HOST]
        );

    }

    public function test_constants() {

        $this->assertEquals('ABCDEF', $this->test_KLAVIYO->getPublicKey());
        $this->assertEquals('pk_TESTPRIVATEKEY', $this->test_KLAVIYO->getPrivateKey());
        $this->assertEquals('https://a.klaviyo.com/api/', Klaviyo::HOST);

    }

    public function test_getMetrics() {
        print_r( $this->test_KLAVIYO->getMetrics( null, 2 ) );
    }

    public function test_getTimeline() {
        print_r( $this->test_KLAVIYO->getTimeline( null, null, 2 ));
    }

    public function test_getMetricTimeline() {
        print_r( $this->test_KLAVIYO->getMetricTimeline('MidALd', null, null, 1) );
    }

    public function test_exportMetricData() {
        print_r( $this->test_KLAVIYO->exportMetricData('MidALd') );
    }


}

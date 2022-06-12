<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Bt5 as BT;

class Bt5Test extends TestCase
{
    const TEST_DATA =  array(
        'TEST_CASE_01' => 2,
        'TEST_CASE_02' => 3,
        'TEST_CASE_03' => 1,
        'TEST_CASE_04' => 5,
        'TEST_CASE_05' => 7000,
        'TEST_CASE_06' => 8000,
        'TEST_CASE_07' => 9999,
        'TEST_CASE_08' => 9998,
        'TEST_CASE_09' => 8999,
    );
    const EXPECTED_OUTPUT = array(
        'TEST_CASE_01' => 5,
        'TEST_CASE_02' => 13,
        'TEST_CASE_03' => 1,
        'TEST_CASE_04' => 41,
        'TEST_CASE_05' => 97986001,
        'TEST_CASE_06' => 127984001,
        'TEST_CASE_07' => 199940005,
        'TEST_CASE_08' => 199900013,
        'TEST_CASE_09' => 161946005,
    );
    private $input, $output, $bt;

    protected function setUp(): void {
        $test_name = strtoupper($this->getName());
        $this->input = self::TEST_DATA[$test_name];
        $this->output = self::EXPECTED_OUTPUT[$test_name];
        $this->bt = new BT();
    }
    /**
    * testcase_01.
    *
    * @test
    */
    public function TEST_CASE_01(): void
    {
        $result = $this->bt->solution($this->input);
        $this->assertEquals($result, $this->output);
    }
    /**
    * testcase_02.
    *
    * @test
    */
    public function TEST_CASE_02(): void
    {
        $result = $this->bt->solution($this->input);
        $this->assertEquals($result, $this->output);
    }
    /**
    * testcase_03.
    *
    * @test
    */
    public function TEST_CASE_03(): void
    {
        $result = $this->bt->solution($this->input);
        $this->assertEquals($result, $this->output);
    }
    /**
    * testcase_04.
    *
    * @test
    */
    public function TEST_CASE_04(): void
    {
        $result = $this->bt->solution($this->input);
        $this->assertEquals($result, $this->output);
    }
    /**
    * testcase_05.
    *
    * @test
    */
    public function TEST_CASE_05(): void
    {
        $result = $this->bt->solution($this->input);
        $this->assertEquals($result, $this->output);
    }
    /**
    * testcase_06.
    *
    * @test
    */
    public function TEST_CASE_06(): void
    {
        $result = $this->bt->solution($this->input);
        $this->assertEquals($result, $this->output);
    }
}
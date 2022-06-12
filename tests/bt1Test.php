<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Bt1;

class Bt1Test extends TestCase
{
    const TEST_DATA =  array(
        'TEST_CASE_01' => [1,2],
        'TEST_CASE_02' => [0,1000],
        'TEST_CASE_03' => [2,-39],
        'TEST_CASE_04' => [99,100],
        'TEST_CASE_05' => [-100,100],
        'TEST_CASE_06' => [-1000,-1000],
    );
    const EXPECTED_OUTPUT = array(
        'TEST_CASE_01' => 3,
        'TEST_CASE_02' => 1000,
        'TEST_CASE_03' => -37,
        'TEST_CASE_04' => 199,
        'TEST_CASE_05' => 0,
        'TEST_CASE_06' => -2000,
    );
    private $input, $output, $bt;

    protected function setUp(): void {
        $test_name = strtoupper($this->getName());
        $this->input = self::TEST_DATA[$test_name];
        $this->output = self::EXPECTED_OUTPUT[$test_name];
        $this->bt = new Bt1();
    }
    /**
    * testcase_01.
    *
    * @test
    */
    public function TEST_CASE_01(): void
    {
        $result = $this->bt->solution($this->input[0], $this->input[1]);
        $this->assertEquals($result, $this->output);
    }
    /**
    * testcase_02.
    *
    * @test
    */
    public function TEST_CASE_02(): void
    {
        $result = $this->bt->solution($this->input[0], $this->input[1]);
        $this->assertEquals($result, $this->output);
    }
    /**
    * testcase_03.
    *
    * @test
    */
    public function TEST_CASE_03(): void
    {
        $result = $this->bt->solution($this->input[0], $this->input[1]);
        $this->assertEquals($result, $this->output);
    }
    /**
    * testcase_04.
    *
    * @test
    */
    public function TEST_CASE_04(): void
    {
        $result = $this->bt->solution($this->input[0], $this->input[1]);
        $this->assertEquals($result, $this->output);
    }
    /**
    * testcase_05.
    *
    * @test
    */
    public function TEST_CASE_05(): void
    {
        $result = $this->bt->solution($this->input[0], $this->input[1]);
        $this->assertEquals($result, $this->output);
    }
    /**
    * testcase_06.
    *
    * @test
    */
    public function TEST_CASE_06(): void
    {
        $result = $this->bt->solution($this->input[0], $this->input[1]);
        $this->assertEquals($result, $this->output);
    }
}
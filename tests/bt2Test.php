<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Bt2;

class Bt2Test extends TestCase
{
    const TEST_DATA =  array(
        'TEST_CASE_01' => 1905,
        'TEST_CASE_02' => 1700,
        'TEST_CASE_03' => 1988,
        'TEST_CASE_04' => 2000,
        'TEST_CASE_05' => 2001,
        'TEST_CASE_06' => 200,
    );
    const EXPECTED_OUTPUT = array(
        'TEST_CASE_01' => 20,
        'TEST_CASE_02' => 17,
        'TEST_CASE_03' => 20,
        'TEST_CASE_04' => 20,
        'TEST_CASE_05' => 21,
        'TEST_CASE_06' => 2,
    );
    private $input, $output, $bt;

    protected function setUp(): void {
        $test_name = strtoupper($this->getName());
        $this->input = self::TEST_DATA[$test_name];
        $this->output = self::EXPECTED_OUTPUT[$test_name];
        $this->bt = new Bt2();
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
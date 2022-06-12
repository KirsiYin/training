<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Bt4 as BT;

class Bt4Test extends TestCase
{
    const TEST_DATA =  array(
        'TEST_CASE_01' => [3, 6, -2, -5, 7, 3],
        'TEST_CASE_02' => [-1, -2],
        'TEST_CASE_03' => [5, 1, 2, 3, 1, 4],
        'TEST_CASE_04' => [1, 2, 3, 0],
        'TEST_CASE_05' => [9, 5, 10, 2, 24, -1, -48],
        'TEST_CASE_06' => [5, 6, -4, 2, 3, 2, -23],
        'TEST_CASE_07' => [4, 1, 2, 3, 1, 5],
        'TEST_CASE_08' => [-23, 4, -3, 8, -12],
        'TEST_CASE_09' => [1, 0, 1, 0, 1000],
    );
    const EXPECTED_OUTPUT = array(
        'TEST_CASE_01' => 21,
        'TEST_CASE_02' => 2,
        'TEST_CASE_03' => 6,
        'TEST_CASE_04' => 6,
        'TEST_CASE_05' => 50,
        'TEST_CASE_06' => 30,
        'TEST_CASE_07' => 6,
        'TEST_CASE_08' => -12,
        'TEST_CASE_09' => 0,
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
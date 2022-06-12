<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Bt3 as BT;

class Bt3Test extends TestCase
{
    const TEST_DATA =  array(
        'TEST_CASE_01' => 'aabaa',
        'TEST_CASE_02' => 'abac',
        'TEST_CASE_03' => 'a',
        'TEST_CASE_04' => 'az',
        'TEST_CASE_05' => 'abacaba',
        'TEST_CASE_06' => 'z',
        'TEST_CASE_07' => 'aaabaaaa',
        'TEST_CASE_08' => 'zzzazzazz',
        'TEST_CASE_09' => 'hlbeeykoqqqqokyeeblh',
    );
    const EXPECTED_OUTPUT = array(
        'TEST_CASE_01' => true,
        'TEST_CASE_02' => false,
        'TEST_CASE_03' => true,
        'TEST_CASE_04' => false,
        'TEST_CASE_05' => true,
        'TEST_CASE_06' => true,
        'TEST_CASE_07' => false,
        'TEST_CASE_08' => false,
        'TEST_CASE_09' => true,
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
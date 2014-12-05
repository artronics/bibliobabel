<?php


use Artronics\Utilities\Username;

class UsernameTest extends TestCase
{
    /**
     * @dataProvider providerUsername
     * @param array $data
     * @param $expectedResult
     */
    public function testUsernameGivesUersValidNameAndConvertItToUniqueUsername(array $data, $expectedResult)
    {
        $username = new Username();
        $result=$username::make($data);

        $this->assertEquals($expectedResult, $result);
    }


    public function providerUsername()
        {
            return [
                [['name' => 'seyed jalal hosseini'], 'seyed-jalal-hosseini'],
                [['name' => "seyed\t jalal      \nhosseini"], 'seyed-jalal-hosseini'],
                [['name' => 'سید جلال حسینی'], 'سید-جلال-حسینی']
            ];
        }
}


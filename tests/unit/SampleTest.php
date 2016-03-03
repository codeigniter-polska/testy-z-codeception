<?php
class SampleTest extends \CodeIgniterTestCase {

    protected $ci;

    //--------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();

        $this->ci = get_instance();

        $this->ci->load->model('sample_model');
    }

    //--------------------------------------------------------------------

    public function _before()
    {

    }

    //--------------------------------------------------------------------

    public function _after()
    {

    }

    //--------------------------------------------------------------------

    public function testIsEvenNumber()
    {
        $result = $this->ci->sample_model->is_even_number(10);
        $this->assertTrue($result);
    }

    //--------------------------------------------------------------------

    public function testIsOddNumber()
    {
        $result = $this->ci->sample_model->is_even_number(11);
        $this->assertFalse($result);
    }

}
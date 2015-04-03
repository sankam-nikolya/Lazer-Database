<?php

namespace Lazer\Classes\Helpers;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-04-03 at 16:03:47.
 */
class ConfigTest extends \PHPUnit_Framework_TestCase {

    use \helper\vfsStreamTrait;

    /**
     * @var Config
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->setUpFilesystem();
        $this->object = Config::table('users');
    }

    /**
     * @covers Lazer\Classes\Helpers\Config::getKey
     */
    public function testGetKey()
    {
        $this->assertInternalType('integer', $this->object->getKey('last_id'));
        $this->assertInternalType('object', $this->object->getKey('schema'));
        $this->assertInternalType('array', $this->object->getKey('schema', true));
    }

    /**
     * @covers Lazer\Classes\Helpers\Config::fields
     */
    public function testFieldIdExists()
    {
        $this->assertContains('id', $this->object->fields());
    }

    /**
     * @covers Lazer\Classes\Helpers\Config::relations
     */
    public function testGetMultipleRelations()
    {
        /* as object */
        $this->assertInternalType('object', $this->object->relations(['comments', 'news']));
        
        /* as array */
        $this->assertInternalType('array', $this->object->relations(['comments', 'news'], true));
    }

    /**
     * @covers Lazer\Classes\Helpers\Config::relations
     */
    public function testGetSingleRelation()
    {
        $this->assertInternalType('object', $this->object->relations('news'));
    }

    /**
     * @covers Lazer\Classes\Helpers\Config::lastId
     */
    public function testLastId()
    {
        $this->assertInternalType('integer', $this->object->lastId());
    }

}
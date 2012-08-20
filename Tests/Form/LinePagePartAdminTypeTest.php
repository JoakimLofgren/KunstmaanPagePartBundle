<?php
namespace Kunstmaan\PagePartBundle\Tests\Form;
use Kunstmaan\PagePartBundle\Form\LinePagePartAdminType;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-20 at 13:19:20.
 */
class LinePagePartAdminTypeTest extends PagePartAdminTypeTestCase
{
    /**
     * @var LinePagePartAdminType
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new LinePagePartAdminType();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert () == 'kunstmaan_pagepartbundle_linepageparttype'.
     *
     * @covers Kunstmaan\PagePartBundle\Form\LinePagePartAdminType::getName
     */
    public function testGetName()
    {
        $this->assertEquals(
          'kunstmaan_pagepartbundle_linepageparttype',
          $this->object->getName()
        );
    }

    /**
     * @covers Kunstmaan\PagePartBundle\Form\LinePagePartAdminType::buildForm
     */
    public function testBuildForm()
    {
        $this->object->buildForm($this->builder, array());
    }

    /**
     * @covers Kunstmaan\PagePartBundle\Form\LinePagePartAdminType::setDefaultOptions
     */
    public function testSetDefaultOptions()
    {
        $this->object->setDefaultOptions($this->resolver);
        $resolve = $this->resolver->resolve();
        $this->assertEquals($resolve["data_class"], 'Kunstmaan\PagePartBundle\Entity\LinePagePart');
    }
}

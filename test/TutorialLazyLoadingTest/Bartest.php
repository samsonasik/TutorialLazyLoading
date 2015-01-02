<?php

namespace Samsonasik\TutorialLazyLoadingTest;

use ReflectionClass;
use Samsonasik\TutorialLazyLoading\Bar;
use Samsonasik\TutorialLazyLoading\Foo;
use PHPUnit_Framework_TestCase;

/**
 * @author Abdul Malik Ikhsan <samsonasik@gmail.com>
 */
class Bartest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Bar
     */
    protected $bar;
    
    protected function setUp()
    {
        $this->bar = new Bar;   
    }
    
    public function testGetFooNotInitializedYet()
    {
        $this->assertInstanceOf(
            Foo::class, /** use 'Samsonasik\TutorialLazyLoading\Foo' for PHP <=5.4 **/
            $this->bar->getFoo()
        );
    }
    
    public function testGetFooWithAlreadyInialized()
    {
        $class = new ReflectionClass(
            Bar::class /** use 'Samsonasik\TutorialLazyLoading\Bar' for PHP <=5.4 **/
        );
        $property = $class->getProperty('foo');
        $property->setAccessible(true);
        $property->setValue($this->bar, new Foo);
        
        $this->assertInstanceOf(
            Foo::class, /** use 'Samsonasik\TutorialLazyLoading\Foo' for PHP <=5.4 **/
            $this->bar->getFoo()
        );
    }   
}


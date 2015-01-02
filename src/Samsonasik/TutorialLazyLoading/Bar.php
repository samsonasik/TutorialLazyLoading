<?php

namespace Samsonasik\TutorialLazyLoading;

/**
 * @author Abdul Malik Ikhsan <samsonasik@gmail.com>
 */
class Bar
{
    /**
     * @var Foo
     */
    private $foo;
    
    /**
     * Get foo property
     * @return Foo
     */
    public function getFoo()
    {
        if (!$this->foo) {
            $this->foo = new Foo;
            return $this->foo;    
        }
        
        return $this->foo;
    }
}



<?php

namespace spec\League\Flysystem\AdapterDecorator\Stub;

use League\Flysystem\AdapterInterface;
use League\Flysystem\Config;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdapterDecoratorSpec extends ObjectBehavior
{
    protected $adapter;

    public function let(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
        $this->beConstructedWith($adapter);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('League\Flysystem\AdapterDecorator\Stub\AdapterDecorator');
    }

    function it_should_decorate_write_calls()
    {
        $config = new Config;
        $this->adapter->write('path.ext', 'contents', $config)->willReturn(false);
        $this->write('path.ext', 'contents', $config)->shouldBe(false);
    }

    function it_should_decorate_update_calls()
    {
        $config = new Config;
        $this->adapter->update('path.ext', 'contents', $config)->willReturn(false);
        $this->update('path.ext', 'contents', $config)->shouldBe(false);
    }

    function it_should_decorate_createDir_calls()
    {
        $config = new Config;
        $this->adapter->createDir('path', $config)->willReturn(false);
        $this->createDir('path', $config)->shouldBe(false);
    }

    function it_should_decorate_setVisibility_calls()
    {
        $this->adapter->setVisibility('path.ext', 'public')->willReturn(false);
        $this->setVisibility('path.ext', 'public')->shouldBe(false);
    }

    function it_should_decorate_listContents_calls()
    {
        $this->adapter->listContents('path', false)->willReturn(false);
        $this->listContents('path', false)->shouldBe(false);
    }

    function it_should_decorate_read_calls()
    {
        $this->adapter->read('path.ext')->willReturn(false);
        $this->read('path.ext')->shouldBe(false);
    }

    function it_should_decorate_delete_calls()
    {
        $this->adapter->delete('path.ext')->willReturn(false);
        $this->delete('path.ext')->shouldBe(false);
    }

    function it_should_decorate_deleteDir_calls()
    {
        $this->adapter->deleteDir('path.ext')->willReturn(false);
        $this->deleteDir('path.ext')->shouldBe(false);
    }

    function it_should_decorate_has_calls()
    {
        $this->adapter->has('path.ext')->willReturn(false);
        $this->has('path.ext')->shouldBe(false);
    }

    function it_should_decorate_getMetadata_calls()
    {
        $this->adapter->getMetadata('path.ext')->willReturn(false);
        $this->getMetadata('path.ext')->shouldBe(false);
    }

    function it_should_decorate_getTimestamp_calls()
    {
        $this->adapter->getTimestamp('path.ext')->willReturn(false);
        $this->getTimestamp('path.ext')->shouldBe(false);
    }

    function it_should_decorate_getMimetype_calls()
    {
        $this->adapter->getMimetype('path.ext')->willReturn(false);
        $this->getMimetype('path.ext')->shouldBe(false);
    }

    function it_should_decorate_getSize_calls()
    {
        $this->adapter->getSize('path.ext')->willReturn(false);
        $this->getSize('path.ext')->shouldBe(false);
    }

    function it_should_decorate_getVisibility_calls()
    {
        $this->adapter->getVisibility('path.ext')->willReturn(false);
        $this->getVisibility('path.ext')->shouldBe(false);
    }

    function it_should_decorate_writeStream_calls()
    {
        $config = new Config;
        $stream = tmpfile();
        $this->adapter->writeStream('path.ext', $stream, $config)->willReturn(false);
        $this->writeStream('path.ext', $stream, $config)->shouldBe(false);
        fclose($stream);
    }

    function it_should_decorate_updateStream_calls()
    {
        $config = new Config;
        $stream = tmpfile();
        $this->adapter->updateStream('path.ext', $stream, $config)->willReturn(false);
        $this->updateStream('path.ext', $stream, $config)->shouldBe(false);
        fclose($stream);
    }

    function it_should_decorate_readStream_calls()
    {
        $this->adapter->readStream('path.ext')->willReturn(false);
        $this->readStream('path.ext')->shouldBe(false);
    }

    function it_should_decorate_copy_calls()
    {
        $this->adapter->copy('path.ext', 'other.ext')->willReturn(false);
        $this->copy('path.ext', 'other.ext')->shouldBe(false);
    }

    function it_should_decorate_rename_calls()
    {
        $this->adapter->rename('path.ext', 'other.ext')->willReturn(false);
        $this->rename('path.ext', 'other.ext')->shouldBe(false);
    }
}

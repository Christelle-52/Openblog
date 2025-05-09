<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \App\Entity\Users implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'comments' => [parent::class, 'comments', null, 16],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null, 16],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null, 16],
        "\0".parent::class."\0".'isVerified' => [parent::class, 'isVerified', null, 16],
        "\0".parent::class."\0".'nickname' => [parent::class, 'nickname', null, 16],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null, 16],
        "\0".parent::class."\0".'posts' => [parent::class, 'posts', null, 16],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null, 16],
        'comments' => [parent::class, 'comments', null, 16],
        'email' => [parent::class, 'email', null, 16],
        'id' => [parent::class, 'id', null, 16],
        'isVerified' => [parent::class, 'isVerified', null, 16],
        'nickname' => [parent::class, 'nickname', null, 16],
        'password' => [parent::class, 'password', null, 16],
        'posts' => [parent::class, 'posts', null, 16],
        'roles' => [parent::class, 'roles', null, 16],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}

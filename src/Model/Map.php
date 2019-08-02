<?php

declare( strict_types=1 );

namespace Betreuteszocken\ForumApi\Model;

use JsonSerializable;

/**
 * Class Map
 */
class Map implements JsonSerializable
{

    /**
     * the name of the map
     *
     * @var string
     */
    protected $name = '';

    /**
     * the amount
     *
     * @var int
     */
    protected $count = 0;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name ?? '';
    }

    /**
     * @return integer
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Specify data which should be serialized to JSON
     *
     * @link  https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'name'  => $this->name,
            'count' => $this->count,
        ];
    }
}

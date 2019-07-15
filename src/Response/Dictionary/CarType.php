<?php

namespace Maksa988\PolisAPI\Response\Dictionary;

class CarType implements DictionaryInterface
{
    /**
     * @var string
     */
    protected $_id;

    /**
     * @var string
     */
    protected $_groupId;

    /**
     * @var string
     */
    protected $_name;

    /**
     * CarType constructor.
     * @param $id
     * @param $groupId
     * @param $name
     */
    public function __construct($id, $groupId, $name)
    {
        $this->_id = $id;
        $this->_groupId = $groupId;
        $this->_name = $name;
    }

    /**
     * @param string $name
     *
     * @return string|null
     */
    public function __get($name)
    {
        switch ($name) {
            case 'id': return $this->_id;
            case 'groupId': return $this->_groupId;
            case 'name': return $this->_name;
        }

        return null;
    }

    /**
     * @param $data
     *
     * @return CarType
     */
    public static function fromArray($data)
    {
        return new static($data['id'], $data['groupId'], $data['name']);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->_id,
            'groupId' => $this->_groupId,
            'name' => $this->_name,
        ];
    }
}
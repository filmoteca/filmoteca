<?php

namespace Filmoteca\Exhibition\Type;

/**
 * Interface Type
 * @package Filmoteca\Exhibitions\Type
 */
interface Type
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return Attachment
     */
    public function getImage();

    /**
     * @param ImageAttachment $imagePath
     */
    public function setImage(ImageAttachment $imagePath);
}

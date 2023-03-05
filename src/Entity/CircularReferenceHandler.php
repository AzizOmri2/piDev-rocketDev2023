<?php

namespace App\Entity;

use App\Repository\CircularReferenceHandlerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CircularReferenceHandlerRepository::class)]
class CircularReferenceHandler
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function handleCircularReference($object)
    {
        return $this->serializer->serialize($object, 'json');
    }
}

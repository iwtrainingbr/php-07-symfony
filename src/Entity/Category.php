<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Category
{
    /**
     * @ORM\Id() @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public int $id;
    
    /** @ORM\Column(length=50) */
    public string $name;

    /** @ORM\Column() */
    public string $description;
}

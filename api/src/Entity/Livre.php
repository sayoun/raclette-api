<?php

// api/src/Entity/Livre.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;

/** A Livre. */
/**
 * @ApiResource(
 *     collectionOperations={
 *         "get"={
 *             "path"="/book",
 *             "condition"="featured_path(request)",
 *         }
 * },
 * )
 */
class Livre
{
    /** The id of this book. */
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __invoke($data)
    {
        return $data;
    }
}

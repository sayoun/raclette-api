<?php

// api/src/Entity/Book.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;

/** A book. */
/**
 * @ApiResource(
 *     collectionOperations={
 *         "get"={
 *             "path"="/book",
 *             "condition"="not featured_path(request)",
 *         }
 * },
 * )
 */
class Book
{
    /** The id of this book. */
    private ?int $id = null;

    /** The ISBN of this book (or null if doesn't have one). */
    public ?string $isbn = null;

    /** The title of this book. */
    public string $title = '';

    /** The description of this book. */
    public string $description = '';

    /** The author of this book. */
    public string $author = '';

    /** The publication date of this book. */
    public ?\DateTimeInterface $publicationDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}

<?php

declare(strict_types=1);

namespace PestConverter\Finder;

interface FileInterface
{
    /**
     * Get the base name of the file.
     */
    public function getBasename(string $suffix = ''): string;

    /**
     * Return the contents of the file.
     */
    public function getContents(): string;

    /**
     * Return the relative path to file.
     */
    public function getRelativePath(): string;

    /**
     * Get the absolute path to file.
     */
    public function getRealPath(): string;
}

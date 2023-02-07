<?php

declare(strict_types=1);

namespace PestConverter\Rules;

use PhpParser\Node\Stmt\Class_;
use PhpParser\NodeFinder;

/**
 * Remove unnecessary extends use from test class.
 */
final class RemoveExtendsUse extends AbstractRemoveUse
{
    /**
     * @inheritDoc
     */
    protected function useToRemove(array $nodes): array
    {
        $nodeFinder = new NodeFinder();

        /** @var array<Class_> */
        $classesWithExtends = $nodeFinder->findInstanceOf($nodes, Class_::class);

        $toRemove = [];

        foreach ($classesWithExtends as $classWithExtends) {
            if ($classWithExtends->extends === null) {
                continue;
            }
            $toRemove[] = $classWithExtends->extends->toString();
        }

        return $toRemove;
    }
}

<?php
declare(strict_types=1);

namespace Tel3scop\OtusComposerPackage;

class Paginator
{
    const MAX_LIMIT = 100;

    function getOffset(int $page, int $limit)
    {
        $this->checkParams($page, $limit);
        if ($limit > self::MAX_LIMIT) $limit = self::MAX_LIMIT;

        return ($page - 1) * $limit;
    }

    private function checkParams($page, $limit)
    {
        if ($page < 1) {
            throw new \InvalidArgumentException('Page must be greater than 0');
        }
        if ($limit < 1) {
            throw new \InvalidArgumentException('Limit must be greater than 0');
        }
    }
}
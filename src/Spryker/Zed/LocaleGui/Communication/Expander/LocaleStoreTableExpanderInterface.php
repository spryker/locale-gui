<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\LocaleGui\Communication\Expander;

use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

interface LocaleStoreTableExpanderInterface
{
    public function expandConfiguration(TableConfiguration $config): TableConfiguration;

    public function expandUrlPath(string $urlPath): string;

    /**
     * @param array<string> $row
     *
     * @return array<string>
     */
    public function expandRow(array $row): array;
}

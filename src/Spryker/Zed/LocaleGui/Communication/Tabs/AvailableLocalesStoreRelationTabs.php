<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\LocaleGui\Communication\Tabs;

use Generated\Shared\Transfer\TabItemTransfer;
use Generated\Shared\Transfer\TabsViewTransfer;
use Spryker\Zed\Gui\Communication\Tabs\AbstractTabs;

class AvailableLocalesStoreRelationTabs extends AbstractTabs
{
    /**
     * @var string
     */
    protected const AVAILABLE_TAB_NAME = 'available_locale';

    /**
     * @var string
     */
    protected const AVAILABLE_TAB_TITLE = 'Select Locales to assign';

    /**
     * @var string
     */
    protected const AVAILABLE_TAB_TEMPLATE = '@LocaleGui/_partials/_tables/available-locale-table.twig';

    /**
     * @var string
     */
    protected const ASSIGNED_TAB_NAME = 'assignment_locale';

    /**
     * @var string
     */
    protected const ASSIGNED_TAB_TITLE = 'Locales to be assigned';

    /**
     * @var string
     */
    protected const ASSIGNED_TAB_TEMPLATE = '@LocaleGui/_partials/_tables/assignment-locale-table.twig';

    /**
     * @param \Generated\Shared\Transfer\TabsViewTransfer $tabsViewTransfer
     *
     * @return \Generated\Shared\Transfer\TabsViewTransfer
     */
    protected function build(TabsViewTransfer $tabsViewTransfer): TabsViewTransfer
    {
        $this->addAvailableLocaleTab($tabsViewTransfer)
            ->addAssignmentLocaleTab($tabsViewTransfer);

        $tabsViewTransfer->setIsNavigable(false);

        return $tabsViewTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\TabsViewTransfer $tabsViewTransfer
     *
     * @return $this
     */
    protected function addAvailableLocaleTab(TabsViewTransfer $tabsViewTransfer)
    {
        $tabItemTransfer = new TabItemTransfer();
        $tabItemTransfer
            ->setName(static::AVAILABLE_TAB_NAME)
            ->setTitle(static::AVAILABLE_TAB_TITLE)
            ->setTemplate(static::AVAILABLE_TAB_TEMPLATE);

        $tabsViewTransfer->addTab($tabItemTransfer);

        return $this;
    }

    /**
     * @param \Generated\Shared\Transfer\TabsViewTransfer $tabsViewTransfer
     *
     * @return $this
     */
    protected function addAssignmentLocaleTab(TabsViewTransfer $tabsViewTransfer)
    {
        $tabItemTransfer = new TabItemTransfer();
        $tabItemTransfer
            ->setName(static::ASSIGNED_TAB_NAME)
            ->setTitle(static::ASSIGNED_TAB_TITLE)
            ->setTemplate(static::ASSIGNED_TAB_TEMPLATE);

        $tabsViewTransfer->addTab($tabItemTransfer);

        return $this;
    }
}

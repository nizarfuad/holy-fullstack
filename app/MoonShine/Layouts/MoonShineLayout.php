<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\Laravel\Layouts\CompactLayout;
use MoonShine\MenuManager\MenuDivider;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};
use App\MoonShine\Resources\RankResource;
use App\MoonShine\Resources\FeatureResource;
use MoonShine\Laravel\Layouts\BaseLayout;
use App\MoonShine\Resources\ShardResource;
use App\MoonShine\Resources\PlayerResource;
use App\MoonShine\Resources\SkybPlayerResource;

final class MoonShineLayout extends AppLayout #AppLayout untuk lebih modern
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            ...parent::menu(),
            MenuDivider::make('Website'),
            MenuGroup::make('Players', [
                MenuItem::make('Detail', PlayerResource::class),
            ]),
            MenuGroup::make('Donation', [
                MenuGroup::make('Ranks', [
                    MenuItem::make('Ranks', RankResource::class),
                    MenuItem::make('Features', FeatureResource::class),
                ]),
                MenuItem::make('Shards', ShardResource::class),
            ]),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return parent::build();
    }
}

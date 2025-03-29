<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Json;

use MoonShine\UI\Fields\Text;
use App\Models\LuckpermsPlayer;
use App\Models\SkybPlayer;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Fields\Relationships\HasOne;

/**
 * @extends ModelResource<Player>
 */
class PlayerResource extends ModelResource
{
    protected string $model = LuckpermsPlayer::class;

    protected string $title = 'Players';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Username', 'lp_username'),
            Text::make('Group', 'lp_group'),
            Text::make('UUID', 'lp_uuid'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            Text::make('Username', 'lp_username'),
            Text::make('Group', 'lp_group'),
            Text::make('UUID', 'lp_uuid'),
        ];
    }

    /**
     * @param Player $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}

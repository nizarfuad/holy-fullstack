<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Rank;
use App\Models\Feature;

use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Position;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use App\MoonShine\Resources\RankResource;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;

/**
 * @extends ModelResource<Feature>
 */
class FeatureResource extends ModelResource
{
    protected string $model = Feature::class;

    protected string $title = 'Features';

    protected string $column = 'rank_id';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            BelongsTo::make('Rank', 'rank', formatted: 'name'),
            Text::make('Feature', 'val'),

        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Select::make('Rank', 'rank_id')
                ->options(
                    Rank::all()->pluck('name', 'id')->toArray()
                ),

                Text::make('Feature', 'val')



            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
        ];
    }

    /**
     * @param Feature $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }

    // public function rank(): BelongsTo
    // {
    //     return BelongsTo::make('Rank', resource: RankResource::class);
    // }
}

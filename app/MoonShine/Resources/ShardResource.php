<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Shard;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Shard>
 */
class ShardResource extends ModelResource
{
    protected string $model = Shard::class;

    protected string $title = 'Shards';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Qty', 'qty'),
            Text::make('Harga', 'harga'),
            Image::make('Image', 'image_url'),
            Number::make('Diskon', 'diskon'),
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
                Text::make('Qty', 'qty'),
                Text::make('Harga', 'harga'),
                Number::make('Diskon', 'diskon'),
                Image::make('Image', 'image_url'),
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
     * @param Shard $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}

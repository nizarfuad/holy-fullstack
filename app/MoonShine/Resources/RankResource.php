<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Rank;
use App\Models\Feature;

use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Position;
use MoonShine\UI\Fields\Switcher;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Support\DTOs\FileItemExtra;
use MoonShine\UI\Components\ActionButton;
use App\MoonShine\Resources\FeatureResource;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Fields\Relationships\HasOne;
use MoonShine\Laravel\Fields\Relationships\HasMany;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;

/**
 * @extends ModelResource<Rank>
 */
class RankResource extends ModelResource
{
    protected string $model = Rank::class;

    protected string $title = 'Ranks';


    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            // dd(HasMany::make('Features', 'value', resource: FeatureResource::class)),
            ID::make()->sortable(),
            Text::make('Name', 'name'),
            Image::make('Image', 'image_url'),
            HasMany::make('Features', 'feature')->modalMode(),
            Text::make('Diskon (%)', 'diskon'),

            Text::make('Display Name', 'display'),
            Image::make('Image', 'image_url'),
            HasMany::make('Features', 'feature')->modalMode(),
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
                Text::make('Name', 'name'),
                Number::make('Harga', 'harga'),
                Number::make('Diskon (%)', 'diskon'),
                Image::make('Image', 'image_url')

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
<<<<<<< HEAD
=======
            Json::make('Features', 'features')
>>>>>>> e5e58a5 (Frontend project)
        ];
    }

    /**
     * @param Rank $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }

    // public function feature(): HasMany
    // {
    //     return HasMany::make('Feature', resource: FeatureResource::class)->get();
    // }
}

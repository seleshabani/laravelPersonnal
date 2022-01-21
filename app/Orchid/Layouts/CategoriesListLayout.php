<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\TD;
use App\Models\Categories;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class CategoriesListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    public $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('title', 'Title')->render(function (Categories $categorie) {
                    return Link::make($categorie->title)
                    ->route('platform.categories.edit', $categorie);
                })
        ];
    }
}

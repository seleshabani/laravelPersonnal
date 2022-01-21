<?php

namespace App\Orchid\Screens;

use Orchid\Screen\TD;
use Orchid\Screen\Screen;
use App\Models\Categories;
use Orchid\Screen\Actions\Link;
use App\Orchid\Layouts\CategoriesListLayout;

class CategorieListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'CategorieListScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
           'categories' => Categories::paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
            ->icon('pencil')
            ->route('platform.categories.edit')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        
        return [CategoriesListLayout::class];
    }
}

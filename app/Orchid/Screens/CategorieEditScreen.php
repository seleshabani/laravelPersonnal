<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Categories;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CategorieEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'CategorieEditScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Categories $categorie): array
    {
        $this->exists = $categorie->exists;
        if ($this->exists) {
            $this->name = 'edit categorie';
        }
        return ['categorie'=>$categorie];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create categorie')
            ->icon('pencil')
            ->method('createOrUpdate')
            ->canSee(!$this->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->exists),
        ];
        
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('categorie.title')
                        ->title('title')
                        ->placeholder('le titre de votre catégorie'),
                Input::make('categorie.slug')
                        ->title('slug')
                        ->placeholder('le slug de votre catégorie'),
                Input::make('categorie.description')
                        ->title('description')
                        ->placeholder('la description de votre catégorie')
            ])
        ];
    }

    
    /**
     * @param Categories    $categorie
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Categories $categorie, Request $request)
    {
        $categorie->fill($request->get('categorie'))->save();

        Alert::info('You have successfully created an categorie.');

        return redirect()->route('platform.categories.list');
    }


    /**
     * @param categorie $categorie
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Categories $categorie)
    {
        $categorie->delete();

        Alert::info('You have successfully deleted the categorie.');

        return redirect()->route('platform.categories.list');
    }

}

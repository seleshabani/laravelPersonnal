<?php

namespace App\Orchid\Screens;

use App\Models\Posts;
use Orchid\Screen\Screen;
use App\Models\Categories;
use Orchid\Attachment\File;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;

class PostsEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'PostsEditScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Posts $post): array
    {
        $this->exists = $post->exists;
        if ($this->exists) {
            $this->name = 'edit post';
        }
        return ['post'=>$post];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create post')
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
                Input::make('post.title')
                        ->title('title')
                        ->placeholder('le titre de votre post'),
                Input::make('post.slug')
                        ->title('slug')
                        ->placeholder('le slug de votre post'),
                Relation::make('post.categorie_id')
                        ->title('categorie_id')
                        ->fromModel(Categories::class, 'title'),
                Input::make('post.image')
                        ->title('image')
                        ->type('file')
                        ->path('uploads/img'),
                Quill::make('post.content')
                        ->title('content')
                        ->placeholder('Brief description for preview'),
                
            ])
        ];
    }

      
    /**
     * @param Posts    $post
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Posts $post, Request $request)
    {
        //  dd($request->get('post'));
        $file = $request->file('post')['image'];

        if ($request->hasFile('post')) {
            if ($file->isValid()) {

                $path = $file->store('images');

                $post->fill([
                    'image'=>$path,
                    'title'=>$request->get('post')['title'],
                    'slug'=>$request->get('post')['slug'],
                    'content'=>$request->get('post')['content'],
                    'categorie_id'=>$request->get('post')['categorie_id']
                ])->save();
                $post->image = $request->file('post')['image']->get('name');
                Alert::info('You have successfully created the post.');

                return redirect()->route('platform.posts.list');
            }
        }else{
            Alert::error('You dont successfully created the post.');
        }
    }


    /**
     * @param categorie $post
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Posts $post)
    {
        $post->delete();

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.categories.list');
    }

}

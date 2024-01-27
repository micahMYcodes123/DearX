<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;



class PostList extends Component

{
    public function render()
    {
        return view('livewire.post-list');
    }

    use WithPagination;
    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public $search = '';

    #[Url()]
    public $category = '';


  


    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        dd('search');
       
    }

 
    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    #[Computed()]
    public function posts()
    {
        return Post::published()
        ->orderBy('published_at',$this->sort)
        ->when($this->activeCategory, function ($query) {
            $query->withCategory($this->category);
        })
        ->paginate(3);
            
    }

    #[Computed()]
    public function activeCategory()
    {
        // if ($this->category === null || $this->category === '') {
        //     return null;
        // }

        return Category::where('slug', $this->category)->first();
    }
    public function clearFilters()
    {
        //$this->search = '';
        $this->category = '';
        $this->resetPage();
    }
}

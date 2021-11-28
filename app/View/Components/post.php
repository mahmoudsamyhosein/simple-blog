<?php

namespace App\View\Components;

use Illuminate\View\Component;

class post extends Component
{
    public $post;
    public $comments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post,$comments)
    {
        $this->post=$post;
        $this->comments=$comments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'

<div >
    <main role="main" class="container">
      <div class="row">
          <div class="blog-post mb-3">
              <h2 class="blog-post-title">
                {{($post->title) }}
          <div class="col-md-8 blog-main">
              </h2>
              <p class="blog-post-meta">  
                 بقلم {{($post->author) }}
                 {{ (Carbon\Carbon::parse($post->created_at)->diffforhumans()) }}
              </p>
              <p>
                {{($post->body)}}
               </p>
               <h1> التعليقات</h1>
               @if(count($comments)==0)
                <h3>لا يوجد تعليقات </h3>
              @else
              @foreach ($comments as $comment):
              <h4>
              {{($comment->name)}}
              </h4>
              <p>
              {{($comment->body)}}
              </p>
              @endforeach
              @endif
              <a class="btn btn-primary" href="/posts/{{$post->id}}/edit"> تعديل المقالة</a> 
              <h3> <center>أضف تعليق </center></h3>
              <x-createcomment :post="$post"/>
          </div>
            

</div>
blade;
    }
}

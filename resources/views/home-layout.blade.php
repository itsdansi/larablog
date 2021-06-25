@extends('layout')

@section('menu')
    @include('includes/homeMenu')
@endsection

@section('content')

<?php 
        $singleColumnSection = $post[0];
        $doubleColumnSection = [];
        $tripleColumnSection = [];
        // $doubleColumnSection = [$post[1],$post[2]]; 
        for($i=1;$i<count($post);$i++){
            if($i < 5){
                array_push($doubleColumnSection,$post[$i]);
            }else{
                array_push($tripleColumnSection,$post[$i]);
            }
        }
    ?> 
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
         <div class="py-6 px-5 lg:flex">
                    <div class="flex-1 lg:mr-8">
                        <img src="./images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                             @include('includes/tagButton')

                            <div class="mt-4">
                                <h1 class="text-3xl">
                                    {{$singleColumnSection->title}}
                                </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                Published: <time>{{ date('F j, Y',strtotime($singleColumnSection->created_at)) }}</time>
                            </span>
                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>
                                {{$singleColumnSection->description}}
                            </p>

                        <div class="text-sm mt-4">
                                <p>
                                    {{ Str::substr($singleColumnSection->description, 0, 150) }}{{ strlen($singleColumnSection->description) > 150 ? "...":"" }}
                                </p>

                        </div>

                        </div>

                        <footer class="flex justify-between items-center mt-8">
                           <div class="flex items-center text-sm">
                                <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold">Lary Laracore</h5>
                                    <h6>Mascot at Laracasts</h6>
                                </div>
                            </div>

                            <div class="hidden lg:block">
                                <a href={{route('single_post',$singleColumnSection->id)}}
                                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                >Read More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>

            <div class="lg:grid lg:grid-cols-2">
            @foreach($doubleColumnSection as $post)
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="./images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                @include('includes/tagButton')
                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                       {{$post->title}}
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                    Published <time>{{ date('F j, Y',strtotime($post->created_at)) }}</time>                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    {{$post->description}}
                                </p>

                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href={{route('single_post',$post->id)}}
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                                    >
                                        Read More
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>  
                @endforeach
            </div>
 
            <div class="lg:grid lg:grid-cols-3">
            @foreach($doubleColumnSection as $post)
                <article
                    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="./images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                            @include('includes/tagButton')

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                       {{$post->title}}
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                    Published <time>{{ date('F j, Y',strtotime($post->created_at)) }}</time>                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                {{$post->description}}

                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href={{route('single_post',$singleColumnSection->id)}}
                                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read More</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
            @endforeach

            </div>
</main>

@endsection



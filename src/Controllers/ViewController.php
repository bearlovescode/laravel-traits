<?php
    namespace Bearlovescode\LaravelTraits\Controllers;

    use Illuminate\View\View;
    use Bearlovescode\Datamodels\View\ViewModel;

    trait ViewController
    {
        public function respondWithView(string $view, ViewModel|null $page = null): View
        {
            if (is_null($page))
                return view($view);

            return view($view, compact('page'));
        }
    }
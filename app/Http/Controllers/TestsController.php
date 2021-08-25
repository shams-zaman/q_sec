<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreTestRequest;
use App\Option;

class TestsController extends Controller
{





    public function index()
    {
        $categories = Category::with(['categoryQuestions' => function ($query) {
            $query->inRandomOrder()
                ->with(['questionOptions' => function ($query) {
                    $query->inRandomOrder();
                }]);
        }])
            ->whereHas('categoryQuestions')
            ->get();

        return view('client.test', compact('categories'));
    }



    // ==
    public function tindex()
    {
        // $categories = Category::with(['categoryQuestions' => function ($query) {
        //     $query->inRandomOrder()
        //         ->with(['questionOptions' => function ($query) {
        //             $query->inRandomOrder();
        //         }]);
        // }])
        //     ->whereHas('categoryQuestions')
        //     ->get();

        return view('client.ttest');
    }
    // ==

    public function store(StoreTestRequest $request)
    {
        $options = Option::find(array_values($request->input('questions')));

        $result = auth()->user()->userResults()->create([
            'total_points' => $options->sum('points')
        ]);

        $questions = $options->mapWithKeys(function ($option) {
            return [
                $option->question_id => [
                    'option_id' => $option->id,
                    'points' => $option->points
                ]
            ];
        })->toArray();

        $result->questions()->sync($questions);

        return redirect()->route('client.results.show', $result->id);
    }


    public function tstore()
    {
        dd('hi');
    }
}
